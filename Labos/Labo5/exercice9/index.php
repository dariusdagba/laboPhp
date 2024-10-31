<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice9</title>
    <script type="text/javascript">
        function afficherMessage() {
            window.location.href='./choix/quitter.php';
        }
    </script>
    <style>
        .container form, .container button {
            display: inline-block;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="" method="">
            <button type="submit" name="choix" value="demenage">Démenager</button>
        </form>
        <button onclick="afficherMessage()">Quitter</button>
    </div>
       
    <?php
        function choix(){
            if(isset($_GET['choix'])){
                $choix=$_GET['choix'];
                switch($choix)
                {
                    case 'demenage' :
                        header("Location:./choix/demenage.php");
                        break;
                    default :
                        echo"choix incorrect";
                }
            }
            exit();
            
        }
        choix();
    ?>
</body>
</html>