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
            <td><a href="./views/read.html.php?<?php echo $fileInfo->getFilename(); ?>">View</a></td>
            <td><a href="url">Delete</a></td>
        </tr>
        <?php endif; ?>
        <?php endforeach; ?> 
    </tbody>
</table>
