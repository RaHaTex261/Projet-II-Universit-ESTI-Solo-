<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Envoyer un message</title>
	<link rel="stylesheet" href="css/insert.css">
</head>
<body>
	<form action="../../controllers/messageComputing.php" method="POST">	
		<p><strong>Selectionnez le(s) destinataire(s):</strong></p>
		
				
				
		<p><strong>Message :</strong></p>
		<textarea name="message" id="message" cols="50" rows="10" readonly><?= $message['content']?></textarea><br>
		<input type="hidden" name="update" value="2">
		<input type="submit" value="Transférer">
	</form>	
</body>
</html>
<!-- © 2025 RaHaTex - Tous droits réservés. -->