
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Envoyer un message</title>
	<link rel="stylesheet" href="css/insert.css">
	
</head>
<body>
	
	<form class="box" action="../../controllers/messageComputing.php" method="POST">	
		<h4>Selectionnez le(s) destinataire(s):</h4>
		<div class="div">
			
			
		</div>
		<h4>Message :</h4>
		<textarea name="message" id="message" cols="50" rows="10"></textarea><br>
		<input type="hidden" name="send" value="1">
		<input type="submit" value="Envoyer">
	</form>	
</body>
</html>
<!-- © 2025 RaHaTex - Tous droits réservés. -->