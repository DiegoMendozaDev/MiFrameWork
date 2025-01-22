<?php
class Home extends Controller
{
    public function index($a = '')
    {
        $model = new Model;
        $model->test();
        echo 'This is the home controller';
        $this->view('home');
    }
}
