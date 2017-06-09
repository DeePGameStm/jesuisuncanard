<!doctype HTML>
<html>
    <head>
        <title>zqwqbi</title>
    </head>
    
    <body>
        <h1>zqwqbi</h1>
        <?php
		$bdd = new PDO('mysql:host=mysql.hostinger.fr;dbname=u181361040_yop;charset=utf8', 'u181361040_yop', '123bonsoir');
		$reponse = $bdd->query('SELECT * FROM ls WHERE date BETWEEN DATE_SUB(NOW() , INTERVAL 50 MINUTE) AND NOW()');
		
		echo '<p>ls Connected: </p> <br />';
		
		while($donnee = $reponse->fetch())
		{
			echo 'ip: ' . $donnee['ip'] . ' | ipLocal: ' . $donnee['ipLocal'] . ' | port: ' . $donnee['port'] . ' | computer name: ' . $donnee['pc_name'] . ' | userName: ' . $donnee['user_name']/* . ' | heure: ' . $heure2 . ':' . $minute*/;
			echo '<br />';
		}
		
		$reponse->closeCursor();
        /*$file = fopen('connected.txt', 'a+');
		while(! feof($file))
		{
			echo fgets($file). "<br />";
		}
        fclose($file);*/
		
		
        ?>
    </body>
    
</html
