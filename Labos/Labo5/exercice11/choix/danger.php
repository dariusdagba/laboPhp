<?php
    echo"Hé ! Je sais tout de toi !";
?>

<?php
    $name="date_heure_arrivee";
    if(!isset($_COOKIE[$name]))
    {
        setcookie($name,serialize($dateheures),time()+(365*24*60*60));
        echo "Bienvenue sur le site ! Votre date et heure d'arrivée ont été enregistrées.";

    }
    else
    {
        echo "Tu es arrivé sur mon site la première fois le " . $_COOKIE[$name];
    }
?>