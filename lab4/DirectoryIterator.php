<!DOCTYPE html>

        <?php
        // http://php.net/manual/en/class.directoryiterator.php
        //DIRECTORY_SEPARATOR 

        $folder = './uploads';
        if ( !is_dir($folder) ) {
            die('Folder <strong>' . $folder . '</strong> does not exist' );
        }
        $directory = new DirectoryIterator($folder);       
        ?>
        




            
        <ol>
        <?php foreach ($directory as $fileInfo) : ?>        
            <?php if ( $fileInfo->isFile() ) : ?>
            <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <li><?php echo $fileInfo->getFilename(); ?>
                    <a href="url">View &emsp13;</a><a href="url">Delete</a></li>
                </div>
            <div class="col-md-2"></div>
            </div>
            <?php endif; ?>
        <?php endforeach; ?> 
        </ol> 
            
        
    </body>
</html>
