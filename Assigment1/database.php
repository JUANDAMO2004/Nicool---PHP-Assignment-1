<!-- http://localhost/SEMESTRE%202/Assigment%201/database.php -->
<?php
  
  class Database{
    
    private $connection;
    function __construct(){
      
      $this->connect_db();
    }
    
    public function connect_db(){
      $this->connection = mysqli_connect('localhost', 'root', '', 'veterinary');
      if(mysqli_connect_error()){
        die("Database Connection Failed" . mysqli_connect_error());
      }
    }
    public function create ($an_race, $an_name, $an_age, $owner_name, $owner_phone){
        $sql = "INSERT INTO patient VALUES (null,'$an_race', '$an_name', '$an_age', '$owner_name', '$owner_phone') ";
        $res = mysqli_query($this->connection, $sql);
        if($res){
                   return true;
            }
        else{
            die("Database Connection Failed" . mysqli_connect_error());
            }
      }
      public function read(){
              $sql = "SELECT * FROM patient";
               $res = mysqli_query($this->connection, $sql);
               return $res;
        }
    
  }
  $database = new Database();
?>
