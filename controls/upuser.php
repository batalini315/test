<?php
    function index($id) {
        require_once 'module/divisions.php';
        $sqlDivisions = new Divisions();
        $divisions = $sqlDivisions->getDivisions();
        require_once 'module/users.php';
        $mUsers = new Users();
        $user = $mUsers->GetUserForId($id);
        $user = $user[0];

        require_once 'views/upuser.php';
    }
    if($_GET['email']){
        require_once 'module/users.php';
        $mUsers = new Users();
        $mUsers->UpdateItem('users',$_GET['id'],'email="'.$_GET['email'].'", name  = "'.$_GET['name'].'", address = "'.$_GET['address'].'",phone  = "'.$_GET['phone'].'", comment = "'.$_GET['comment'].'", otdel = "'.$_GET['otdel'].'"');
        Redirect('/users/', false);
    }

    function Redirect($url, $permanent = false)
{
    if (headers_sent() === false)
    {
        header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }
    exit();
}
        
    