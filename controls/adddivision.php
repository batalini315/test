<?php 
echo("Add User");
require_once 'module/divisions.php';
$sqlDivision = new Divisions();
function index($num) {
    // require 'controls/404.php';
    echo 'divisions number'. $num;
};
echo '<br>  get  ';
print_r($_GET);
if($_GET['name_otdel']) {
    if($sqlDivision->IsDivision($_GET['name_otdel'])){
        $errorString = "Duble error";
    }
    else {
        $sqlDivision->InsertDivision($_GET['name_otdel']);
        Redirect('/divisions/', false);
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
require_once 'views/addDivision.php';