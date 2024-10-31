<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div align="center">
        <h1>Contenu de la page sur le déménagement à Montréal ajouté</h1>
        <a href="index.php?choix=demenage&cie=mover"> liste des déménageurs </a> 
        <br/> 
        <a href="index.php?choix=demenage&cie=design"> Liste des designers </a> 
    </div>

    <div align="center">
        <?php
        if(isset($_GET["cie"])){
        $cie = $_GET["cie"] ;
        switch ("$cie"){
        case "mover":
        ?>
        <div align="center">
        <h1>Voic la liste des déménageurs :</h1>
        </div> 
        <?php
        break;
        
        case "design":
        ?>
        <h1>Voic la liste des designers :</h1>
        <?php
        break;
        }
        }
        ?>
    </div>

</body>
</html>
