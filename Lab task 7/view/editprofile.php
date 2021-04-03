<?php
    session_start();
    require '../model/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type="text/css" media="screen" href='style.css'/>
    <title>Edit Profile</title>
</head>
<body>
    <?php include('./header.php'); ?>
    <fieldset>
    <br>
        <nav>
Logged in as <a href="./profile.php"><?php echo $_SESSION['name']; ?></a> ||
            <a href="../controller/logout.php">Log Out</a>
        </nav>
    <br>
    </fieldset>
    <table border="1px solid black" width='100%'>
        <tr>
            <td>
                <label>Menu</label>
                <br>
                <hr>
                <ul>
                    <li><a href='./dashboard.php'>Dashboard</a></li>
                    <li><a href='./profile.php'>View Profile</a></li>
                    <li><a href='./editprofile.php' class="active">Edit Profile</a></li>
                    <li><a href='./changepropic.php'>Change Profile Picture</a></li>
                    <li><a href='./changepass.php'>Change Password</a></li>
                    <li><a href='../controller/logout.php'>Logout</a></li>
                </ul>
            </td>
            <td>
                <form action='../controller/update.php' method="POST">
                    <table align="center" border="1px solid black" width='40%'>
                        <tr class="rowcolor">
                            <td width='40%' align="right">
                                Name:
                            </td>
                            <td >
                                <input type='text' name = 'name' value="<?php echo $_SESSION['name']; ?>" required/>
                            </td>
                        </tr>

                        <tr class="rowcolor">
                            <td align="right">
                                Email:
                            </td>
                            <td>
                                <input type='email' name = 'email' value="<?php echo $_SESSION['email']; ?>" required/>
                            </td>
                        </tr>

                        <tr class="rowcolor">
                            <td align="right">
                                Gender:
                            </td>
                            <td>
                                <input type='text' name = 'gender' value="<?php echo $_SESSION['gender']; ?>" required/>
                            </td>
                        </tr>

                        <tr class="rowcolor">
                            <td align="right">
                                Date of birth:
                            </td>
                            <td>
                                <input type='date' name = 'dob' value="<?php echo $_SESSION['dob']; ?>" required/>
                            </td>
                        </tr>
                        <tr >
                            <td colspan="2">
                                <center>
                                    <input type='submit' value="Submit">
                                </center>
                            </td>
                        </tr>
                    </table>
                </form>
                <br>
            </td>
        </tr>
    </table>
    <?php include('./footer.php'); ?>
</body>
</html>