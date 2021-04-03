<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type="text/css" media="screen" href='style.css'/>
    <title>Change Password</title>
</head>
<body>
    <?php include('./header.php'); ?>
    <div width='100px'>
        <form action='../controller/changepasschk.php' method="POST">
            <fieldset>
                <legend>
                    <b>Change Password</b>
                </legend>
                <table align="center">
                    <tr>
                        <td align="right">Current Password:</td>
                        <td><input type='password' name='op' required/></td>
                    </tr>
                    <tr>
                        <td align="right">New Password:</td>
                        <td><input type='password' name='np' required/></td>
                    </tr>
                    <tr>
                        <td align="right">Retype New Password:</td>
                        <td><input type='password' name='cnp' required/></td>
                    </tr>
                    
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2"><input type='submit' value="Confirm"></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </div>
    <?php include('./footer.php'); ?>
</body>
</html>