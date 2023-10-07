<?php

class Users extends Controller {
    protected $user;
    public function __construct()
    {
        $this->user = $this->model('User');
    }
    public function show () {
        //$users = $this->user->getUsers();
        $data = [
            'title' => 'reg',
            // 'users' => $users
        ];
        $this->view('mo',$data);
    }
}