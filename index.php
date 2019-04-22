<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <!--<link rel="stylesheet" type="text/css" href="Styles.css">-->
</head>
<body>
<div class="box">
    <div class="gridbox">
        <form method="get" action="/src/php/signup.php" class="firstrow">
            <div class="buttons">
                <input type="submit" name="signup" value="Sign Up" class="loginbutton">
                <input type="submit" name="login" value="Log In" class="loginbutton">
            </div>
        </form>
        <form method="post" name="form" action="src/php/signup.php" class="otherrows">
            <div class="text">
                <a>Sign up for free</a>
            </div>
            <div class="namefields">
                <input type="text" id="firstname" placeholder="First Name*" name="firstname" pattern="[A-Z]{1}[a-z]{1,19}" required>
                <input type="text" id="lastname" placeholder="Last Name*" name="lastname" pattern="[A-Z]{1}[a-z]{1,19}"  required>
            </div>
            <div class="namefields">
                <input type="email" placeholder="Email Address*" class="emailandpassword" name="email" id="email" required minlength="5">
            </div>
            <div class="namefields">
                <input type="password" placeholder="Password*" name="password" class="emailandpassword" id="password" required maxlength="20" pattern="(?=.*[@$!%*?&])(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
            </div>
            <div class="register">
                <input type="submit" class="rgstrbutton" value="Get Started" name="register">
            </div>
        </form>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="/home/drupal/javascript/js"></script>
<script src="/home/drupal/javascript/jquery"></script>
</body>
</html>