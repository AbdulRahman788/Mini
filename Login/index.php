<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="loginIND.css">


    <title>Document</title>
</head>

<body>
		<form action="loginIND.php" method="post">

        <h1>Login Here</h1>
        <?php if(isset($_GET['error'])) { ?>
        <p class="error"> <?php echo $_GET['error']; ?> </p> 
        <?php } ?>  
        <div class="login-box">

			<label for="username">Username</label>
			<input type="text" name="uname" placeholder="Enter Username">

			<label for="password">Password</label>
			<input type="password" name="password" placeholder="Enter Password">

			<input type="submit" name="login" value="Login">
		</form>
    </div>
</body>

</html>