	<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title> Ceci est une page html de test avec des balises PHP</title>
	</head>
	<body>

		<p> Aujourd'hui nous sommes le <?php echo date ('d/m/Y h:i:s'); ?>.</p>
		<h2>Page de test</h2>

		<p> 
			Cette page contient du code html avec des balises PHP<br/> <?php echo "Celle ci est en php";?>

			Voici quelques petits tests:
		</p>

		<ul>
			<li style="color: blue";> Texte en bleu</li>
			<li style="color: red";> Texte en rouge</li>
			<li style="color: green";> Texte en vert</li>
		</ul>

		<?php echo "Ceci est du texte";?>
	</body>
</html>