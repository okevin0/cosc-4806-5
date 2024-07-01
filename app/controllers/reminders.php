<?php

class Reminders extends Controller {

    // list all reminders
    public function index() {
      $reminder = $this->model('Reminder');
      $list_of_reminders = $reminder->get_all_reminders($_SESSION['user_id']);
        
      $this->view('reminders/index', ['reminders' => $list_of_reminders]);
      die;
    }

    // create reminder index and create new reminder
    public function create(){
      $this->view('reminders/create/index');
      die;
    }

    public function create_reminder() {
      $reminder = $this->model('Reminder');
      $subject = $_REQUEST['subject'];
      $created_at = date("Y-m-d H:i:s");
      // print_r($subject);
      // die;
      $reminder->create_reminder($_SESSION['user_id'], $subject, $created_at);
      header('Location: /reminders');
    }

    // delete a reminder
    public function delete($reminder_id) {
      $reminder = $this->model('Reminder');
      $reminder->delete_reminder($_SESSION['user_id'], $reminder_id);
      header('Location: /reminders');
    }

    // update reminder index and update existing reminder
    public function update($reminder_id) {
      $reminder = $this->model('Reminder');
      $update_reminder = $reminder->get_reminder_by_id($reminder_id);
      // print_r($subject['subject']);
      // die;
      $this->view('reminders/update/index', [ 'reminder' => $update_reminder ]);
      die;
    }

    public function update_reminder() {
      $reminder = $this->model('Reminder');
      $subject = $_REQUEST['subject'];
      $reminder_id = $_REQUEST['reminder_id'];
      $is_completed = $_REQUEST['completed'];
      
      if ($is_completed == 1) {
        $is_completed = 1;
      } else {
        $is_completed = 0;
      }
      
      $reminder->update_reminder($_SESSION['user_id'], $reminder_id, $subject,$is_completed);
      header('Location: /reminders');
    }

    // mark reminder as completed/uncompleted by clicking on the button
    public function is_completed($reminder_id) {
      $reminder = $this->model('Reminder');
      $is_completed = $reminder->get_reminder_by_id($reminder_id);
      if ($is_completed['completed'] == 1) {
        $reminder->completed($_SESSION['user_id'], $reminder_id, 0);
      } else {
        $reminder->completed($_SESSION['user_id'], $reminder_id, 1);
      }
      header('Location: /reminders');
      
    }
}
