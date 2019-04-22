<?php

function dbcon()
{
    $host = localhost;
    $dbname = users;
    $user = drupal;
    $pass = root;

    $dbconnect = mysqli_connect($host, $user, $pass, $dbname);

    return $dbconnect;
}

?>