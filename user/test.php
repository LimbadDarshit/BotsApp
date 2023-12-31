<?php
    $pass = "Don#3434";
    $salt = password_hash( random_bytes(16) , PASSWORD_BCRYPT);
    // $salt = random_bytes(16);

    $hashed_pass1 = password_hash( $pass . $salt, PASSWORD_BCRYPT);
    $hashed_pass2 = password_hash( $pass . $salt, PASSWORD_BCRYPT);
    echo $hashed_pass1."<br>";
    echo $hashed_pass2."<br>";

    if(password_verify($hashed_pass1 , $hashed_pass2))  {
        echo "true";
    }else{
        echo "false";
    }
?>