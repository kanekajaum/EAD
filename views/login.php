<!DOCTYPE html>
<html>
<head>
	<title>Login - EAD</title>
	<style type="text/css" >
		form{
			width: 320px;
			height: 320px;
			background-color: #ddd;
			margin: auto;
			margin-top: 30px;
			padding: 20px;
			border-radius: 10px;
		}
		input{
			width: 300px;
			padding: 15px;	
			font-size: 14px;
			border:1px solid #ccc;
		}
		h2{
			font-family: sans-serif;
			font-size: 30px; 
		}
		#sub{
			width: 330px;
			background-color: #bababa;
		}

	</style>
</head>
<body>
	<form method="POST">
		<h2>Login</h2>
		<input type="email" name="email" placeholder="E-mail"><br><br>
		<input type="password" name="senha" placeholder="******" required><br><br>
		<input id="sub"  type="submit" value="Entrar">
		

	</form>
</body>
</html>

