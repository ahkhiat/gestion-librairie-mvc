<?php

class Model
{

    
    private $bd;

    private static $instance=null;

    private function __construct()
    {
        try {
            $this->bd = new PDO('mysql:host=localhost:3307;dbname=librairie-sami', 'root', '');
            $this->bd->query("SET NAMES 'utf8'");
            $this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } 
        catch (PDOException $e) 
        {
            die('<p>Echec connexion. Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
    }

    public static function get_model()
    {
        // session_start();
        // $_SESSION["nom"] = "Leung";
        // $_SESSION["prenom"] = "Thierry";
        if(is_null(self::$instance))
        {
            self::$instance=new Model();
        }
        return self::$instance;
    }

// ----------------------------------PARTIE HOME--------------------------------------------//



public function get_register()
{
    // $nom = $_POST["nom"];
    // $MdP = $_POST["MdP"];
    if(isset($_POST['envoi'])) {
        if (!empty($_POST['nom']) AND !empty($_POST['MdP'])) {
            $nom = htmlspecialchars($_POST['nom']);
            $MdP = sha1($_POST['MdP']);

                try {
                    $insertUser = $this->bd->prepare('INSERT INTO utilisateur(nom, MdP) VALUES(:n, :p');
                    $insertUser->execute(array($nom, $MdP));

                    $requete = $this->bd->prepare('SELECT nom, MdP FROM utilisateur WHERE nom = :n AND MdP = :p');
                    $requete->execute(array(':n'=> $nom, ':p'=> $MdP));
                    }
                catch (PDOException $e) {
                    die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
                    }
                return $requete->fetchAll(PDO::FETCH_OBJ);

            if (!$requete->rowCount() > 0) {
                $_SESSION['nom'] = $nom;
                $_SESSION['MdP'] = $MdP;
                $_SESSION['id'] = $requete->fetch()['id'];
            }
            echo $_SESSION['id'];
            
        } else {
    echo "Veuillez completer tous les champs";
        }
    }
}

public function get_connexion()
    
    {
        try {
            $nom = $_POST["nom"];
            $MdP = $_POST["MdP"];
            $requete = $this->bd->prepare("SELECT * FROM utilisateur WHERE nom = :n AND MdP = :p");
            $requete->execute(array(':n'=> $nom, ':p'=> $MdP));
        
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

// ----------------------------------PARTIE LIVRE--------------------------------------------//
    public function get_all_livres()
    {
        try {
            $requete = $this->bd->prepare('SELECT * FROM livres ORDER BY Titre_livre ASC');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_livre_titre()
{
    {
        try {
            $requete = $this->bd->prepare('SELECT DISTINCT Titre_livre FROM livres ORDER BY Titre_livre ASC');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

}

public function get_livre_titre_result()
{
    $choixLivre = $_POST["choixLivre"];
    {
        try {
            $requete = $this->bd->prepare("SELECT * FROM livres WHERE Titre_livre = :t ");
            $requete->execute(array(':t'=> $choixLivre));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
}

public function get_livre_auteur()
{
    {
        try {
            $requete = $this->bd->prepare("SELECT Nom_auteur FROM livres ORDER BY Nom_auteur ASC");
            $requete->execute();

            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
}

public function get_livre_auteur_result()
{
    $choixAuteur = $_POST["choixAuteur"];
    {
        try {
            $requete = $this->bd->prepare("SELECT * FROM livres WHERE Nom_auteur = :t ORDER BY Titre_livre ASC");
            $requete->execute(array(':t'=> $choixAuteur));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
}

public function get_livre_editeur()
{
    {
        try {
            $requete = $this->bd->prepare("SELECT DISTINCT Editeur FROM livres ORDER BY Editeur ASC");
            $requete->execute();

            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
}

public function get_livre_editeur_result()
{
    $choixEditeur = $_POST["choixEditeur"];
    {
        try {
            $requete = $this->bd->prepare("SELECT * FROM livres WHERE Editeur = :t ORDER BY Titre_livre ASC");
            $requete->execute(array(':t'=> $choixEditeur));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
}


// ----------------------------------PARTIE FOURNISSEUR--------------------------------------------//
public function get_all_fournisseurs()
{
    try {
        $requete = $this->bd->prepare('SELECT * FROM fournisseurs ORDER BY Raison_sociale ASC');
        $requete->execute();
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
}

public function get_fournisseur_nom()
{
    {
        try {
            $requete = $this->bd->prepare("SELECT Raison_sociale FROM fournisseurs ORDER BY Raison_sociale ASC");
            $requete->execute();

            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
}

public function get_fournisseur_nom_result()
{
    $choixFournisseur = $_POST["choixFournisseur"];
    {
        try {
            $requete = $this->bd->prepare("SELECT * FROM fournisseurs WHERE Raison_sociale = :t ");
            $requete->execute(array(':t'=> $choixFournisseur));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
}

public function get_fournisseur_ville()
{
    {
        try {
            $requete = $this->bd->prepare("SELECT DISTINCT Localite FROM fournisseurs ORDER BY Localite ASC");
            $requete->execute();

            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
}

public function get_fournisseur_ville_result()
{
    $choixFournisseur = $_POST["choixFournisseur"];
    {
        try {
            $requete = $this->bd->prepare("SELECT * FROM fournisseurs WHERE Localite = :t ORDER BY Raison_sociale ASC");
            $requete->execute(array(':t'=> $choixFournisseur));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
}

public function get_fournisseur_pays()
{
    {
        try {
            $requete = $this->bd->prepare("SELECT DISTINCT Pays FROM fournisseurs;");
            $requete->execute();

            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
}

public function get_fournisseur_pays_result()
{
    $choixFournisseur = $_POST["choixFournisseur"];
    {
        try {
            $requete = $this->bd->prepare("SELECT * FROM fournisseurs WHERE Pays = :t ORDER BY Raison_sociale ASC");
            $requete->execute(array(':t'=> $choixFournisseur));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
}
// ----------------------------------PARTIE COMMANDES--------------------------------------------//
public function get_all_commandes()
{
    try {
        $requete = $this->bd->prepare('SELECT id_commande, L.Titre_livre, F.Raison_sociale, Editeur,  Date_achat, Prix_achat, Nbr_exemplaires FROM commander C JOIN fournisseurs F ON C.Id_fournisseur = F.Id_fournisseur JOIN livres L ON C.Id_Livre = L.Id_Livre ORDER BY Titre_livre ASC
        ');
        $requete->execute();
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
}

public function get_commande_editeur()
{
    {
        try {
            $requete = $this->bd->prepare("SELECT Editeur FROM commander C JOIN fournisseurs F ON C.Id_fournisseur = F.Id_fournisseur JOIN livres L ON C.Id_Livre = L.Id_Livre ORDER BY Editeur");
            $requete->execute();

            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
}

public function get_commande_editeur_result()
{
    $choixCommande = $_POST["choixCommande"];
    {
        try {
            $requete = $this->bd->prepare("SELECT id_commande, L.Titre_livre, F.Raison_sociale, Editeur,  Date_achat, Prix_achat, Nbr_exemplaires FROM commander C JOIN fournisseurs F ON C.Id_fournisseur = F.Id_fournisseur JOIN livres L ON C.Id_Livre = L.Id_Livre WHERE Editeur = :t ORDER BY Titre_livre ASC");
            $requete->execute(array(':t'=> $choixCommande));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
}

public function get_commande_fournisseur()
{
    {
        try {
            $requete = $this->bd->prepare("SELECT Raison_sociale FROM commander C JOIN fournisseurs F ON C.Id_fournisseur = F.Id_fournisseur JOIN livres L ON C.Id_Livre = L.Id_Livre ORDER BY Raison_sociale ASC");
            $requete->execute();

            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
}

public function get_commande_fournisseur_result()
{
    $choixCommande = $_POST["choixCommande"];
    {
        try {
            $requete = $this->bd->prepare("SELECT id_commande, L.Titre_livre, F.Raison_sociale, Editeur,  Date_achat, Prix_achat, Nbr_exemplaires FROM commander C JOIN fournisseurs F ON C.Id_fournisseur = F.Id_fournisseur JOIN livres L ON C.Id_Livre = L.Id_Livre WHERE Raison_sociale = :t ORDER BY Titre_livre ASC");
            $requete->execute(array(':t'=> $choixCommande));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
}

public function get_commande_date()
{
    {
        try {
            $requete = $this->bd->prepare("SELECT DISTINCT Date_achat FROM commander C JOIN fournisseurs F ON C.Id_fournisseur = F.Id_fournisseur JOIN livres L ON C.Id_Livre = L.Id_Livre ORDER BY Date_achat");
            $requete->execute();

            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
}

public function get_commande_date_result()
{
    $choixCommande = $_POST["choixCommande"];
    {
        try {
            $requete = $this->bd->prepare("SELECT id_commande, L.Titre_livre, F.Raison_sociale, Editeur,  Date_achat, Prix_achat, Nbr_exemplaires FROM commander C JOIN fournisseurs F ON C.Id_fournisseur = F.Id_fournisseur JOIN livres L ON C.Id_Livre = L.Id_Livre WHERE Date_achat = :t ORDER BY Titre_livre ASC");
            $requete->execute(array(':t'=> $choixCommande));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
}




}