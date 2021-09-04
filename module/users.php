<?php
require 'module/mysql.php';
function grtUsers() {
    $arr = sql_query('SELECT * FROM users ORDER BY name DESC LIMIT 5');
return $arr;
}

?>