<?php 
    $bdd = new PDO('mysql:host=mysql.hostinger.fr;dbname=u950431307_sql0;charset=utf8', 'u950431307_yop', '123bonsoir');
    $reponse = $bdd->query('SELECT id FROM users WHERE mail=\'' . $_GET['mail'] . '\'');
    if(empty($reponse->fetch()))
        echo 0;
    else
        echo 1; 

    $reponse->closeCursor();
?>