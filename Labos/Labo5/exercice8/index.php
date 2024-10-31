<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice8</title>
</head>
<body>
    <?php
    session_start();
   
        if(isset($_POST['nom'])&& isset($_POST['statuspers']))
        {
            $_SESSION['statuspers']=$_POST['statuspers'];
            $_SESSION['nom']=$_POST['nom'];
        }


        
    ?>
    <form action="" method="post">
        <label for="nom">Votre nom :</label><input type="text" name="nom" id="nom">
        <label for="statuspers">Vous êtes :</label> 
        <select name="statuspers" id="statuspers">
            <option value="Résident">Résident</option>
            <option value="Voyageur">Voyageur</option>
        </select>
        <button type="submit">ok</button>
    </form>
    <ul>
        <li><a href="?choix=demenage">Vous voulez démenager à MTL ?</a></li>
        <li><a href="?choix=quitter">Vous voulez quitter MTL ?</a></li>
    </ul>
    
    <?php
        function choix(){
            if(isset($_GET['choix'])){
                $choix=$_GET['choix'];
                switch($choix)
                {
                    case 'demenage' :
                        ?>
                        <h1>Ceci est un h1 de type HTML ajouté directement dans le "case" du choix "demenage"</h1>
                        <?php
                        include("/xampp/htdocs/Sites/Labos/Labo5/exercice8/choix/demenage.php");
                        break;
                    case 'quitter' :
                        include("/xampp/htdocs/Sites/Labos/Labo5/exercice8/choix/quitter.php");
                        break;
                    default :
                        echo"choix incorrect";
                }
            }
            
        }
        choix();
    ?>
</body>
</html>