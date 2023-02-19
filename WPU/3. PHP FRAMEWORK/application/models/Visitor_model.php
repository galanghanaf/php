<?php

class Visitor_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllVisitor()
    {

        $this->db->query('SELECT * FROM tbl_visitor');
        return $this->db->resultSet();
    }

    public function getUsersById($id)
    {
        $this->db->query('SELECT * FROM tbl_visitor WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}