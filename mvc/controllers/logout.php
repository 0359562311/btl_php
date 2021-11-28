<?php

class logout extends Controller
{
    private $User;

    public function __construct()
    {
        $this->User = $this->model("User");
    }

    function index(){
        session_destroy();
        header('Location: /btl3');
    }
}
