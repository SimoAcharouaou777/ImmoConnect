<?php

namespace app\connection;

use PDO;
use Dotenv\Dotenv;
require_once __DIR__.'/../../vendor/autoload.php';


$dotenv =Dotenv::createImmutable(__DIR__.'/../../');
$dotenv->load();

class Connection
{

    private static $instance;
    public static $count = 0;

    private function __construct(){
            $servername = $_ENV['DB_HOST'];
            $username = $_ENV['DB_USER'];
            $password = $_ENV['DB_PASSWORD'];
            $dbname = $_ENV['DB_NAME'];
            $connection = mysqli_connect($servername, $username, $password, $dbname);
    
            // Check connection
            if (!$connection) {
                die("Connection failed: " . mysqli_connect_error());
            }else{
                echo"donnnnnnnnnnne";
                return $connection;
            }
        }
        public static function getInstence(){
            if(!isset(self::$instance)){
                self::$instance = new Connection();
            }
            return self::$instance;
        }

}



