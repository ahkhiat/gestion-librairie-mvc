<?php

class Controller_utilisateurs extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render('home');
    }

    public function action_all_utilisateurs()
    {
        $m=Model::get_model();
        $data=['utilisateurs'=>$m->get_all_utilisateurs()];
        $this->render("all_utilisateurs",$data);

    }
    public function action_utilisateur_ajout()
    {
        // $m=Model::get_model();
        // $data=['utilisateurs'=>$m->get_utilisateur_ajout()];
        $this->render("utilisateur_ajout");

    }
    public function action_utilisateur_ajout_requete()
    {
        $m=Model::get_model();
        $data=['utilisateurs'=>$m->get_utilisateur_ajout()];
        $this->render("utilisateur_ajout_result");

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

}

?>