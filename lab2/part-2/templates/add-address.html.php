<!DOCTYPE html>
<form action ="#" method="post" class="form-horizontal">
        <h1>Add Address</h1>
        <div class="form-group">
            <div class="col-sm-2"></div>
            <label class="col-sm-2 label-control pull-left">Full Name</label>
            <div class="col-sm-5">
                <input name="fullname" value="<?php echo $fullname;?>" class="form-control"/>      
            </div>
            <div class="col-sm-3"></div>
        </div>
        <div class="form-group">
            <div class="col-sm-2"></div>
            <label for="email" class="col-sm-2 label-control pull-left">Email</label>
            <div class="col-sm-5">
                <input name="email" value="<?php echo $email;?>" class="form-control" />
            </div>
            <div class="col-sm-3"></div>
        </div>
        <div class="form-group">
            <div class="col-sm-2"></div>
            <label for="addressLine1" class="col-sm-2 label-control pull-left">Address Line1</label>
            <div class="col-sm-5">
                <input name="addressline1" value="<?php echo $addressline1;?>" class="form-control"/>
            </div>
            <div class="col-sm-3"></div>
        </div>
        <div class="form-group">
            <div class="col-sm-2"></div>
            <label for="city" class="col-sm-2 label-control pull-left">City</label>
            <div class="col-sm-5">
                <input name="city" value="<?php echo $city;?>" class="form-control"/>
            </div>
            <div class="col-sm-3"></div>
        </div>
        <div class="form-group">
            <div class="col-sm-2"></div>
            <label for="state" class="col-sm-2 label-control pull-left">States</label>
            <div class="col-sm-5">
                <select name="state" class="form-control">
                    <?php foreach ($states as $key => $value): ?>
                    <option value="<?php echo $key; ?>" <?php if ($state == $key): ?> selected="selected" <?php endif; ?>><?php echo $value; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-sm-3"></div>
        </div>
         <div class="form-group">
             <div class="col-sm-2"></div>
            <label for="zip" class="col-sm-2 label-control pull-left">Zip Code</label>
            <div class="col-sm-5">
                <input name="zip" value="<?php echo $zip;?>" class="form-control"/>
            </div>
            <div class="col-sm-3"></div>
        </div>
        <div class="form-group">
             <div class="col-sm-2"></div>
            <label for="birthday" class="col-sm-2 label-control pull-left">Birth Date</label>
            <div class="col-sm-5">
                <input name="birthday" value="<?php echo $birthday;?>" class="form-control"/>
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
<a href="index.php">Return to Home Page</a>