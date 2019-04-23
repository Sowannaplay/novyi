<?php

function email_validation($email)
{
    $pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
    $firstcheck = preg_match($pattern, $email);
    if ($firstcheck == 1)
    {
        return true;
    }
    else
    {
        return false;
    }
}

?>