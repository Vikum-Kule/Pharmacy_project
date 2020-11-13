<?php
class Pages extends Controller {
    public function __construct() {
        //$this->userModel = $this->model('User');
    }

    public function index() {
        $data = [
            'title' => 'Home page'
        ];

        $this->view('Drug_Stock_page', $data);
    }
      public function abcd() {
        $data = [
            'title' => 'Home page'
        ];

        $this->view('Notification_Manager', $data);
    }
}
