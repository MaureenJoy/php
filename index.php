<?php session_start(); /* Starts the session */

	
	if(isset($_POST['Submit'])){
		$logins = array('username' => 'password','username1' => 'password1','username2' => 'password2');
		$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
		$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
		if (isset($logins[$Username]) && $logins[$Username] == $Password){
			$_SESSION['UserData']['Username']=$logins[$Username];
			header("location:mj.html");
			exit;
		} else {
		        $msg="<span class='spans'>Invalid Login Details</span>";
		}
	}
	
?>

<!DOCTYPE HTML>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial scale=1">
    <title>M Candle</title>
    <link rel="stylesheet" type="text/css" href="mjstyle.css">
</head>

<body class="loginbg">
    
        <table class="log_account">
		 <form action="" method="post" name="Login_Form">
        
            <tr class="login">
                <td class="manbg"> <img src="user.png" alt="logo" /></td> 
            </tr>
                 <td> <h7>Login</h7></td>
			 <?php if(isset($msg)){?>

        <?php echo $msg;?>

        <?php } ?>
   
            <tr class="input">
                <td>  <input  name="Username" type="text" placeholder="     username" name="awan" size="15" required> </td>
                <td> <input name="Password" type="password" placeholder="" size="15" required></td>
            </tr>
            <tr class="icon">
                <td> <img src="user.png" alt="logo" /></td>
                <td><img src="lock.png" alt="logo" /></td>

            </tr>


            <tr class="buttons">
                <td> <button type="Submit" name="Submit">Login</button></td>
                <td> <button type="button" id="mybtn" onclick="buttonFunction()">Signup</button></td>
            </tr>

        </table>

        </form>
<script>
	function buttonFunction() {
  location.replace('reg.html')
}
	</script>
</body>

</html>
