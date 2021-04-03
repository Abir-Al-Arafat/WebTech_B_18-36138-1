<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type="text/css" media="screen" href='style.css'/>
    <title>Dashboard</title>
</head>
<body>
    <?php include('./header.php'); ?>
    <fieldset>
    <br>
        <nav class="navtop">
            Logged in as <a href="./profile.php" class="point"><?php echo $_SESSION['name']; ?></a> ||
            <a href="../controller/logout.php" class="point">Log Out</a>
        </nav>
        <br>
    </fieldset>

    <table class="border" width='100%'>
        <tr>
            <td class="border">
                <label>Account</label>
                <br>
                <hr>
                <ul>
                    <li><a href='./dashboard.php' class="active">Dashboard</a></li>
                    <li><a href='./profile.php' >View Profile</a></li>
                    <li><a href='./editprofile.php'>Edit Profile</a></li>
                    <li><a href='./changepropic.php'>Change Profile Picture</a></li>
                    <li><a href='./changepass.php'>Change Password</a></li>
                    <li><a href='../controller/logout.php'>Logout</a></li>
                </ul>
            </td>
            <td width='70%'>
                <table align="right" class="border">
                <b> Welcome <?php echo $_SESSION['name']; ?> </b>
                    <br><br><br>

                </table>
                <br>
            </td>
        </tr>
    </table>
    <?php include('./footer.php'); ?>    
</body>
</html>