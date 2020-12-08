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
 
    private $db_host;
    private $db_username;
    private $db_password;
    private $db_name;
  
    protected function db_connection()
    {
        $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
        
        $this->db_host =$url["us-cdbr-east-02.cleard"];
        $this->db_username =$url["b749a6c04fe595"];
        $this->db_password ="1e7cf907";
        $this->db_name =substr($url["heroku_f4bacc0811464cd"],1);

     
        $this->connection = new mysqli($this->db_host,$this->db_username,$this->db_password,$this->db_name);
        return $this->connection;
    }


 }

?>