<?php

include "./../database/db.php";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['txtUsername'];
    $password = $_POST['txtPassword'];
    $confirmPassword = $_POST['txtConfirmPassword'];
    $hash_password = password_hash($password, PASSWORD_BCRYPT);

    

    session_start();
    if(strlen($username) < 4) {
        // login success
        $_SESSION['error'] = "username must be more than 4 characthers";
        header("location: ./../register.php");
        exit;
    }
    else
    {
        if($password == NULL)
        {
            $_SESSION['error'] = "Password must be fill";
            header("location: ./../register.php");
            exit;
        }
        else if(strcmp($confirmPassword,$password ) != 0)
            {
                $_SESSION['error'] = "Password must be same";
                header("location: ./../register.php");
                exit;
            }
            
        else if($confirmPassword === ""){
                $_SESSION['error'] = "Confirm Password must be fill";
                header("location: ./../register.php");
                exit;
        }
        
        if(!isset($_SESSION['error']))
        {
            $sql = $conn->prepare("INSERT INTO users(username, password,role) VALUES(?,?,?)") ;
            $sql->bind_param("sss", $username, $hash_password, $role);
            $username = $_POST['txtUsername'];
            $hash_password = password_hash($password, PASSWORD_BCRYPT);
            $role = 'guest';
            $sql->execute();
            $sql->close();

            $conn->query($sql);
            header("location: ./../login.php");
        }
        
    }  
        
}

