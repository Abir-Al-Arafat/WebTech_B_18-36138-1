<?php
    session_start();
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['dob']) )
    {
        $data = file_get_contents('../model/login.json');
        $myJSON = json_decode($data, true);

        foreach($myJSON as $key=>$user)
        {
            if($user['username'] == $_SESSION['username'])
            {
                $myJSON[$key]['name'] = $_POST['name'];
                $myJSON[$key]['email'] = $_POST['email'];
                $myJSON[$key]['gender'] = $_POST['gender'];
                $myJSON[$key]['dob'] = $_POST['dob'];

                $newJSON = json_encode($myJSON);
                file_put_contents('../model/login.json', $newJSON);
            }
        }

        echo "Success";
    }
    else
    {
        echo "name, email and date of birth field cannot be empty";
    }
?>