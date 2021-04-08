<?php  
 require '../model/connection.php';
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["name"]))  
      {  
           $error = "Name field cannot be empty";  
      }
      else if(empty($_POST["email"]))  
      {  
           $error = "E-mail field cannot be empty";  
      }    
      else if(empty($_POST["dateOfBirth"]))  
      {  
           $error = "date of birth cannot be empty";  
      }
      else if(empty($_POST["username"]))  
      {  
           $error = "User Name cannot be empty";  
      } 
      else if(empty($_POST["password"]))  
      {  
           $error = "password cannot be empty";  
      }
      else if(empty($_POST["confirmpassword"]))
      {
          $error = "confirm password field cannot be empty";
      }
      else if(empty($_POST["gender"]))
      {
          $error = "gender field cannot be empty";
      }
     else  
     {

     $pass = $Cpass = ""; 
     if(isset($_POST['password'])&&isset($_POST['confirmpassword'])) // checking if password is set or not
     {
        $pass = $_POST['password'];
        $Cpass = $_POST['confirmpassword'];
        if($pass == $Cpass) //checking if passwords match or not
        {
          $add_query = "INSERT INTO registration (id, name, email, username, password, gender, dob)
          VALUES ('NULL', '$_POST[name]', '$_POST[email]', '$_POST[username]', '$_POST[password]', '$_POST[gender]', '$_POST[dateOfBirth]')"; 
          mysqli_query($link, $add_query);
          echo "data inserted succefully";
        }
        else
        {
          $error = "Passwords did not match";          
        }
     }
            
          
     }  
 }
     if(isset($message))  
     {  
     echo $message;  
     }
     if(isset($error))  
     {  
          echo $error;  
     } 
     if(isset($message_1))
     {
          echo $message_1;
     }       
 ?> 