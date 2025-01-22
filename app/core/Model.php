<?php

class Model extends Database
{
    function __construct()
    {
        parent::__construct();
    }
    function test()
    {
        $query = 'SELECT * FROM users';
        $result = $this->query($query);
        show($result);
    }
}
