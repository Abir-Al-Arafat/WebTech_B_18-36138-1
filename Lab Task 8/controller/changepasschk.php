<?php
    session_start();
    require '../model/connection.php';
    if(isset($_POST['op']) && isset($_POST['np']) && isset($_POST['cnp']))
    {
        $oldpass = $_POST['op']; // old password
        $newpass = $_POST['np']; // new password
        $cnewpass = $_POST['cnp']; // comfirm new password
        if( $_SESSION['password'] == $oldpass )
        {
            if($newpass == $cnewpass)
            {
            $id = $_SESSION['id'];
            $update_query = "UPDATE registration SET password='$_POST[np]' WHERE id=$id";
            mysqli_query($link,$update_query);
            echo "success";
            }
            else
            {
                echo "password did not match";
            }
        }
        else
        {
            echo "old password did not match";
        }        
    }
    else
    {
        echo "one of the fields are empty";
    }
?>