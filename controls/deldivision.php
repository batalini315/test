<?php
    function index($id) {
        echo 'its id = '. $id;
        require_once 'module/divisions.php';
        $sqlDivision = new Divisions();
        $sqlDivision->DeleteDivision( $id);
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