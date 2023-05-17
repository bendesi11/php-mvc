<?php
class user_Controller extends Controller{
    public function index($users = 'users'){
        $users = $this->model($users);
        $this->view('home/userView', $users->getAllUser());
    }
}