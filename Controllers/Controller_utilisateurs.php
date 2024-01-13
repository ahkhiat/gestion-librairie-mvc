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

}

?>