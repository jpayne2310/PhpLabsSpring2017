<!DOCTYPE html>

        <?php
        /*
         * make sure php_fileinfo.dll extension is enable in php.ini
         */

        class Filehandler {

            function upLoad($keyName) {
                // Undefined | Multiple Files | $_FILES Corruption Attack
                // If this request falls under any of them, treat it invalid.
                if (!isset($_FILES[$keyName]['error']) || is_array($_FILES[$keyName]['error'])) {
                    throw new RuntimeException('Invalid parameters.');
                }

                // Check $_FILES['upfile']['error'] value.
                switch ($_FILES[$keyName]['error']) {
                    case UPLOAD_ERR_OK:
                        break;
                    case UPLOAD_ERR_NO_FILE:
                        throw new RuntimeException('No file sent.');
                    case UPLOAD_ERR_INI_SIZE:
                    case UPLOAD_ERR_FORM_SIZE:
                        throw new RuntimeException('Exceeded filesize limit.');
                    default:
                        throw new RuntimeException('Unknown errors.');
                }

                // You should also check filesize here. 
                if ($_FILES[$keyName]['size'] > 700000) {
                    throw new RuntimeException('Exceeded filesize limit.');
                }

                // DO NOT TRUST $_FILES['upfile']['mime'] VALUE !!
                // Check MIME Type by yourself.
                $finfo = new finfo(FILEINFO_MIME_TYPE);
                $validExts = array(
                    'txt' => 'text/plain',
                    'html' => 'text/html',
                    'pdf' => 'application/pdf',
                    'doc' => 'application/msword',
                    'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                    'xls' => 'application/vnd.ms-excel',
                    'xlsx' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                    'jpg' => 'image/jpeg',
                    'png' => 'image/png',
                    'gif' => 'image/gif'
                );
                $ext = array_search($finfo->file($_FILES[$keyName]['tmp_name']), $validExts, true);

                if (false === $ext) {
                    throw new RuntimeException('Invalid file format.');
                }

                // You should name it uniquely.
                // DO NOT USE $_FILES['upfile']['name'] WITHOUT ANY VALIDATION !!
                // On this example, obtain safe unique name from its binary data.

                $salt = uniqid(mt_rand(), true);
                
                //determine prefix
                if ($ext == 'docx' || $ext == 'txt' || $ext == 'pdf' || $ext == 'doc' || $ext == 'html') {
                    $fileName = 'text_' . sha1($salt . sha1_file($_FILES[$keyName]['tmp_name']));
                } else if ($ext == 'jpg' || $ext == 'png' || $ext == 'gif') {
                    $fileName = 'image_' . sha1($salt . sha1_file($_FILES[$keyName]['tmp_name']));
                } else if ($ext == 'xls' || $ext == 'xlsx') {
                    $fileName = 'sheet_' . sha1($salt . sha1_file($_FILES[$keyName]['tmp_name']));
                }

                $location = sprintf('./uploads/%s.%s', $fileName, $ext);
                
                //check for file, make one if not found
                if (!is_dir('./uploads')) {
                    mkdir('./uploads');
                }

                if (!move_uploaded_file($_FILES[$keyName]['tmp_name'], $location)) {
                    throw new RuntimeException('Failed to move uploaded file.');
                }
                return $fileName . '.' . $ext;
            }
        }
        
        $filehandler = new Filehandler();

        try {
            $fileName = $filehandler->upLoad('upfile');
        } catch (RuntimeException $e) {
            $error = $e->getMessage();
        }

        include 'index.php';
        if (isset($fileName)) :
            ?>
            <p class="alert alert-success"><?php echo $fileName; ?> is uploaded successfully.</p>
            <?php
        else:
            ?>
            <p class="alert alert-danger"><?php echo $error; ?></p>
        <?php endif;
        ?>
