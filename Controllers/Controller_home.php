<?php

class Controller_home extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render('home');
    }

    public function action_connexion()
    {
        $this->render('connexion');
    }

    public function action_deconnexion()
    {
        $_SESSION=array();
        session_destroy();
        $this->render('logout');
    }

    public function action_connexion_requete()
    {
        $m=Model::get_model();
        $data=['login'=>$m->get_connexion($_POST['nom'], $_POST['MdP'])];
        $this->render("login", $data);
        
    }
    public function action_update_utilisateur()
    {
        $m=Model::get_model();
        $data=['login'=>$m->get_update()];
        $this->render('update_utilisateur');
    }
    public function action_update_utilisateur_requete()
    {
        $m=Model::get_model();
        $data=['login'=>$m->get_update_requete($_POST['nom'], $_POST['prenom'], $_POST["age"])];
        $this->render("update_done", $data);
    }
    
    // public function action_all_utilisateurs()
    // {
    //     $m=Model::get_model();
    //     $data=['utilisateurs'=>$m->get_all_utilisateurs()];
    //     $this->render("all_utilisateurs",$data);

    // }
}