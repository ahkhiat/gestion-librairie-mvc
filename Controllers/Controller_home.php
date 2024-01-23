<?php

class Controller_home extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $m=Model::get_model();
        $data=['utilisateur'=>$m->get_utilisateur_fiche()];
        $this->render('home', $data);
    }

    public function action_connexion()
    {
        $this->render('connexion');
    }

    public function action_register()
    {
        $this->render('register');
    }
    public function action_register_requete()
    {
        
        $m=Model::get_model();
        $data=['register'=>$m->get_register_requete()];
        if($data){

            $email=validData($_POST['email']);
            $data=['register'=>$m->get_connexion($email)];

        }
        // $data=['register'=>$m->get_connexion()];
        $this->render("register_done", $data);
        
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
        $data=['login'=>$m->get_connexion()];
        $this->render("connexion_requete", $data);
        
    }
   
    
    
}