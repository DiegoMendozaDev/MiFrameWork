<?php
class App
{
    private $controller = 'Home';
    private $method = 'index';
    // divide la url mediante '/'
    private function splitUrl()
    {
        $url = $_GET['url'] ?? 'home';
        $url = explode('/', $url);
        return $url;
    }
    // Carga el controlador que es pasado por la url
    public function loadController()
    {
        $url = $this->splitUrl();
        $filename = '../app/controllers/' . ucfirst($url[0]) . '.php';
        if (file_exists($filename)) {
            require $filename;
            $this->controller = ucfirst($url[0]);
        } else {
            $filename = '../app/controllers/' . ucfirst($url[0]) . '/' . ucfirst($url[1]) . '.php';
            if (file_exists($filename)) {
                require $filename;
                $this->controller = ucfirst($url[1]);
            } else {
                print_r($url);
                $filename = '../app/controllers/_404.php';
                require $filename;
                $this->controller = '_404';
            }

        }
        $controller = new $this->controller;
        call_user_func_array([$controller, $this->method], []);
    }
}
