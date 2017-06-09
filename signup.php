<?php 
    if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['mail']))
    {
        $bdd = new PDO('mysql:host=mysql.hostinger.fr;dbname=u950431307_sql0;charset=utf8', 'u950431307_yop', '123bonsoir');
        $bdd->exec('INSERT INTO users(username, password, mail) VALUES(\'' . $_POST['username'] . '\', \'' . $_POST['password'] . '\', \'' . $_POST['mail'] . '\')');
        #$reponse = $bdd->query('SELECT id FROM users WHERE mail=\'' . "swage" . '\'');
        #print_r($reponse->fetch());
        echo '<script> setTimeout(function() { window.location = \'' . $_GET['url'] . '\' }, 1);</script>';
    }
?>