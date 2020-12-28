<?php
class Pages extends Controller {
    public function __construct() {
        //$this->userModel = $this->model('User');
    }

    public function make_order() {

        $this->view('make_order');
    }
    public function view_order() {

        $this->view('view_order');
    }

    public function show_confirm_orders() {

        $this->view('confirmed_orders');
    }

    public function login() {

        $this->view('login');
    }
    public function registration() {

        $this->view('registration');
    }

    public function my_account() {

        $this->view('myaccount');
    }
}
