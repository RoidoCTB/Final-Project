<?php

    require 'dbcon.php';

    // * NOTE: For signing up
    if(isset($_POST["register"]))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $check = "SELECT * FROM user WHERE username = '$username'";
        $rs = mysqli_query($con, $check);
        $data = mysqli_fetch_array($rs, MYSQLI_NUM);
        if($data[0] > 1) 
        {
            echo "User Already Exists.";
        }
        else
        {
            $query = "INSERT INTO user (username, password) VALUES ('$username', '$password')";

            $result = mysqli_query($con, $query);
            
            if(!$result)
            {
                echo "User not created.";
            }
            else
            {
                header("Location: index.php");
            }
        }
    }

    // * NOTE: For logging in
    if(isset($_POST["login"]))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM user WHERE username = '$username'";
        $result = mysqli_query($con, $query);

        if(!$result)
        {
            echo "User does not exists.";
        }
        else
        {
            $user = mysqli_fetch_row($result);

            //var_dump($user);
            if(strcmp($user[1], $password) == 0)
            {
                header("Location: twitter-login.php?user=$username");
            }
            else
            {
                echo "Incorrect password.";
            }
        }
    }

    if(isset($_POST["tweet"]))
    {
        $username = $_POST['username'];
        $body = $_POST['tweet-body'];

        $query = "INSERT INTO tweet (username, text) VALUES ('$username', '$body')";

        $result = mysqli_query($con, $query);
            
        if(!$result)
        {
            echo "Tweet not created.";
        }
        else
        {
            header("Location: twitter-login.php?user=$username");
        }
    }

?>