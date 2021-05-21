<?php
    $connexion = mysqli_connect('135.125.101.198:3306', 'root', 'root', 'woody')or die('Erreur de connexion');
?>
<html lang = "fr">
	<head>
		<meta charset = "UTF-8">
		<title> site web b2b de Woodytoys </title>
	</head>

	<body>
		<h1> site web b2b de Woodytoys </h1>
		<?php
				$test = mysqli_query($connexion,'SELECT * FROM jouets;');
			while($result = mysqli_fetch_row($test)) {
				 print '<p>Article : '.$result[0].'. Prix : '.$result[1].'€</p>';
			};

            if(isset($_POST['submit']))
            {
                $jouet = $_POST['jouet'];
                $prix = $_POST['prix'];

                $insert = mysqli_query($connexion,"INSERT INTO `jouets`(`name`, `prix`) VALUES ('$jouet','$prix')");

                if(!$insert)
                {
                    echo "erreur";
                }
                else
                {
                    echo "Données bien envoyées";

                }
            mysqli_close($connexion);
	    }
		?>
        <form method="POST">
	    <label>Jouet</label>
            <input type="text" name="jouet" placeholder="jouet" Required>
            <br><br>
            <label>Prix</label>
            <input type="number" name="prix" placeholder="prix" Required>
            <br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
	</body>
</html>
