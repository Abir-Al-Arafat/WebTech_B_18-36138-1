<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $dobErr = $genderErr = $degreeErr = $bgErr = "";
$name = $email = $dob = $gender = $degree = $bg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    //chech if the name field is filled
    if (empty($_POST["name"])) 
    {
        $nameErr = "Name is required";
    }
    else 
    {
        $name = test_input($_POST["name"]);
        //check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z- ]*$/",$name) || !preg_match("/^[a-zA-Z]*$/", $name[0])) 
    {
        $nameErr = "Only letters, white space and dash allowed"." and must start with a letter";
        $name = "";
    }
    }

    if (empty($_POST["email"])) 
    {
        $emailErr = "Email is required";
    } 
    else 
    {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
        {
          $emailErr = "Invalid email format";
          $email = "";
        }
    }
    if (empty($_POST["dob"]))
    {
      $dobErr = "Date of birth is required";
    }    
    else
    {
      $dob = test_input($_POST["dob"]);
    }
    if (empty($_POST["gender"])) 
    {
      $genderErr = "Gender is required";
    } 
    else 
    {
      $gender = test_input($_POST["gender"]);
    }
    if(empty($_POST["degree"]))
    {
      $degreeErr = "Deggree is required";
    }
    else
    {
      $degree = test_input($_POST["degree"]);
    }
    if(empty($_POST["bg"]))
    {
      $bgErr = "blood group is needed";
    }
    else
    {
      $bg = test_input($_POST["bg"]);
    }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

<!--task 1-->
<h2>Task 1.</h2>
<fieldset>
<legend><b>NAME</b></legend>
  <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span><br><br>
  <input type="submit" name="submit" value="Submit">
</fieldset>

<?php
echo "<h4>Your Input:</h4>";
echo $name;
?>

<!--task 2-->
<h2>Task 2.</h2>
<fieldset>
<legend><b>EMAIL</b></legend>
<input type="text" name="email">
<span class='error'>* <?php echo $emailErr;?></span><br><br>
<input type="submit" name="submit" value="Submit">
</fieldset>

<?php
echo "<h4>Your Input:</h4>";
echo $email;
?>

<!-- task 3 -->
<h2>Task 3</h2>
<fieldset>
<legend><b>DATE OF BIRTH</b></legend>
<input type="date" id="dob" name="dob">
<span class='error'>* <?php echo $dobErr;?></span><br><br>
<input type="submit" name="submit" value="submit">
</fieldset>

<?php
echo "<h4>Your Input:</h4>";
echo $dob;
?>

<!-- task 4 -->
<h2>Task 4</h2>
<fieldset>
<legend><b>GENDER</b></legend>
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
<span class="error">* <?php echo $genderErr;?></span>
<br><br>
<input type="submit" name="submit" value="Submit">
</fieldset>

<?php
echo "<h4>Your Input:</h4>";
echo $gender;
?>

<!-- task 5 -->
<h2>Task 5</h2>
<fieldset>
<legend><b>DEGREE</b></legend>
<input type="checkbox" name="degree" <?php if (isset($degree) && $degree=="SSC") echo "checked";?> value="SSC"> SSC
<input type="checkbox" name="degree" <?php if (isset($degree) && $degree=="HSC") echo "checked";?> value="HSC"> HSC
<input type="checkbox" name="degree" <?php if (isset($degree) && $degree=="BSc") echo "checked";?> value="BSc"> BSc
<input type="checkbox" name="degree" <?php if (isset($degree) && $degree=="MSc") echo "checked";?> value="MSc"> MSc <br><br>
<input type="submit" name="submit" value="submit" >
</fieldset>

<?php
echo "<h4>Your Input:</h4>";
echo $degree;
?>

<!-- task 6 -->
<h2>Task 6</h2>
<fieldset>
<legend><b>BLOOD GROUP</b></legend>
<select name="bg" id="bg">
<option value=""></option>
<option value="A+">A+</option>
<option value="B+">B+</option>
<option value="0+">O+</option>
</select><br><br>
<input type="submit" name="submit" value = "Submit">
</fieldset>

<?php
echo "<h4>Your Input:</h4>";
echo $bg;
?>

</form>

</body>
</html>