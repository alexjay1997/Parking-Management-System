<?php
 class Database{

    private $db_host;
    private $db_username;
    private $db_password;
    private $db_name;

    protected function db_connection()
    {
        $this->db_host ="us-cdbr-east-02.cleard";
        $this->db_username ="b749a6c04fe595";
        $this->db_password ="1e7cf907";
        $this->db_name ="heroku_f4bacc0811464cd";

        $this->connection = new mysqli($this->db_host,$this->db_username,$this->db_password,$this->db_name);
        return $this->connection;
    }


 }

?>