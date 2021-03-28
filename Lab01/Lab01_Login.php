<html>
	<head>
		<title>Login From</title>
	</head>
	<body>
		<h1>Login Form</h1>
		<form action="" method="post">
			<table >
				<tr>
					<td>Username:</td>
					<td><input type="text" name="username" value="<?php echo $username;?>" placeholder="Write your username">
						<span><?php echo $err_username;?></span>
					</td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input name="password" type="password" value="<?php echo $password;?>" placeholder="Write your password">
						<span><?php echo $err_password;?></span>
					</td>
				</tr>
			</table>
		</form>
	
	</body>
</html>