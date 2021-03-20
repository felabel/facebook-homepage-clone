<?php
class Robot{
    
    private $db_host = "localhost";
    private $db_user = "root";
    private $db_password = "";
    private $db_name = "fb_db";
    public static $connection;
    public function __construct(){
        $con = mysqli_connect($this->db_host, $this->db_user, $this->db_password, $this->db_name);
        if($con){
                 echo "db connected";
                 self::$connection = $con;
             }else{
                 echo "error";
             }
    }
}

$obj = new Robot;

?>