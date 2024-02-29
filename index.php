<?php 
	//Site do twilio
	require('vendor/autoload.php');
	use Twilio\Rest\Client;
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
	<?php 
		if(isset($_POST['acao'])){
			$numero = $_POST['numero'];
			$mensagem = $_POST['body'];


			if(preg_match('/[0-9]{10,11}/', $numero)){
				if(preg_match('/[a-z0-9]{1,30}/', $mensagem)){
					//
					// Your Account SID and Auth Token from console.twilio.com
					$sid = "AC6567ae92a2ea47cf437efeb44ca6b41e";
					$token = "4d3c45ebf87cdfff76890057cf46de89";
					$client = new Client($sid, $token);

					// Use the Client to make requests to the Twilio REST API
					$client->messages->create(
					    // The number you'd like to send the message to
					    '+55'.$numero,
					    [
					        // A Twilio phone number you purchased at https://console.twilio.com
					        'from' => '+16206340597',
					        // The body of the text message you'd like to send
					        'body' => $mensagem
					    ]
					);
					//
					echo '<script>alert("mensagem enviada")</script>';
				}else{
					echo '<script>alert("mensagem não pode ser vazia ou maior que 30 caracteres")</script>';
				}
			}else{
				echo '<script>alert("Numero invalido")</script>';
			}
		}
	?>
	<form method="post">
		<input type="text" name="numero" placeholder="(99) 99999-9999">
		<textarea name="body" placeholder="Seu SMS"></textarea>
		<input type="submit" name="acao" value="Enviar">
	</form>

</body>
</html>