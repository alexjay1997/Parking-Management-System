//<?php
 //   $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
    
 //   $server = $url["host"];
 //   $username = $url["user"];
 //   $password = $url["pass"];
 //   $db = substr($url["path"], 1);
    
 //   $conn = new mysqli($server, $username, $password, $db);
   // ?>

<?php
 class Database{
 
    public $server;
    public $username;
    public $password;
    public $db;
  
    public function db_connection()
    {
       $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
        
       $server =$url["host"];
        $username =$url["user"];
       $password ="pass";
        $db =substr($url["path"],1);

     
        $connection = new mysqli($server,$username,$password,$db);
        return $connection;
    }


 }

?>