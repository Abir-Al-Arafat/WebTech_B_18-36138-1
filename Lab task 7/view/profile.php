<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type="text/css" media="screen" href='style.css'/>
    <title><?php echo $_SESSION['name']; ?></title>
</head>
<body>
    <?php include('./header.php'); ?>
    <fieldset class="topnav">
    <br>
        <nav>
            Logged in as <a href="./profile.php"><?php echo $_SESSION['name']; ?></a> ||
            <a href="../controller/logout.php">Log Out</a>
        </nav>
        <br>
    </fieldset>
    <table class="border" width='100%'>
        <tr>
            <td class="border">
                <label>Menu</label>
                <br>
                <hr>
                <ul>
                    <li><a href='./dashboard.php' >Dashboard</a></li>
                    <li><a href='./profile.php'class="active">View Profile</a></li>
                    <li><a href='./editprofile.php' >Edit Profile</a></li>
                    <li><a href='./changepropic.php' >Change Profile Picture</a></li>
                    <li><a href='./changepass.php' >Change Password</a></li>
                    <li><a href='../controller/logout.php' >Logout</a></li>
                </ul>
            </td>
            <td>
                <table align="center" class="border" width="100%">
                    <tr>
                        <td rowspan="6" align="right">
                            <img src= '<?php echo "../images/".$_SESSION['username'].".jpeg"; ?>' height="250">
                        </td>
                    </tr>
                    <tr class="rowcolor">
                        <td class="profile">
                            <b>Name:</b>
                        </td>
                        <td class="profile">
                            <?php echo $_SESSION['name']; ?>
                        </td>
                    </tr>
                    <tr class="rowcolor">
                        <td class="profile">
                            <b>Email:</b>
                        </td>
                        <td class="profile">
                            <?php echo $_SESSION['email']; ?>
                        </td>
                    </tr>
                    <tr class="rowcolor">
                        <td class="profile">
                            <b>Gender:</b>
                        </td>
                        <td class="profile">
                            <?php echo $_SESSION['gender']; ?>
                        </td>
                    </tr>
                    <tr class="rowcolor">
                        <td class="profile">
                            <b>Date of Birth:</b>
                        </td>
                        <td class="profile">
                            <?php echo $_SESSION['dob']; ?>
                        </td>
                    </tr>
                    <tr>
                        
                    </tr>
                </table>
                <br>
            </td>
        </tr>
    </table>
    <?php include('./footer.php'); ?>
</body>
</html>