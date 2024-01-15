


<div class="mt-5 text-center">
<?php
if (isset($_SESSION['prenom'])) 
    {
        echo "<p class='display-5'>Bonjour, <strong>"  . $_SESSION['prenom'] . "&nbsp" . $_SESSION['nom'] . "</strong>, bienvenue dans notre librairie</p>";
    }   else {
        echo "Veuillez vous connecter";
    }
    ?>
</div>
