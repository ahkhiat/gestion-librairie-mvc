<?php

class Controller_fournisseurs extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render('home');
    }

    public function action_all_fournisseurs()
    {
        $m=Model::get_model();
        $data=['fournisseurs'=>$m->get_all_fournisseurs()];
        $this->render("all_fournisseurs",$data);

    }

    public function action_fournisseur_ajout()
    {
        $this->render("fournisseur_ajout");
    }
    public function action_fournisseur_ajout_requete()
    {
        $m=Model::get_model();
        $data=['fournisseur'=>$m->get_fournisseur_ajout()];
        $this->render("fournisseur_ajout_result",$data);
    }


    public function action_fournisseur_update()
    {
        $m=Model::get_model();
        $data=['fournisseur'=>$m->get_fournisseur_update()];
        $this->render("fournisseur_update",$data);
    }

    public function action_fournisseur_update_requete()
    {
        $m=Model::get_model();
        $data=['fournisseur'=>$m->get_fournisseur_update_requete()];
        $this->render("fournisseur_update_result",$data);
    }
    public function action_fournisseur_delete()
    {
        $m=Model::get_model();
        $data=['fournisseurs'=>$m->get_fournisseur_delete()];
        $data=['fournisseurs'=>$m->get_all_fournisseurs()];
        $this->render("all_fournisseurs",$data);
    }


    public function action_fournisseur_nom()
    {
        $m=Model::get_model();
        $data=['fournisseurs'=>$m->get_fournisseur_nom()];
        $this->render("fournisseur_nom",$data);

    }
    public function action_fournisseur_nom_result()
    {
        $m=Model::get_model();
        $data=['fournisseurs'=>$m->get_fournisseur_nom_result()];
        $this->render("fournisseur_nom_result",$data);

    }
    public function action_fournisseur_ville()
    {
        $m=Model::get_model();
        $data=['fournisseurs'=>$m->get_fournisseur_ville()];
        $this->render("fournisseur_ville",$data);

    }
    public function action_fournisseur_ville_result()
    {
        $m=Model::get_model();
        $data=['fournisseurs'=>$m->get_fournisseur_ville_result()];
        $this->render("fournisseur_ville_result",$data);

    }
    public function action_fournisseur_pays()
    {
        $m=Model::get_model();
        $data=['fournisseurs'=>$m->get_fournisseur_pays()];
        $this->render("fournisseur_pays",$data);

    }
    public function action_fournisseur_pays_result()
    {
        $m=Model::get_model();
        $data=['fournisseurs'=>$m->get_fournisseur_pays_result()];
        $this->render("fournisseur_pays_result",$data);

    }
    
}