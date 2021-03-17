<?php
    session_start();
    if(isset($_POST['op']) && isset($_POST['np']) && isset($_POST['cnp']))
    {
        $oldpass = $_POST['op']; // old password
        $newpass = $_POST['np']; // new password
        $cnewpass = $_POST['cnp']; // comfirm new password
        if( $_SESSION['password'] == $oldpass )
        {
            if($newpass == $cnewpass)
            {
            $data = file_get_contents('../model/login.json');
            $myJSON = json_decode($data, true);

            foreach($myJSON as $key=>$user)
            {
            if($user['username'] == $_SESSION['username'])
            {
                $myJSON[$key]['password'] = $_POST['np'];
                $newJSON = json_encode($myJSON);
                file_put_contents('../model/login.json', $newJSON);
                $_SESSION['password'] = $_POST['np'];   
                echo "Success";
            }
            }
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