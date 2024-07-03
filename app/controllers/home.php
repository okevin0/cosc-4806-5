<?php

class Home extends Controller {

    public function index() {
      $user = $this->model('User');
      
      if ($_SESSION['admin'] == 1) {
        $data = $user->get_all_users();
      }
			
	    $this->view('home/index');
	    die;
    }

}
