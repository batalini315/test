<?php
require_once 'module/divisions.php';
$SDivisions = new Divisions();
function index() {};
require_once 'module/users.php';
$divisions = $SDivisions->getDivisions();

require_once 'views/divisions.php';
?> 