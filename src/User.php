<?php

class Database
{
    public function getEmailAndLastName()
    {
        echo 'real db touched';
    }
}

class User
{
    protected $name;

    private $last_name;
    private $db;

    public function __construct(string $name, string $last_name)
    {
        $this->name = ucfirst($name);
        $this->last_name = ucfirst($last_name);
        $this->db = new Database();
    }

    public function getFullName():string
    {
        $this->db->getEmailAndLastName();
        return $this->name.' '.$this->last_name;
    }

    private function hashPassWord():string
    {
        return 'hashed password';
    }
}
