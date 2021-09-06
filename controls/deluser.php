<?php
    function index($id) {
        echo 'its id = '. $id;
        require_once 'module/users.php';
        $sqlUser = new Users();
        $sqlUser->DeleteUser( $id);
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