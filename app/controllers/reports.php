<?php

class Reports extends Controller {

    public function index() {
      // $all_users = $this->model('User');
      header('Location: /home');
      die;
    }
  
    public function allusers() {
      
      if (!isset($_SESSION['admin'])) {
        header('Location: /home');
      }
      
      $all_users = $this->model('User');
      $list_of_users = $all_users->get_all_users();
      $this->view('reports/allusers/index', ['list_of_users' => $list_of_users]);
      die;
    }

}
