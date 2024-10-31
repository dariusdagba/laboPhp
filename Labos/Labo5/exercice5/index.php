<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice5</title>
</head>
<body>
    <?php
    session_start();
        if(isset($_POST['nom'])&& isset($_POST['statuspers']))
        {
            $_SESSION['statuspers']=$_POST['statuspers'];
            $_SESSION['nom']=$_POST['nom'];
            echo"ok appuyé <br>";
            echo $_SESSION['statuspers']."<br>";
            echo $_SESSION['nom']."<br>";
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
    <a href="./affichage/affichage.php">lien vers affichage</a>
</body>
</html>