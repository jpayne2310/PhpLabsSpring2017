<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once './autoload.php';
        
        $test = new ErrorMessage();
        
        $test->addMessage("testing error message 1", test[1]);
        $test->addMessage("testing error message 2", test[2]);
        $test->addMessage("testing error message 3", test[3]);
        
        $test->removeMessage(2);
        
        var_dump('<br />', $test->getAllMessages());
        
        ?><br /> <br /><?php
        
        $test2 = new Message();
        
        $test2->addMessage("test1", 'testing message 1');
        $test2->addMessage("test2", 'testing message 2');
        $test2->addMessage("test3", 'testing message 3');
        
        $test2->removeMessage("test3");
        
        var_dump('<br />', $test2->getAllMessages());
        
        ?><br /> <br /><?php
        
        $test3 = new SuccessMessage();
        
        $test3->addMessage("test1", 'testing successful message 1');
        $test3->addMessage("test2", 'testing successful message 2');
        $test3->addMessage("test3", 'testing successful message 3');
        
        $test3->removeMessage("test1");
        
        var_dump('<br />', $test3->getAllMessages());
        ?>
    </body>
</html>
