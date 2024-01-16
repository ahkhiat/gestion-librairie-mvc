


<div class="mt-5 text-center">
<?php
if (isset($_SESSION['prenom'])) 
    {
        // echo "<body id='body_home'>";
        echo "<p class='display-5'>Bonjour, <strong>"  . $_SESSION['prenom'] . "&nbsp" . $_SESSION['nom'] . "</strong>, bienvenue dans notre librairie</p>";
        // echo "</body>";
    }   else {
        echo "Veuillez vous connecter";
    }

    
    ?>
</div>
