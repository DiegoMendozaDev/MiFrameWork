<?php

class Logout extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {
        if(!empty($_SESSION['user'])){
            unset($_SESSION['user']);
        }
        redirect('home');
    }

}