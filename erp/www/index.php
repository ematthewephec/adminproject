<?php
    $connexion = mysqli_connect('192.168.7.5:3306', 'root', 'root', 'woody')or die('Erreur de connexion');
?>
<html lang = "fr">
	<head>
		<meta charset = "UTF-8">
		<title> site web intranet de Woodytoys </title>
	</head>

	<body>
		<h1> site web intranet de Woodytoys </h1>
		<?php
			$test = mysqli_query($connexion,'SELECT * FROM jouets;');
			while($result = mysqli_fetch_row($test)) {
				 print '<p>Article : '.$result[0].'. Prix : '.$result[1].'�</p>';
			};
			mysqli_close($connexion);
		?>
	</body>
</html>
