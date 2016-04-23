<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Delete</title>

</head>

<body>
    <?php
session_start();
if (isset($_SESSION['loggedIn'])){
  print <<<HLINE_EMPTY
        <table width="300" border="0" cellpadding="0" cellspacing="1">
        <tr>
            <td>
                <form name="form3" method="post" action="delete_ac.php">
                    <table width="100%" border="0" cellspacing="1" cellpadding="3">
                        <tr>
                            <td colspan="3"><strong>Delete Data From mySQL Database </strong></td>
                        </tr>
                        <tr>
                            <td width="71">ID</td>
                            <td width="6">:</td>
                            <td width="301">
                                <input name="id" type="text" id="id" required>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" align="center">
                                <input type="submit" name="submit" value="Delete">
                                <input type="reset" name="reset" value="Reset">
                            </td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
    </table>
HLINE_EMPTY;
}
else{
    echo "Redirecting...";
    header( "refresh:5;url=main_login.php" );
}
?>
    
</body>

</html>