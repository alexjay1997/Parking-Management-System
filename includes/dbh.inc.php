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
 
    public $db_host;
    public $db_username;
    public $db_password;
    public $db_name;
  
    public function db_connection()
    {
       $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
        
       $db_host =$url["host"];
        $db_username =$url["user"];
       $db_password ="pass";
        $db_name =substr($url["path"],1);

     
        $connection = new mysqli($db_host,$db_username,$db_password,$db_name);
        return $connection;
    }


 }

?>