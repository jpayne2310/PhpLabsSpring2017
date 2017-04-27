<!DOCTYPE html>
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
        foreach ($directory as $fileInfo) :                
             if ($fileInfo->isFile()) :

                $fileNumber++;
                ?>
                <tr>
                    <td><?php echo $fileNumber; ?></td>
                    <td><?php echo $fileInfo->getFilename(); ?></td>
                    <td><a href="./read.php?thing=<?php echo $fileInfo->getFilename(); ?>">View</a></td>
                    <td><a href="?delete=./uploads/<?php echo $fileInfo->getFilename();?>">Delete</a></td>
                </tr>
            <?php endif;
        
        endforeach;      
        ?> 
    </tbody>
</table>