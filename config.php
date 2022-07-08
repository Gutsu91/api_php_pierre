<?php
    define('DB_USER', 'ptbbzwct_cepegra-fran');
    define('DB_PASS', 'Q9aMJ;~h@O.Kp/U/zf');
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'ptbbzwct_cepegra-fran');

    define('MODE', 'dev'); // dev or prod

    $connect = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if($connect->connect_error) :
        die('Connection failed: ' . $connect->connect_error);
    else :
        $connect->set_charset('utf8');
    endif;

require_once 'functions.php';

//myPrint_r($connect);