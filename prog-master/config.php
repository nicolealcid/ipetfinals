<?php

    define('DB_SERVER', '127.0.0.1');
    define('DB_USERNAME', 'test');
    define('DB_PASSWORD', 'host123');
    define('DB_NAME', 'finals');

    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

 

    if ($link === false) {
        die('Error: Could not connect . ' . mysqli_connect_error());
    }

