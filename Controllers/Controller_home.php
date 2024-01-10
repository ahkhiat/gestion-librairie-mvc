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
    public function action_login()
    {
        
        $m=Model::get_model();
        $data=['login'=>$m->get_login()];
        $this->render("login", $data);

    }
    // public function action_login_process()
    // {
    //     $m=Model::get_model();
    //     $data=['login'=>$m->get_login_process()];
    //     $this->render("login", $data);

    // }

}