<?php

class Home extends Controller
{
    public function index($a = '')
    {
        $user = new User;

        $arr['nombre'] = 'Diego';
        $arr['edad'] = 18;
        $arr['date'] = date("d-m-y");
        $result = $user->where(['id' => 1]);
        show($result);
        $this->view('home');
    }
}
