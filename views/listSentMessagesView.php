<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Messages réçus</title>
	<link rel="stylesheet" href="css/receivedM.css">
</head>
<body>
		<section class="container">
	
				<div class="message">
					<p class="header">
						
					</p>

					<p class="contenu">INSERT</p>

					<div class="div">
						<form action="controllers/messageComputing.php" method="GET">
							<input type="hidden" name="action" value="1">
							<input type="hidden" name="id" value="1">
							<input class="btn" type="submit" value="Modifier">
						</form>
						<form action="controllers/messageComputing.php" method="GET">
							<input type="hidden" name="action" value="3">
							<input type="hidden" name="id" value="3">
							<input class="btn" type="submit" value="Transferer">
						</form>
						<form action=".controllers/messageComputing.php" method="GET">
							<input type="hidden" name="action" value="2">
							<input type="hidden" name="id" value="2">
							<input class="btn" type="submit" value="Supprimer">
						</form>
					</div>
				</div>
	
	</section>
</body>
</html>
<!-- © 2025 RaHaTex - Tous droits réservés. -->


