<?php
/*
*
* PDO Database Class
* Connect to Database
* Create Preapred Statement
* Return rows and results 
*/
class Database {
    // CONSTANSTS importedin bootstrap from config
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    //to prepare the statement
    private $dbHandler;
    private $statement;
    private $error;

    public function __construct(){
        // set DSN
        $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbname;
        //persisting connection, this increases performance, by checking to see if a connection is already established with th DB
        
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION  //elegant way to handle errors
        );
    
        //Create PDO instance
        try{
            $this->dbHandler = new PDO($dsn, $this->user, $this->pass , $options);
        }catch(PDOException $expt){
            $this->error = $expt->getMessage();// gives the error message
            echo $this->error;
         
        }
    }

}