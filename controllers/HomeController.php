<?php
function index()
{
    $dataUser = getAllUser();
    debug($dataUser);
    require_once PATH_VIEW . 'home.php';
}