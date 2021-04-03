<?php
    session_start();
    require '../model/connection.php';
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['dob']) )
    {
        $id = $_SESSION['id'];
        $update_query = "UPDATE registration SET name='$_POST[name]', email='$_POST[email]', gender = '$_POST[gender]', dob = '$_POST[dob]' WHERE id=$id";
        mysqli_query($link,$update_query);

        echo "Success";
    }
    else
    {
        echo "name, email and date of birth field cannot be empty";
    }
?>