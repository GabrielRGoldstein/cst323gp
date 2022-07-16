<?php
//include config
require_once('../includes/config.php');
//load logger.
require_once('vendor/autoload.php');
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$logger = new Logger('login.php');
$logger->pushHandler(new StreamHandler('php://stdout', Logger::DEBUG));
$logger->info('Admin Login Logger has been initialized.');


//check if already logged in
if( $user->is_logged_in() ){$logger->info('User is already logged in, redirecting to welcome.php'); 
	header('Location: index.php'); } 
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Admin Login</title>
  <link rel="stylesheet" href="../style/normalize.css">
  <link rel="stylesheet" href="../style/main.css">
</head>
<body>

<div id="login">

	<?php

	//process login form if submitted
	if(isset($_POST['submit'])){

		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		
		if($user->login($username,$password)){ 
			$logger->info($username + ' has successfully logged in, redirecting to index.php');
			//logged in return to index page
			header('Location: index.php');
			exit;
		

		} else {
			$message = '<p class="error">Wrong username or password</p>';
		}

	}//end if submit

	if(isset($message)){ echo $message; }
	?>

	<form action="" method="post">
	<p><label>Username</label><input type="text" name="username" value=""  /></p>
	<p><label>Password</label><input type="password" name="password" value=""  /></p>
	<p><label></label><input type="submit" name="submit" value="Login"  /></p>
	</form>

</div>
</body>
</html>
