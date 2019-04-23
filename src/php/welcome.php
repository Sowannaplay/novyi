<?php
function welcome()
{
    session_start();
    if (isset($_SESSION['user'])) {
        echo "Bedolaga - " . $_SESSION['user'];
        include "/home/drupal/new/html/Welcome.html";
    } else {
        echo "You are not authorized yet";
    }
}