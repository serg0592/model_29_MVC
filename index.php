<?php
    ini_set('display_errors', 1);
    $url = strval($_SERVER['REQUEST_URI']);
    echo $url;
    require_once 'Application/Bootstrap.php';
    
?>