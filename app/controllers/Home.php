<?php
class Home extends Controller
{
    public function index($a = '')
    {
        echo 'This is the home controller';
        $this->view('home');
    }
}
