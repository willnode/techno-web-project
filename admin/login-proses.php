<?php

$haslogin = false;
$loginwrong = false;

$username = 'admin';
$password = 'admin';

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{

	if (isset($_POST['name']) &&
		isset($_POST['pass']) &&
		isset($_POST['remember']))
	{
		// set login
		$token = $_POST['name'].'---'.$_POST['pass'];
		$token = base64_encode($token);
		$expire = $_POST['remember'] ? time() + (86400 * 30) : 0;
		setcookie('login-token', $token, $expire);
	}

	header("Location: index.php");

} else {
	// check login
	if(isset($_COOKIE['login-token'])) {
		$token = base64_decode($_COOKIE['login-token']);
		if ($token === $username.'---'.$password) {
			$haslogin = true;
		} else {
			$loginwrong = true;
		}
	}
	if (isset($_GET['logout']))
	{
		// logout
		setcookie('login-token', '', time()-3600);

		header("Location: index.php");
	}
}

?>

