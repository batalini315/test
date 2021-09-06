<?php
require_once 'module/users.php';
$SUsers = new Users();
require_once 'module/divisions.php';
$sqlDivisions = new Divisions();
$divisions = $sqlDivisions->getDivisions();
function index() {};
require_once 'module/users.php';
$users = $SUsers->getUsers();
foreach ($users as $key => $user) {
    foreach ($divisions as  $value) {
    if($user['otdel'] == $value['id']) {
        $users[$key]['otdel']= $value['name_otdel'];
    }
}   
}

require_once 'views/users.php';
?> 
