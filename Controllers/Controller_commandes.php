<?php

class Controller_commandes extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render('home');
    }

    public function action_all_commandes()
    {
        $m=Model::get_model();
        $data=['commandes'=>$m->get_all_commandes()];
        $this->render("all_commandes",$data);

    }
    public function action_commande_editeur()
    {
        $m=Model::get_model();
        $data=['commandes'=>$m->get_commande_editeur()];
        $this->render("commande_editeur",$data);

    }
    public function action_commande_editeur_result()
    {
        $m=Model::get_model();
        $data=['commandes'=>$m->get_commande_editeur_result()];
        $this->render("commande_editeur_result",$data);

    }
    public function action_commande_fournisseur()
    {
        $m=Model::get_model();
        $data=['commandes'=>$m->get_commande_fournisseur()];
        $this->render("commande_fournisseur",$data);

    }
    public function action_commande_fournisseur_result()
    {
        $m=Model::get_model();
        $data=['commandes'=>$m->get_commande_fournisseur_result()];
        $this->render("commande_fournisseur_result",$data);

    }
    public function action_commande_date()
    {
        $m=Model::get_model();
        $data=['commandes'=>$m->get_commande_date()];
        $this->render("commande_date",$data);

    }
    public function action_commande_date_result()
    {
        $m=Model::get_model();
        $data=['commandes'=>$m->get_commande_date_result()];
        $this->render("commande_date_result",$data);

    }

    
}