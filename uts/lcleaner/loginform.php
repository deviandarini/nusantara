<?php
	session_start();
	error_reporting(0);
	if($_GET[pesan]=='login')
	{
		echo"<center><font color='red'>SORRY CAN'T OPEN THIS PAGE!
		<br />LOGIN FIRST !</font></center><br />";
	}
?>

<!DOCTYPE html>
<html>
    <head>
    	<title>
        	ROCKSTAR CLEANER
        </title>
    </head>
    <body>
        <form action="login.php" method="get">
            <table align="center">
					<tr><td>&nbsp;</td></tr>
					<tr><td>&nbsp;</td></tr>
					<tr><td>&nbsp;</td></tr>
					<tr><td>&nbsp;</td></tr>
					<tr><td>&nbsp;</td></tr>
				<tr>
                	<td colspan="2" align="center">
                    	<font size="+9">
						LOGIN
						</font>
                    </td>
                </tr>
					<tr><td></td></tr>
					<tr><td></td></tr>
					<tr><td></td></tr>
					<tr><td></td></tr>
					<tr><td></td></tr>
				<tr>
                    <td>
                        <label>
                        	Username
                        </label>
                    </td>
                    <td>
                        : <input type="text" name="username" required />
                    </td>
                </tr>
					<tr><td></td></tr>
                <tr>
                    <td>
                    	<label>
	                        Password
                        </label>
                    </td>
                    <td>
                        : <input type="password" name="password" required />
                    </td>
                </tr>
					<tr><td>&nbsp;</td></tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="yes!" />
                    </td>
                </tr>
            </table></div>
        </form>
    </body>
</html>
<?php
	session_start();
	error_reporting(0);
	if($_GET[pesan]=='error')
	{
		echo"<center><br /><font color='red'>Masukkan Username & Password!!</font></center>";
	}
?>
