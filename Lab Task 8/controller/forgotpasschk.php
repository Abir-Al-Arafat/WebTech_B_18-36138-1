<?php
    session_start();
    if(empty($_POST['email']))
    {
        echo "email field cannot be empty";
    }
    else if(isset($_POST['email']))
    {
        $email = $_POST['email'];

        $dataString = file_get_contents('../model/login.json');
        $dataJSON = json_decode($dataString, true);
        $userFoundFlag = false;

        foreach($dataJSON as $user)
        {
            if($user['email'] == $email)
            {
                $_SESSION['flag'] = true;                                                                                                        
                $_SESSION['password'] = $user['password'];                
                $userFoundFlag = true;

                echo "your password is: ".$_SESSION['password']; 
            }           
        }
        if($userFoundFlag == false)
        {
            echo "Invalid email!";
        }
    }
?>