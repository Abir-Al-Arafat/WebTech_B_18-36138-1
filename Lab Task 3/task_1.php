<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    .error {color: #FF0000;}
    </style>
</head>
<body>

<?php 
$un = $pass = "";
$unErr = $passErr = $passR = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    if (empty($_POST["un"])) 
    {
        $unErr = "Name is required";
    }
    else
    {
        $un = test_input ($_POST["un"]);
        if(!preg_match("/^[a-zA-Z-'_ ]*$/",$un))
        {
            $unErr = "User Name can contain only alpha numeric characters, period, dash or underscore only";
        }
        if(2>strlen($un))
        {
            $unErr = "User Name must contain at least two (2) characters";
        }        
    }
    if (empty($_POST["pass"]))
    {
        $passErr = "password field cannot be empty";
    }
    else
    {
        $pass = test_input ($_POST["pass"]);
        if(strlen($pass)<8)
        {
            $passErr = "password cannot be less than 8 characters";
            $passR = "password is rejected";
        }
        if(!preg_match("/[\@#$%]/",$pass))
        {
            $passErr = "password must contain at least one of the special characters (@, #, $,  %)";
            $passR = "password is rejected";
        }
    } 
}
  
function test_input($data) 
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h2>Task 1.</h2>
<fieldset>
<legend><b>LOGIN</b></legend>
  User Name : <input type="text" name="un"> 
  <span class="error">* <?php echo $unErr;?></span><br><br>
  Password : <input type="password" name="pass">
  <span class="error">* <?php echo $passErr;?></span><br><br>
  <input type = "checkbox" name = "RM" id = "RM" value = "checkedRM">
  <label for="RM">Remember Me</label><br><br>
  <input type="submit" name="submit" value="Submit">
</fieldset>

<?php
echo "<h4>Your Input:</h4>";
echo $un,"<br>";
echo $passR; 
?>
</form>
    
</body>
</html>