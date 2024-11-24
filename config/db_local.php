<?php
    
    include("local.php");
    //include("describe.php");

    class Conexiones
    {
            public $pdo;
            public function __construct() 
            {
                try 
                {
                    //$this->pdo = new PDO ("mysql:host=".DB_HOST_LOCAL.";dbname=".DB_DATABASE_LOCAL."",DB_USER_LOCAL,DB_PASS_LOCAL);
                    $this->pdo = new PDO ("mysql:host=localhost;dbname=db_prestamos4","root","");
                    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    //echo "aki";
    
                } 
                catch (PDOException $e)
                {
                    echo 'connection failed: '.$e->getMessage();
                    
                }
            }
    }   
?>