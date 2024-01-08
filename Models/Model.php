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

// ----------------------------------PARTIE COMMANDES--------------------------------------------//
public function get_all_commandes()
{
    try {
        $requete = $this->bd->prepare('SELECT id_commande, L.Titre_livre, F.Raison_sociale, Date_achat, Prix_achat, Nbr_exemplaires FROM commander C JOIN fournisseurs F ON C.Id_fournisseur = F.Id_fournisseur JOIN livres L ON C.Id_Livre = L.Id_Livre;
        ');
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
            $requete = $this->bd->prepare('SELECT Titre_livre FROM livres;');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

}

public function get_livre_titre_result()
{
    {
        try {
            $requete = $this->bd->prepare("SELECT * FROM livres WHERE Id_Livre = '$Id_Livre';");
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

}



}