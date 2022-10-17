<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
</head>
<body>
    <h1>Calculatrice</h1>
    <h2>Exercice calculatrice</h2>
    <p>Créez une branche et un nouveau fichier dans 14-exe/14-calcul-{prénom}.php<br>
Envoyez-moi le git pull request sur notre dépôt de la classe</p>
    <p>$reponse doit contenir la réponse au calcul, ou l'erreur de calcul ou de fonctionnement</p>
    <form action="" name="calcul" method="POST">
        <input type="text" name="first" />
        <select name="choix">
            <option value="addition">+</option>
            <option value="soustraction">-</option>
            <option value="division">*</option>
            <option value="multiplication">/</option>
        </select>
        <input type="text" name="second" />
        <input type="submit" value="Calculer"/>
    </form>
    <?php
    if(isset($reponse)):
        echo $reponse;
    endif;
    ?>
    <hr>
    <?php
    var_dump($_POST);
    ?>
<?php
if(isset($_POST['first'],$_POST['choix'],$_POST['second'],)){
   
  
    $nombre1 =($_POST['first']);
    $choix = ($_POST['choix']);
    $nombre2 = ($_POST['second']);
    if($nombre1 != NULL AND $nombre2 != NULL) // Puis on vérifie leur valeur ...
    {
        if($choix == 'division' AND $nombre2 == 0)
        {
            echo 'On peut pas diviser par 0 voyons !';
        }
        else
        { 
            if($choix == 'addition')
            {
            $resultat = $nombre1 + $nombre2;
            echo 'La somme de ces deux nombres est '.$resultat;
            }
            
            if($choix == 'soustraction') // Si on a choisi la soustraction, on calcul la différence.
            {
            $resultat = $nombre1 - $nombre2; // On calcul
            echo 'La différence de ces deux nombres est '.$resultat; // Puis on affiche le résultat
            }
            
            if($choix == 'multiplication')
            { 
            $resultat = $nombre1 * $nombre2;
            echo 'La multiplication des deux nombres est '.$resultat;
            }
        
            if($choix == 'division')
            {
            $resultat = $nombre1 / $nombre2;
            echo 'Le résultat est '.$resultat;
            }
        }
        }
    else // Si les champs n'ont pas étaient renseigné, on affiche un message d'erreur ...
    {
    echo 'Veuillez renseigner tous les champs.';
    }
}
?>
</body>
</html>