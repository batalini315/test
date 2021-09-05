<?php
$fulGet = $_GET['page'];
$nameFile =  stristr($fulGet, '/', true);
if($nameFile == '') {
    $nameFile =  $fulGet; 
};

$fn = ($p = $fulGet) ? 'controls/' . $nameFile . '.php' : 'controls/users.php';

(file_exists($fn)) ? require $fn : require 'controls/404.php'; 
if( file_exists($fn) && is_numeric($method)) {
    index($method);
}
?>