<?php
    include_once './views/header.php';
    ?>
<!DOCTYPE html>
<form action ="#" method="post" class="form-horizontal">
        <h1>Sign Up</h1>
        <div class="form-group">
            <div class="col-sm-2"></div>
            <label class="col-sm-2 label-control pull-left">Email: </label>
            <div class="col-sm-5">
                <input name="email" value="<?php echo $email;?>" class="form-control"/>      
            </div>
            <div class="col-sm-3"></div>
        </div>
        <div class="form-group">
            <div class="col-sm-2"></div>
            <label for="password" class="col-sm-2 label-control pull-left">Password: </label>
            <div class="col-sm-5">
                <input name="password" type="password" value="<?php echo $password;?>" class="form-control" />
            </div>
            <div class="col-sm-3"></div>
        </div>
        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <button type="reset" class="btn btn-default">Cancel</button>
                <input type="submit" class="btn btn-primary" />
            </div>
        </div>
</form>
<a href="login.php">Login Page</a>
<?php
    include_once './views/footer.html.php';