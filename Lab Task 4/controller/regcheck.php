<?php  
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
          if(file_exists('../model/login.json'))  
          {  
                $current_data = file_get_contents('../model/login.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(    
                     'name'          =>     $_POST["name"],  
                     'email'     =>     $_POST["email"],     
                     'username'     =>     $_POST["username"],  
                     'password'     =>     $_POST["password"],  
                     'gender'     =>     $_POST["gender"],
                     'dob'     =>     $_POST["dateOfBirth"]   
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('../model/login.json', $final_data))  
                {  
                    $message = "File Appended Successfully in login.json"."<br>";                  
                }  
          } 
          else  
          {  
                $error = 'JSON File does not exist';  
          }  
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