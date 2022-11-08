<?php

    require 'dbcon.php';

    // * NOTE: For signing up
    if(isset($_POST["register"]))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $check = "SELECT * FROM user WHERE email = '$email'";
        $rs = mysqli_query($con, $check);
        $data = mysqli_fetch_array($rs, MYSQLI_NUM);
        if($data[0] > 1) 
        {
            echo "User Already Exists.";
        }
        else
        {
            $query = "INSERT INTO user (email, password) VALUES ('$email', '$password')";

            $result = mysqli_query($con, $query);
            
            if(!$result)
            {
                echo "User not created.";
            }
            else
            {
                header("Location: login.php");
            }
        }
    }

    // * NOTE: For logging in
    if(isset($_POST["login"]))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "SELECT * FROM user WHERE email = '$email'";
        $result = mysqli_query($con, $query);

        if(!$result)
        {
            echo "User does not exists.";
        }
        else
        {
            $user = mysqli_fetch_row($result);

            //var_dump($user);
            if(strcmp($user[2], $password) == 0)
            {
                header("Location: twitter-login.php");
            }
            else
            {
                echo "Incorrect password.";
            }
        }
    }

?>