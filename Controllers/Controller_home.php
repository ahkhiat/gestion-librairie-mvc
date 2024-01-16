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

    public function action_register()
    {
        $this->render('register');
    }
    public function action_register_requete()
    {
        // if(empty($_POST["MdP"]) && $_POST["MdP"] == $_POST["MdP2"]) 
        
        $m=Model::get_model();
        $data=['register'=>$m->get_register_requete()];
        $data=['register'=>$m->get_connexion()];
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
        $data=['login'=>$m->get_connexion($_POST['email'], $_POST['MdP'])];
        $this->render("login", $data);
        
    }
   
    
    
}