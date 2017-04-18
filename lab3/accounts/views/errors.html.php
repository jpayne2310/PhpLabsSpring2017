<?php if ( isset($errors) && is_array($errors) ) : ?>
<div class="row">
    <div class="col-sm-4">
<ul style="list-style-type:none">
    <?php foreach ($errors as $error): ?>
        <li class="bg-warning"><?php echo $error; ?></li>
    <?php endforeach; ?>
    </div>
    <div class="col-sm-8"></div>
</div>    
</ul>
<?php endif; ?>