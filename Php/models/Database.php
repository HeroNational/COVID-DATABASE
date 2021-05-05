<?php 
    Class Database{

        private static $status=false;

        public function __construct($servername = "localhost",$username = "username",$password = "password",$database="",$driver="pdo"){

            if($driver=="pdo"){
                Database::mysqli($servername,$username,$password,$database,false);
            }else{
                Database::PDO($servername,$username,$password,$database);
            }

        }

        public static function mysqli($servername = "localhost",$username = "root",$password = "",$struct=false){

          if($struct==false){
                // Create connection
            $conn = new mysqli($servername = "localhost",$username = "root",$password = "",$database="");

            // Check connection
            if ($conn->connect_error) {
                Database::$status="false";
                return $conn->connect_error;
            }

          }else{
            // Create connection
            $conn = Database::mysqli($servername = "localhost",$username = "root",$password = "",$database="");

            // Check connection
            if (!$conn) {
                Database::$status="false";
                return mysqli_connect_error();
            }
          }
    
          return $conn;   

        }

        public static function PDO($servername = "localhost",$database="",$username = "root",$password = ""){
            try {
                $conn = new PDO("mysql:host=".$servername.";dbname=".$database, $username, $password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                Database::$status=true;
                return $conn;
            } catch(PDOException $e) {
                //return $e->getMessage();
                return $e;
            }
        }

        public static function isConnected(){
            return (Database::$status==true)?true:false;
        }
        

    }


    //print_r(Database::mysqli("localhost","sys","root"));
    //print_r(Database::PDO("localhost","sys","root"));
?>