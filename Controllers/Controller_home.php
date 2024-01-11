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
    

}