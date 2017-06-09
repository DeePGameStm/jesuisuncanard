<?php

if (isset($_FILES['file']) && $_FILES['file']['error'] === 0) {
mkdir('files/', 0777, true);
$path = 'files/' . $_FILES['file']['name'];

$resultat = move_uploaded_file($_FILES['file']['tmp_name'],$path);
if ($resultat) echo "Transfert réussi";
    
}
else
    echo 'Aucun Fichier!';
?>