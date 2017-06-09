<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Codes d'accès A.R.C.</title>
    </head>
    <body>
    
        <?php
    if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "123bonsoir")
    {
    
    ?>
    <a href="AccessRemoteController.rar">Download A.R.C.</a>
        <?php
    }
    else 
    {
        echo '<p>Mot de passe incorrect, retente si tu pense reussir</p>';
    }
    ?>
    
        
    </body>
</html>