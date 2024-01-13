<?php

class Controller_livres extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render('home');
    }

    public function action_all_livres()
    {
        $m=Model::get_model();
        $data=['livres'=>$m->get_all_livres()];
        $this->render("all_livres",$data);

    }

    public function action_livre_titre()
    {
        $m=Model::get_model();
        $data=['livres'=>$m->get_livre_titre()];
        $this->render("livre_titre",$data);
    }

    public function action_livre_titre_result()
    {
        $m=Model::get_model();
        $data=['livres'=>$m->get_livre_titre_result()];
        $this->render("livre_titre_result",$data);
    }

    public function action_livre_auteur()
    {
        $m=Model::get_model();
        $data=['livres'=>$m->get_livre_auteur()];
        $this->render("livre_auteur",$data);
    }

    public function action_livre_auteur_result()
    {
        $m=Model::get_model();
        $data=['livres'=>$m->get_livre_auteur_result()];
        $this->render("livre_auteur_result",$data);
    }
    public function action_livre_editeur()
    {
        $m=Model::get_model();
        $data=['livres'=>$m->get_livre_editeur()];
        $this->render("livre_editeur",$data);
    }

    public function action_livre_editeur_result()
    {
        $m=Model::get_model();
        $data=['livres'=>$m->get_livre_editeur_result()];
        $this->render("livre_editeur_result",$data);
    }
    public function action_livre_ajout()
    {
        // $m=Model::get_model();
        // $data=['livre'=>$m->get_livre_ajout()];
        $this->render("livre_ajout");
    }
    public function action_livre_ajout_requete()
    {
        $m=Model::get_model();
        $data=['livre'=>$m->get_livre_ajout()];
        $this->render("livre_ajout_result",$data);
    }


    public function action_update_livre()
    {
        $m=Model::get_model();
        $data=['livre'=>$m->get_livre_update()];
        $this->render("update_livre",$data);
    }

    public function action_update_livre_requete()
    {
        $m=Model::get_model();
        $data=['livre'=>$m->get_livre_update_requete()];
        $this->render("update_livre_result",$data);
    }
    public function action_delete_livre()
    {
        $m=Model::get_model();
        $data=['livres'=>$m->get_livre_delete()];
        $data=['livres'=>$m->get_all_livres()];
        $this->render("all_livres",$data);
    }
    
}