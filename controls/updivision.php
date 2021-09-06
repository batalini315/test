<?php
    function index($id) {
        require_once 'module/divisions.php';
        $sqlDivisions = new Divisions();
        $divisions = $sqlDivisions->getDivisions();        
        $division = $sqlDivisions->GetItemForId($id, 'otdel');
        $division = $division[0];

        require_once 'views/updivision.php';
    }
    if($_GET['name_otdel']){
        require_once 'module/divisions.php';
        $mdivisions = new Divisions();
        $set = "name_otdel='".$_GET['name_otdel']."'";
        print_r($set);
        $mdivisions->UpdateItem('otdel',$_GET['id'], $set);
        Redirect('/divisions/', false);
    }

    function Redirect($url, $permanent = false)
{
    if (headers_sent() === false)
    {
        header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }
    exit();
}
        
    