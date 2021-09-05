<?php
require_once 'module/users.php';
$SUsers = new Users();
echo(" <br>users");
function index() {};
require_once 'module/users.php';
$users = $SUsers->getUsers();

require_once 'views/users.php';
?> 
