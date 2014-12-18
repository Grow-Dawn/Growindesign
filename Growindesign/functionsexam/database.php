<?php
class Database {
    //private static $dsn = 'mysql:host=localhost;dbname=my_guitar_shop1';
    private static $dsn = 'mysql:host=localhost;dbname=futeigei_guitar1';
    private static $username = 'futeigei';
    private static $password = 'Aurora69!!';
    private static $db;
    
    private function __construct() {}
    
    public static function getDB () {echo "15\n";
        if (!isset(self::$db)) {
            try {
                
                self::$db = new PDO(self::$dsn,
                                     self::$username,
                                     self::$password);
                echo "13\n";
            } catch (PDOException $e) {
                
                $error_message = $e->getMessage();
                //include('../errors/database_error.php');
                echo "14\n";
                exit();
            }
        }
        return self::$db;
    }
    
}
echo "12\n";

/*$servername = "localhost";
$username = "daytonde";
$password = "DaytonBaby0515!";

try {
    $conn = new PDO("mysql:host=$servername;dbname=daytonde_guitar1", $username, $password);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }*/
?>