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
            $MdP = md5($_POST["MdP"]);
            $requete = $this->bd->prepare("SELECT * FROM utilisateur  WHERE nom = :n AND MdP = :p");
            $requete->execute(array(':n'=> $nom, ':p'=> $MdP));
        
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_register_requete()
{
    {
        try {
            
            $requete = $this->bd->prepare("INSERT INTO utilisateur (idUtilisateur, nom, prenom, age,
                                                                MdP, Statut) VALUES (NULL, :n, :p, :a, :mdp, NULL)");
            $requete->execute(array(':n'=> $_POST["nom"], ':p'=> $_POST["prenom"], 
                                    ':a'=> $_POST["age"], ':mdp'=> md5($_POST["MdP"])));
        
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
}


public function get_update()
    
    {
        try {
            
            $id = $_SESSION["id"];
            $requete = $this->bd->prepare("SELECT * FROM utilisateur WHERE idUtilisateur = :id" );
            $requete->execute(array(':id' => $id));
        
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

public function get_update_requete()
    
    {
        try {
            $nom = $_POST["nom"];
            $prenom = $_POST["prenom"];
            $age = $_POST["age"];
            $id = $_POST["id"];
            $requete = $this->bd->prepare("UPDATE utilisateur SET nom = :n, prenom = :p, age = :a WHERE idUtilisateur = :id" );
            $requete->execute(array(':n'=> $nom, ':p'=> $prenom, ':a'=> $age, ':id' => $id));
        
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_update_admin()
    
    {
        try {
            
            $id = $_GET["id"];
            $requete = $this->bd->prepare("SELECT * FROM utilisateur WHERE idUtilisateur = :id" );
            $requete->execute(array(':id' => $id));
        
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_update_admin_requete()
    
    {
        try {
            $nom = $_POST["nom"];
            $prenom = $_POST["prenom"];
            $age = $_POST["age"];
            $statut = $_POST["Statut"];
            $id = $_POST["id"];
            $requete = $this->bd->prepare("UPDATE utilisateur SET nom = :n, prenom = :p, age = :a, Statut = :s WHERE idUtilisateur = :id" );
            $requete->execute(array(':n'=> $nom, ':p'=> $prenom, ':a'=> $age, ':s' => $statut,':id' => $id));
        
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

// ----------------------------------PARTIE UTILISATEURS--------------------------------------------//

public function get_all_utilisateurs()
{
    try {
        $requete = $this->bd->prepare('SELECT * FROM utilisateur ORDER BY nom ASC');
        $requete->execute();
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
}

public function get_utilisateur_ajout()
{
    {
        try {
            
            $requete = $this->bd->prepare("INSERT INTO utilisateur (idUtilisateur, nom, prenom, age,
                                                                MdP, Statut) VALUES (NULL, :n, :p, :a, :mdp, :s)");
            $requete->execute(array(':n'=> $_POST["nom"], ':p'=> $_POST["prenom"], 
                                    ':a'=> $_POST["age"], ':mdp'=> md5($_POST["MdP"]), ':s'=> $_POST["statut"]));
        
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
}

public function get_utilisateur_delete()
{
    $choixUtilisateur = $_GET["id"];
    {
        try {
            $requete = $this->bd->prepare("DELETE FROM utilisateur WHERE idUtilisateur = :i ");
            $requete->execute(array(':i'=> $choixUtilisateur));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
    echo "}";
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

public function get_livre_ajout()
{
    {
        try {
            
            $requete = $this->bd->prepare("INSERT INTO livres (Id_livre, ISBN, Titre_livre, Theme_livre, 
                                                                Nbr_pages_livre, Format_livre, Nom_auteur, 
                                                                Prenom_auteur, Editeur, Annee_edition, 
                                                                Prix_vente, Langue_livre) VALUES (NULL, :i, :t, :th, :nb, :f, :n, :p, :e, :a, :px, :l)");
            $requete->execute(array(':i'=> $_POST["ISBN"], ':t'=> $_POST["Titre_livre"], 
                                    ':th'=> $_POST["Theme_livre"], ':nb' => $_POST["Nbr_pages_livre"], 
                                    ':f'=> $_POST["Format_livre"], ':n'=> $_POST["Nom_auteur"], 
                                    ':p'=> $_POST["Prenom_auteur"], ':e'=> $_POST["Editeur"], 
                                    ':a'=> $_POST["Annee_edition"], ':px'=> $_POST["Prix_vente"], 
                                    ':l'=> $_POST["Langue_livre"]));
        
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
}

public function get_livre_update()
{
    $choixLivre = $_GET["id"];
    {
        try {
            $requete = $this->bd->prepare("SELECT * FROM livres WHERE Id_Livre = :i ");
            $requete->execute(array(':i'=> $choixLivre));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
}

public function get_livre_update_requete()
{
    {
        try {
            
            $requete = $this->bd->prepare("UPDATE livres SET ISBN = :i, Titre_livre = :t, Theme_livre = :th, Nbr_pages_livre = :nb, Format_livre = :f, Nom_auteur = :n, Prenom_auteur = :p, Editeur = :e, Annee_edition = :a, Prix_vente = :px, Langue_livre = :l WHERE Id_Livre = :id" );
            $requete->execute(array(':i'=> $_POST["ISBN"], ':t'=> $_POST["Titre_livre"], 
                                    ':th'=> $_POST["Theme_livre"], ':nb' => $_POST["Nbr_pages_livre"], 
                                    ':f'=> $_POST["Format_livre"], ':n'=> $_POST["Nom_auteur"], 
                                    ':p'=> $_POST["Prenom_auteur"], ':e'=> $_POST["Editeur"], 
                                    ':a'=> $_POST["Annee_edition"], ':px'=> $_POST["Prix_vente"], 
                                    ':l'=> $_POST["Langue_livre"], ':id'=> $_POST["Id_Livre"]));
        
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
}

public function get_livre_delete()
{
    $choixLivre = $_GET["id"];
    {
        try {
            $requete = $this->bd->prepare("DELETE FROM livres WHERE Id_Livre = :i ");
            $requete->execute(array(':i'=> $choixLivre));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
    echo "}";
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

public function get_fournisseur_ajout()
{
    {
        try {
            
            $requete = $this->bd->prepare("INSERT INTO fournisseurs (Id_fournisseur, Code_fournisseur, Raison_sociale, Rue_fournisseur, 
                                                                Code_postal, Localite, Pays, 
                                                                Tel_fournisseur, Url_fournisseur, Email_fournisseur, 
                                                                Fax_fournisseur) VALUES (NULL, :c, :r, :rue, :co, :l, :p, :tel, :ur, :mail, :fax)");
            $requete->execute(array(':c'=> $_POST["Code_fournisseur"], ':r'=> $_POST["Raison_sociale"], 
                                    ':rue'=> $_POST["Rue_fournisseur"], ':co' => $_POST["Code_postal"], 
                                    ':l'=> $_POST["Localite"], ':p'=> $_POST["Pays"], 
                                    ':tel'=> $_POST["Tel_fournisseur"], ':ur'=> $_POST["Url_fournisseur"], 
                                    ':mail'=> $_POST["Email_fournisseur"], ':fax'=> $_POST["Fax_fournisseur"]));
        
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
}

public function get_fournisseur_update()
{
    $choixFournisseur = $_GET["id"];
    {
        try {
            $requete = $this->bd->prepare("SELECT * FROM fournisseurs WHERE Id_fournisseur = :i ");
            $requete->execute(array(':i'=> $choixFournisseur));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
}

public function get_fournisseur_update_requete()
{
    {
        try {
            
            $requete = $this->bd->prepare("UPDATE fournisseurs SET Code_fournisseur = :c, Raison_sociale = :rai, Rue_fournisseur = :rue, Code_postal = :code, Localite = :l, Pays = :p, Tel_fournisseur = :tel, Url_fournisseur = :ur, Email_fournisseur = :em, Fax_fournisseur = :fax WHERE Id_fournisseur = :id" );
            $requete->execute(array(':c'=> $_POST["Code_fournisseur"], ':rai'=> $_POST["Raison_sociale"], 
                                    ':rue'=> $_POST["Rue_fournisseur"], ':code' => $_POST["Code_postal"], 
                                    ':l'=> $_POST["Localite"], ':p'=> $_POST["Pays"], 
                                    ':tel'=> $_POST["Tel_fournisseur"], ':ur'=> $_POST["Url_fournisseur"], 
                                    ':em'=> $_POST["Email_fournisseur"], ':fax'=> $_POST["Fax_fournisseur"],
                                    ':id'=> $_POST['Id_fournisseur']));
        
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
}

public function get_fournisseur_delete()
{
    $choixFournisseur = $_GET["id"];
    {
        try {
            $requete = $this->bd->prepare("DELETE FROM fournisseurs WHERE Id_fournisseur = :i ");
            $requete->execute(array(':i'=> $choixFournisseur));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
    echo "}";
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