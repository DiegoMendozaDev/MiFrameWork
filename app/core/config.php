<?php

if ($_SERVER['SERVER_NAME'] == 'localhost') {
    // Configuración de la base de datos
    define('DBNAME', 'test');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');

    define('ROOT', 'http://localhost/mvc-php/public');
} else {
    // Configuración de la base de datos
    define('DBNAME', 'test');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('ROOT', 'https://lww.yourwebsite.com');
}

define('APP_NAME', 'Mi sitio Web');
define('APP_DESC', 'La mejor web del mundo');
define('DEBUG', true);
