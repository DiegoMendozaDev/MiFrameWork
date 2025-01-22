<?php

class Database
{

    protected $con;

    function __construct()
    {
        $string = 'mysql:hostname=' . DBHOST . ';dbname=' . DBNAME;
        $this->con = new PDO($string, DBUSER, DBPASS);
    }

    public function query($query, $data = [])
    {
        $stm = $this->con->prepare($query);

        $check = $stm->execute($data);
        if ($check) {
            $result = $stm->fetchAll(PDO::FETCH_OBJ);
            if (is_array($result) && count($result)) {
                return $result;
            }
        }
        return false;
    }
}
