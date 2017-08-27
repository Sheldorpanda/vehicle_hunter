<?php
require_once('/home/kz6ef/.mysqlpass.inc.php');
class Model {
    private static $host = 'localhost';
    private static $user = 'dbuser';
    private static $database = 'class_examples';
    
    private $connection;
    //private $password;
    
    public function __construct() {
        try{
           $this->connection = new PDO("mysql:host=" . self::$host,
                                    self::$user,
                                    MySQLPassword::$password);
        } catch(PODException $s){
            throw new Exception('Could not connect!');
        }
        
        if(!$this->connection->query("USE " . self::$database)){
            throw new Exception("Could not select DB!");
        }
    }
    
    //verify the user and pw against the db
    public function verify_login($user, $password) {
        $prepared = $this->connection->prepare(
            "SELECT password FROM students WHERE email = :user"
        );
        
        if(!$prepared->execute([":user"=>$user])){
            //query failed
            throw new Exception("Query failed!");
        }
           
        //query is good
        if($prepared->rowCount() == 0){
            throw new Exception("User not found!");
        }
        //now we have a user
        $row = $prepared->fetch();
        $stored_pass = $row["password"];
        
        if(sha1($password) != $stored_pass) {
            throw new Exception("passwords don't match!");
        }
        
        return true;
    }
    
    public function verify_search($make, $model, $year){
        $prepared1 = $this->connection->prepare(
            // 通过make,model和year来找cars
            "SELECT * FROM cars WHERE make = :make and model = :model and year = :year;"
            
        );
        if(!$prepared1->execute([":make"=>$make]) || !$prepared1->execute([":model"=>$model])){
            //query failed
            throw new Exception("Query failed!");
        }

        if ($prepared1->num_rows > 0) {
            // output data of each row
            while($row = $prepared1->fetch_assoc()) {
                echo "VIN: " . $row["VIN"]. " - Mileage: " . $row["mileage"]. " -Color" . $row["color"]. "<br>";
            }
        } else {
            echo "0 results";
        }
        
    }
    public function verify_sell($VIN, $model, $make, $year){
        $prepared2 = $this->connection->prepare(
            // 通过make,model和year来找cars
            "ADD ..... ;"
            
        );
    }
    
}


?>