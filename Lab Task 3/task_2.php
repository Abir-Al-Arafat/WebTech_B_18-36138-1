<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 2</title>
</head>
<body>
    <?php
    $passC = "abir"; // setting current password
    $pass = $passN = $passRN = $passCH = ""; 
    if(isset($_POST['pass'])&&isset($_POST['passN'])&&isset($_POST['passRN']))
    {
        $pass = $_POST['pass'];
        $passN = $_POST['passN'];
        $passRN = $_POST['passRN'];
        if($pass == $passC)
        {
            if($passN == $passRN)
            {
                $passCH = "password changed";
                $pass = ""; // to prevent printing current password
            }
            else
            {
                $passCH = "Re-enter new password again, input did not match";
                $pass = ""; // to prevent printing current password
            }
        }
        else
        {
            $pass = "Current password is wrong";
        }
    }
    ?>
    <form method = "post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <h2>Task 2</h2>
    <fieldset>
    <legend>CHANGE PASSWORD</legend>
    Current Password: <input type = "password" name = "pass" id = "pass"><br><br>
    New Password: <input type = "password" name = "passN" id = "passN"><br><br>
    Retype New Password: <input type = "password" name = "passRN" id = "passRN"><br><br>
    <input type = "submit" value = "Submit"><br><br>
    <?php
    echo $pass;
    echo $passCH;
    ?>
    </fieldset>
    </form>
</body>
</html>