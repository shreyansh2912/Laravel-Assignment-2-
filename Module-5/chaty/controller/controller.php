<?php

require_once('Model/Model.php');
class controller extends model
{
    public $url = "http://localhost/Tops_daily/project/chaty/assets/";

  public function __construct()
  {
     parent::__construct();
     if(isset($_SERVER['PATH_INFO']))
     {
        // echo "<pre>"; 
        // print_r($_SERVER);
        // echo "</pre>"; 
        
        switch ($_SERVER['PATH_INFO']) 
        {
            case '/home':
                require_once ("view/header.php");
                require_once ("view/home.php");
                require_once ("view/footer.php");
                break;
            
            case '/register':
               if(isset($_REQUEST['submit_btn']))
               {
                  $data = json_decode(file_get_contents('php://input'));
                  $data = array(
                     "name" => $_POST['name'],
                     "email" => $_POST['email'],
                     "username"=> $_POST['username'],
                     "password"=>$_POST['password']
                  );
                  $this->register($data,"users");
               }
               require_once('view/register.php');
               break;

            case '/login':
               if($_SERVER['REQUEST_METHOD'] =='POST'){
                $data = json_decode(file_get_contents('php://input'));
                $data = array(
                  "email" => $_POST['email'],
                  "password" => $_POST['password']
                );
                  // print_r($data);
                  $this->login($data,"users");
               }
               require_once('view/login.php');   
                break;


            default:
                # code...
                break;
        }

     }
     else
     {
        header("location:home");
        
     }


  }






}





$obj = new controller;

?>