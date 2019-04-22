<?php
session_start();
if (isset($_SESSION['user'])) {
    echo "Bedolaga - ". $_SESSION['user'];
    include "Welcome.html";
}
else{
    echo "You are not authorized yet";
}
