<?php

class Model
{
    public $connection;
     public function __construct(){
        try {
           $this->connection = new mysqli("localhost","root","","connectme");
         //   echo "pass";
            
        } catch (\Throwable $th) {
            // echo"Failed";
        }
   }

     public function register($REQUEST,$tbl){
        $keydata = array_keys($REQUEST);
        $valuesdata = array_values($REQUEST);

        $keydata = implode(",",$keydata);
        $valuesdata = implode("','",$valuesdata);

        // print_r($keydata) ;
        $sql = "INSERT INTO $tbl ($keydata) VALUES ('$valuesdata'); ";
      //   echo $sql;
        //    echo $this->connection;
        //    print_r($this->connection);
        $result = $this->connection->query($sql);
        header("location:login");
     }

     public function login($REQUEST,$tbl){
       $sql = "SELECT * FROM $tbl WHERE email = '$REQUEST[email]' AND password = '$REQUEST[password]'";
      //  echo $sql;
      $sqlx = $this->connection->query($sql);
      print_r($sqlx);
      if($sqlx->num_rows >0){
         header("location:home");
      }
      else{
        echo "<script> alert('Invalid Email or Password')</script>";
      }
     }

     public function insert($REQUEST,$tbl){
        // print_r($REQUEST);
        // echo $tbl;
        $keysdata = array_keys($REQUEST);
        $valuesdata = array_values($REQUEST);
             
        $keysdata = implode(",",$keysdata);
        $valuesdata = implode("','",$valuesdata);

        $sql = "INSERT INTO $tbl ($keysdata) VALUES ('$valuesdata') ";
        // echo $sql;
        $this->connection->query($sql);
        header('location:admin_gallary');
     }

     public function fetch($tbl){
      $sql = "SELECT * FROM $tbl ";
      // echo $sql;
      $sqlx = $this->connection->query($sql);

        while( $data = $sqlx->fetch_object())
        {
             $datas[] = $data;
        }
        // print_r($datas);
        return $datas;
     }
}

// new model;


?>