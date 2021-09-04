<?php 
echo("Add User");
function index($num) {
    // require 'controls/404.php';
    echo 'users number'. $num;
};
echo '<br>  get  ';
print_r($_GET);
require_once 'views/adduser.php';