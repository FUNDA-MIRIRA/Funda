<?php session_start(); /* Starts the session */
	
	/* Check Login form submitted */	
	if(isset($_POST['Submit'])){
		/* Define username and associated password array */
		$logins = array('Alex' => '123456','username1' => 'password1','username2' => 'password2');
		
		/* Check and assign submitted Username and Password to new variable */
		$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
		$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
		
		/* Check Username and Password existence in defined array */		
		if (isset($logins[$Username]) && $logins[$Username] == $Password){
			/* Success: Set session variables and redirect to Protected page  */
			$_SESSION['UserData']['Username']=$logins[$Username];
			header("location:index.php");
			exit;
		} else {
			/*Unsuccessful attempt: Set error message */
			$msg="<span style='color:red'>Invalid Login Details please retry</span>";
		}
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP Login Script Without Using Database</title>
<link href="./logincss/style.css" rel="stylesheet">
</head>
<body>


<div id="Frame0">
  <h1 style="color: orange;text-align: center;">E-LEARNING AND CAPACITY STRENGTHENING PLATFORM OF 
MY VOICE IN ZIMBABWE
.</h1>
 </div>
<br>
<form action="" method="post" name="Login_Form">
  <table style="background-color:lightblue ;" width="730" height="280" border="0" align="center" cellpadding="2" cellspacing="60" class="Table">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="2" align="left" valign="top"><h3>Login</h3></td>
    </tr>
    <tr>
      <td align="right" valign="top">Username</td>
      <td><input name="Username" type="text" class="Input"></td>
    </tr>
    <tr>
      <td s align="right">Password</td>
      <td><input name="Password" type="password" class="Input"></td>
    </tr>
    <tr>
      <td>&ensp;</td>
      <td><input name="Submit" type="submit" value="Login" class="Button3"></td style="background-color: lightblue;" >
      <img src="loginimages/lg.png" width="110" height="325" class="center" title="Logo of a company" alt="Logo of a company" />

          <td style="text-align:center ;" ><a href="https://form.jotform.com/230103290775046">Is it your first time, Click here to request an account</a> </td>
  </table>
</form>
</body>
</html>