<!DOCTYPE html>

        <?php
        // http://php.net/manual/en/class.directoryiterator.php
        //DIRECTORY_SEPARATOR 
        $folder = './uploads';
        if ( !is_dir($folder) ) {
            die('Folder <strong>' . $folder . '</strong> does not exist' );
        }
        $directory = new DirectoryIterator($folder);    
        $delete = ""
        ?>

<table class="table table-striped">
    <thead>
        <tr>
            <th>File #</th>
            <th>File Name</th>
            <th> </th>
            <th> </th>
        </tr>
    </thead>
    <tbody>
        <?php $fileNumber = 0;
        foreach ($directory as $fileInfo) : ?>        
            <?php if ( $fileInfo->isFile() ) : 
                
                $fileNumber++; ?>
        <tr>
            <td><?php echo $fileNumber; ?></td>
            <td><?php echo $fileInfo->getFilename(); ?></td>
            <td><a href="./read.php?thing=<?php echo $fileInfo->getFilename(); ?>">View</a></td>
            <td><a href="?delete=./uploads/<?php echo $fileInfo->getFilename(); ?>">Delete</a></td>
        </tr>
        <?php endif; ?>
        <?php endforeach; 
        
    
    if(isset($_GET['delete']))   {
        error_reporting(E_ERROR);
        if (filter_input(INPUT_GET, 'delete') != null) {
            $delete = $_GET['delete'];
            unlink($delete);
        }
    }
    
    if (filter_input(INPUT_GET, 'up') != null) {
    $sLoad = $_GET['up'];
    if ($sLoad == 1)
    {
        echo "Ya Baby!";
    }
    }
        ?> 
    </tbody>
</table>