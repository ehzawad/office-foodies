<?php


require_once(BASE_PATH . "/app/models/User.php");

class home extends Controller {
    function __construct()
    {
        $this->index();
    }

    function index()
    {
        $this->view('office/index',
            [
            'price'=>500
            ]
        );
    }

}