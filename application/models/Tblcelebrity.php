<?php

class Tblcelebrity extends CI_Model {

    public $table_name = "tblcelebrity";

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
    }

    public function get()
    {
        $query = $this->db->query("SELECT CelebrityID, Name, Pic, birthday FROM tblcelebrity WHERE WEEKOFYEAR( concat(Year(Now()),substr(birthday,5)) ) = WEEKOFYEAR( NOW( ) ) ORDER BY birthday ASC");

        return $query->result_array();
    }

    public function get_pass()
    {
        $query = $this->db->query("SELECT CelebrityID, Name, Pic, passday FROM tblcelebrity WHERE WEEKOFYEAR( concat(Year(Now()),substr(passday,5)) ) = WEEKOFYEAR( NOW( ) ) ORDER BY passday ASC");

        return $query->result_array();
    }
}