<?php
session_start();
if (isset($_SESSION['user'])) {


echo "Bedolaga - ". $_SESSION['user'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <!--<link rel="stylesheet" type="text/css" href="Styles.css">-->
</head>
<body>

<form method="get" action="logout.php">
    <input type="submit" name="logout" value="Log out">
</body>
</html>
<?php }
else{
    echo "You are not authorized yet";
}
