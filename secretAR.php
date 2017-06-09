<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Codes d'accès A.R.</title>
    </head>
    <body>
    
        <?php
    if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "123bonsoir")
    {
    
    ?>
    <a href="AccessRemote.rar">Download A.R.</a>
        <?php
    }
    else 
    {
        echo '<p>Mot de passe incorrect, retente si tu pense reussir</p>';
    }
    ?>
    
        
    </body>
</html>