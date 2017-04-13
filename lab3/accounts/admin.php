        <?php
        
        include_once './views/header.php';
        
        include './views/session-access.html.php';
        ?>
        <h1>Admin</h1>
        <form action ="#" method="post" class="form-horizontal">
        <div class="form-group">
            <div class="col-sm-2"></div>
        
        
         <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <a href="./logout.php" class="btn btn-warning">Log Out</a>
            </div>
        </div>

    <?php 
        include './views/footer.html.php';
        ?>