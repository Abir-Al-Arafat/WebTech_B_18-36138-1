<?php
    session_start();
    require '../model/connection.php';
    if(empty($_POST['username']) && empty($_POST['password']))
    {
        echo "One or more of the fields are empty!";
    }
    else if(isset($_POST['username']) && isset($_POST['password']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $userFoundFlag = false;

        $login_query = "select * from registration";
        $res = mysqli_query($link,$login_query);

        while($row = mysqli_fetch_array($res))
        {
            if($row['username'] == $username && $row['password'] == $password)
            {
                $_SESSION['flag'] = true;
                $_SESSION['id'] = $row['id'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['email'] = $row['email'];                
                $_SESSION['gender'] = $row['gender'];                                
                $_SESSION['dob'] = $row['dob'];                                                
                $_SESSION['username'] = $row['username'];                                                
                $_SESSION['password'] = $row['password'];                
                $userFoundFlag = true;
                header('location: ../view/dashboard.php');
            }
        }
        if($userFoundFlag == false)
        {
            echo "Invalid user!";
        }
    }
?>