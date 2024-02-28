<?php 
	//Site do twilio
	require('vendor/autoload.php');

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="data:," />
	<title>Sms PHP</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
		html,body{
			height: 100%;
			background: rgb(230,230,230);
		}
		header{
			text-align: center;
			margin: 0 auto;
			padding: 20px 2%;
		}
		form{
			width: 600px;
			margin: 0 auto;
			text-align: center;			
		}
		form input{
			width: 50%;
			padding: 8px 6px;
		}
		form textarea{
			margin: 10px 0;
			width: 100%;
			height: 180px;
			font-size: 30px;
			resize: vertical;
		}
		input[type=submit]{
			cursor: pointer;
			background: #ccc;
			border: 1px solid black;
			color: black;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<header>Sistema SMS<hr/></header>

	<form method="post">
		<input type="text" name="numero" placeholder="Para quem">
		<textarea name="body" placeholder="Seu SMS"></textarea>
		<input type="submit" name="acao" value="Enviar">
	</form>

</body>
</html>