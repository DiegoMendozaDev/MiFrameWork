<?php

class Home extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {
        $data['username'] = empty($_SESSION['user']) ? 'User' : $_SESSION['user']->email;
        $this->view('home', $data);
    }
    public function edit($a = '', $b = '', $c = '')
    {
        $this->view('home');
    }
}
