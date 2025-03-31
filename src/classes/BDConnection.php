<?php

class BDConnection
{
    public $conn;
    protected $host;
    protected $user;
    protected $db;
    protected $pass;
    public function __construct($host = "localhost", $user = "root", $db = "fisoftware", $pass = "")
    {
        $this->host = $host;
        $this->user = $user;
        $this->db = $db;
        $this->pass = $pass;
    }
    public function conectar()
    {
        try {
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user, $this->pass);

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo "Conexão bem sucedida!" . "<br>";

        } catch (PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
        }
    }
}