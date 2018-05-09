<?php

class Tblweeklysongsrank extends CI_Model {

    public $table_name = "tblWeeklySongsRank";

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
    }

    public function get($limit)
    {
        $query = $this->db->query("SELECT * FROM tblWeeklySongsRank ORDER BY PublishDate Desc limit ?", array($limit));

        return $query->result_array();
    }
}