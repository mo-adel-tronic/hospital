<?php

class Post
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getPosts()
    {
        $this->db->query("SELECT * FROM cat");

        $result = $this->db->getdata();

        return $result;
    }
}

?>