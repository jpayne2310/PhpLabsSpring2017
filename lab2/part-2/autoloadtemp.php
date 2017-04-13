<?php

function load_lib($class) {
    include 'templates/'.$class . '.php';
};
spl_autoload_register('load_lib');
?>
