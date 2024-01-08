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
        $data=['livre'=>$m->get_livre_titre_result()];
        $this->render("livre_titre_result",$data);
    }

    
}