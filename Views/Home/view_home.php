


<div class="mt-5 text-center">
<?php
if (isset($_SESSION['id'])) 
    {
        // echo "<body id='body_home'>";
        echo "<p class='display-5'>Bonjour, <strong>"  . $utilisateur[0]->prenom . "&nbsp" . $utilisateur[0]->nom . "</strong>, bienvenue dans notre librairie</p>";
        // echo "</body>";
    }   else {
        echo "Veuillez vous connecter";
    }
    ?>
</div>
