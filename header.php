<!DOCTYPE HTML>
<html>
<head>
	<meta charset = "UTF-8">
	<title> Some Funny Guys!</title>
</head>
<body>
	
	<header>
		<nav>
			<a href="#">
				<img src="img/logo.png" alt="logo">
			</a>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="#">Portfolio</a></li>
				<li><a href="#">About Me</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
			<div>
				<form action="login.inc.php" method="post">
					<input type="text" name="username">
					<input type="password" name="pwd">
					<button type="submit" name="login-submit">Login</button>
				</form>
				<a href="signup.php">Signup</a>
				<form>
					<button type="submit" name="logout-submit">Logout</button>
				</form>
			</div>
		</nav>
	</header>