<!doctype HTML>
<html>
    <head>
        <title>YOP</title>
    </head>
    
    <body>
        <p>wazabi</p>
        <?php
			/*$file = fopen('connected.txt', 'r+');
			fputs($file, '00');
			fclose($file);*/
		$bdd = new PDO('mysql:host=mysql.hostinger.fr;dbname=u181361040_yop;charset=utf8', 'u181361040_yop', '123bonsoir');
		$bdd->exec('DELETE FROM ls');
        ?>
    </body>
    
</html
