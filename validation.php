<?php

function email_validation($email, $registeredemails)
{
    $pattern="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
    $firstcheck=preg_match($pattern, $email);
    $secondcheck=in_array("$email", $registeredemails);
    if ($firstcheck==true && $secondcheck==true)
    {
        return true;
    }
    else
    {
        return false;
    }
}

?>