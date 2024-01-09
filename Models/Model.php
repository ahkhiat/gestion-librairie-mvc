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

        if(is_null(self::$instance))
        {
            self::$instance=new Model();
        }
        return self::$instance;
    }

// ----------------------------------PARTIE HOME--------------------------------------------//

public function get_login()
{
    $nom = $_POST["nom"];
    $MdP = $_POST["MdP"];
    try {
        $requete = $this->bd->prepare('SELECT nom, MdP FROM utilisateur WHERE nom = :n AND MdP = :p');
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
            $requete = $this->bd->prepare('SELECT * FROM livres');
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
            $requete = $this->bd->prepare('SELECT DISTINCT Titre_livre FROM livres;');
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
            $requete = $this->bd->prepare("SELECT Nom_auteur FROM livres;");
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
            $requete = $this->bd->prepare("SELECT * FROM livres WHERE Nom_auteur = :t ");
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
            $requete = $this->bd->prepare("SELECT Editeur FROM livres;");
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
            $requete = $this->bd->prepare("SELECT * FROM livres WHERE Editeur = :t ");
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
        $requete = $this->bd->prepare('SELECT * FROM fournisseurs');
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
            $requete = $this->bd->prepare("SELECT Raison_sociale FROM fournisseurs;");
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
            $requete = $this->bd->prepare("SELECT Localite FROM fournisseurs;");
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
            $requete = $this->bd->prepare("SELECT * FROM fournisseurs WHERE Localite = :t ");
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
            $requete = $this->bd->prepare("SELECT * FROM fournisseurs WHERE Pays = :t ");
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
        $requete = $this->bd->prepare('SELECT id_commande, L.Titre_livre, F.Raison_sociale, Editeur,  Date_achat, Prix_achat, Nbr_exemplaires FROM commander C JOIN fournisseurs F ON C.Id_fournisseur = F.Id_fournisseur JOIN livres L ON C.Id_Livre = L.Id_Livre;
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
            $requete = $this->bd->prepare("SELECT Editeur FROM commander C JOIN fournisseurs F ON C.Id_fournisseur = F.Id_fournisseur JOIN livres L ON C.Id_Livre = L.Id_Livre;");
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
            $requete = $this->bd->prepare("SELECT id_commande, L.Titre_livre, F.Raison_sociale, Editeur,  Date_achat, Prix_achat, Nbr_exemplaires FROM commander C JOIN fournisseurs F ON C.Id_fournisseur = F.Id_fournisseur JOIN livres L ON C.Id_Livre = L.Id_Livre WHERE Editeur = :t ");
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
            $requete = $this->bd->prepare("SELECT Raison_sociale FROM commander C JOIN fournisseurs F ON C.Id_fournisseur = F.Id_fournisseur JOIN livres L ON C.Id_Livre = L.Id_Livre;");
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
            $requete = $this->bd->prepare("SELECT id_commande, L.Titre_livre, F.Raison_sociale, Editeur,  Date_achat, Prix_achat, Nbr_exemplaires FROM commander C JOIN fournisseurs F ON C.Id_fournisseur = F.Id_fournisseur JOIN livres L ON C.Id_Livre = L.Id_Livre WHERE Raison_sociale = :t ");
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
            $requete = $this->bd->prepare("SELECT DISTINCT Date_achat FROM commander C JOIN fournisseurs F ON C.Id_fournisseur = F.Id_fournisseur JOIN livres L ON C.Id_Livre = L.Id_Livre;");
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
            $requete = $this->bd->prepare("SELECT id_commande, L.Titre_livre, F.Raison_sociale, Editeur,  Date_achat, Prix_achat, Nbr_exemplaires FROM commander C JOIN fournisseurs F ON C.Id_fournisseur = F.Id_fournisseur JOIN livres L ON C.Id_Livre = L.Id_Livre WHERE Date_achat = :t ");
            $requete->execute(array(':t'=> $choixCommande));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
}




}