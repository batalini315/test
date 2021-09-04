<?php
echo(" <br>users");
function index() {};
require_once 'module/users.php';
$users = grtUsers();

print_r($users);
foreach ($users as $value ) {
    foreach ($value as $key => $value) {
    // $arr[3] будет перезаписываться значениями $arr при каждой итерации цикла
    echo "{$key} => {$value} ";
    print_r($arr);
}
}
require_once 'view/users';
?> 
