<?php

class Tblrowad extends CI_Model {

    public $table_name = "tblrowad";

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
    }

    public function get_by_type($type, $limit)
    {
        $query = $this->db->query("SELECT ADLink, Note, AdPicture FROM tblrowad WHERE ADType = ? ORDER BY Rand() limit ?", array($type, $limit));

        return $query->result_array();
    }
}