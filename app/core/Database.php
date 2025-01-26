<?php

class Database
{

    protected $con;

    function __construct()
    {
        try {
            $string = 'mysql:hostname=' . DBHOST . ';dbname=' . DBNAME;
            $this->con = new PDO($string, DBUSER, DBPASS);
            $this->con->setAttribute(PDO::ERRMODE_EXCEPTION, PDO::ATTR_ERRMODE);
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
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
    public function get_row($query, $data = [])
    {
        $stm = $this->con->prepare($query);

        $check = $stm->execute($data);
        if ($check) {
            $result = $stm->fetchAll(PDO::FETCH_OBJ);
            if (is_array($result) && count($result)) {
                return $result[0];
            }
        }
        return false;
    }
}
