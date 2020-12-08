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
        
        $this->db_host =$url["host"];
        $this->db_username =$url["user"];
        $this->db_password ="pass";
        $this->db_name =substr($url["path"],1);

     
        $this->connection = new mysqli($this->db_host,$this->db_username,$this->db_password,$this->db_name);
        return $this->connection;
    }


 }

?>