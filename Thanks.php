
<!DOCTYPE html>
<html>
<head>
    <title>Page de traitement</title>
</head>

<p>
    <?php
    
    
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $sujet = $_POST['sujet'];
    $tel = $_POST['numero'];
    $message = $_POST['message'];
    
    echo 'Merci ' .$_POST["prenom"].' '.$_POST["nom"].' de nous avoir contacté à propos de "'.$_POST["sujet"].'".';
    echo'<br><br>';
    echo 'Un de nos conseiller vous contactera soit à l’adresse '.$_POST["email"].' ou par téléphone au 
    '.$_POST["telephone"].' dans les plus brefs délais pour traiter votre demande:';
    echo'<br><br>';
    echo $_POST["message"];
    ?>

    
</p>



</html>
