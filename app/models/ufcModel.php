<?php

class ufcModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getUFC()
    {
        $sql = 'SELECT Id
                       ,Name
                       ,Ranking,
                       Length,
                       Weight,
                       Age,
                       WinsByKnockout
                FROM PoundForPound ORDER BY Id ASC;';

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}
