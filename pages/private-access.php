<?php
	if (isset($_SESSION["valide"]) AND (isset($_GET["deconnection"]))) {
		session_destroy();
	}
?> 

<h3>Accès BTS SIO</h3>

		<p>

		<form method="post" action="/portfolio-bts-php-js/pages/bts-sio.php">
			
				<p>
					<label>Votre pseudo :</label>
					<input type="text" name="pseudo">
				</p>
			
				<p>
					<label>Mot de passe :</label>
					<input type="password" name="mot_de_passe">
				</p>
			
				<p>
					<input type="submit" value="Valider" name="submit">
				</p>
			
		</form>

		</p>