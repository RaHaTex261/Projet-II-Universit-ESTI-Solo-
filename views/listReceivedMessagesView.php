<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Messages réçus</title>
	<link rel="stylesheet" href="css/receivedM.css">
    <link rel="stylesheet" href="css/sidebar.css">

</head>
<body>
	<section class="container">
						<div class="message">
					<p class="header">
						
			
					</p>
					<p class="contenu"></p>
					<div class="div">
						<form action="controllers/messageComputing.php" method="GET">
							<input type="hidden" name="action" value="3">
							<input type="hidden" name="id" value="22">
							<input class="btn" type="submit" value="Transférer">
						</form>
						<form action="controllers/messageComputing.php" method="GET">
							<input type="hidden" name="action" value="2">
							<input type="hidden" name="id" value="22">
							<input class="btn" type="submit" value="Supprimer">
						</form>
					</div>
				</div><br><br>
		
	</section>
</body>
</html>
<!-- © 2025 RaHaTex - Tous droits réservés. -->

