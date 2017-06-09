<!DOCTYPE html>

<html>
    <head>
        <title>CONTROL</title>
    </head>
    
    <body>
        <form method="post" action="">
            <span><input type="text" name="ipDist" placeholder="ipDist"/> <input type="text" name="ipControler" placeholder="ip a Toi"/> <br /> </span>
            <span><input type="text" name="portDist" placeholder="portDist"/> <input type="text" name="portControler" placeholder="port a Toi"/></span>
            <span><input type="submit" value="send"/> <br /></span>
            <span><input type="text" name="ipLocalDist" placeholder="ipLocalDist"/></span>
        </form>
        
        <?php
            //echo 'result: ' . $_POST['test'];
			$bdd = new PDO('mysql:host=mysql.hostinger.fr;dbname=u181361040_yop;charset=utf8', 'u181361040_yop', '123bonsoir');
			$ip = $_POST['ipDist'];
			$ipLocal = $_POST['ipLocalDist'];
			$port = $_POST['portDist'];
			$ipControler = $_POST['ipControler'];
			$portControler = $_POST['portControler'];
			$ctrl = 42;
			
			$req2 = $bdd->prepare('UPDATE ls SET ipControl = :IPCONTROL, portControl = :PORTCONTROL, ctrl = :CTRL WHERE ip = :IP AND ipLocal = :IPLOCAL AND port = :PORT');
			$req2->execute(array(
			'IP' => $ip,
			'IPLOCAL' => $ipLocal,
			'PORT' => $port,
			'IPCONTROL' => $ipControler,
			'PORTCONTROL' => $portControler,
			'CTRL' => $ctrl
			));
        ?>
    </body>
</html>