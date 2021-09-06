<?php 
echo("Add User");
require_once 'module/users.php';
$sqlUser = new Users();
require_once 'module/divisions.php';
$sqlDivisions = new Divisions();
$divisions = $sqlDivisions->getDivisions();
function index($num) {
    // require 'controls/404.php';
    echo 'users number'. $num;
};
echo '<br>  get  ';
print_r($_GET);
if($_GET['email']) {
    if($sqlUser->IsMail($_GET['email'])){
        $errorString = "Duble error";
    }
    else {
        $sqlUser->InsertUser($_GET);
        Redirect('/users/', false);
    }
}

function Redirect($url, $permanent = false)
{
    if (headers_sent() === false)
    {
        header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }

    exit();
}
// Redirect('http://www.google.com/', false);
require_once 'views/adduser.php';