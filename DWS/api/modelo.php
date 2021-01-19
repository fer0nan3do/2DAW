<?php
class DB
{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct()
    {
        $this->host = 'localhost';
        $this->db = 'peliculas';
        $this->user = 'root';
        $this->password = '123';
        $this->charset = 'utf8mb4';
    }
    function connect(){
        
    }
}
