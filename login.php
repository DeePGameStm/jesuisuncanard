<?php
    
    session_start();
    $bdd = new PDO('mysql:host=mysql.hostinger.fr;dbname=u181361040_yop;charset=utf8', 'u181361040_yop', '123bonsoir');

    if(!isset($_SESSION['username']))
    {
        $_SESSION['id'] = -1;
    }
    
    if($_SESSION['id'] == -1)
    {
        if(isset($_POST['ID']) && isset($_POST['password']))
        {
            $reponse = $bdd->query('SELECT id FROM users WHERE IDNAME=\'' . $_POST['ID'] . '\' AND password=\'' . md5($_POST['password']) . '\'');
            
            if(!empty($reponse->fetch()))
            {
                $reponse->closeCursor();
                $_SESSION['id'] = $_POST['ID'];
                $reponse = $bdd->query('SELECT * FROM users WHERE IDNAME=\'' . $_POST['ID'] . '\' AND password=\'' . md5($_POST['password']) . '\'');
                $donne = $reponse->fetch();
                $_SESSION['username'] = $donne['username'];
                echo '<script> setTimeout(function() { window.location = \'' . $_GET['url'] . '\' }, 1);</script>';
                $reponse->closeCursor();
            }
            else
            {
                #login pas bon
                $reponse->closeCursor();
                echo '<script>alert(\'mauvais login dsl!\')</script>';
                #header($_GET['url']);
                echo '<script> setTimeout(function() { window.location = \'' . $_GET['url'] . '\' }, 1);</script>';
                
                #echo '<script>window.location = ' . $_GET['url'] . ' </script>';
            }
        }
        else{
            echo 'yop';
            echo '<script>alert(\'mauvais login dsl!\')</script>';
            #header($_GET['url']);
            echo '<script> setTimeout(function() { window.location = \'' . $_GET['url'] . '\' }, 2500);</script>';
        }
    }
    
?>