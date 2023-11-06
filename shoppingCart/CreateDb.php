<?php 



class createDb{

    public $servername;
    public $username;
    public $password;
    public $dbname;
    public $tablename;
    public $con;

    // class constactor
   public function __construct($dbname = "Newdb",
    $tablename = "Productdb",
    $servername = "localhost",
    $username = "root",
    $password ="")
    {
        $this->dbname = $dbname;
        $this->tablename = $tablename;
        $this->servername=$servername;
        $this->username=$username;
        $this->password=$password;

        //create connection
        $this->con = mysqli_connect($servername,$username,$password);
        //check con
        if(!$this->con){
            die("connection failed");
        }

        //write a qurery to create a DB
        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";


        //to execute the query
        if(mysqli_query($this->con,$sql)){

            $this->con = mysqli_connect($servername,$username,$password,$dbname);

        // how to create new table in sql

        $sql = "CREATE TABLE IF NOT EXISTS $tablename(
                id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                product_name VARCHAR(25) NOT NULL,
                product_price FLOAT,
                product_img VARCHAR(100)
            );";


        if(!mysqli_query($this->con,$sql)){
            echo "error creating table";
        }


        }else{
            return false;
        }
   }

   // how to get product from database
   public function getData(){

    $sql = "SELECT * FROM $this->tablename";
    $result = mysqli_query($this->con ,$sql);

    if(mysqli_num_rows($result)>0){
        return $result;

    }
   }
}
?>
