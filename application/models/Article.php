<?php

class Article extends CI_Model {

    public $table_name = "article";

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
    }

    public function get_by_theme($theme, $limit)
    {
        $query = $this->db->query("Select a.Theme,a.type,b.id,b.title,b.homeImage From (SELECT id,Theme,type FROM articletype where Theme = ? ) as a JOIN article as b on a.id=b.type WHERE b.status = 'open' ORDER BY b.publishedTime DESC limit ?", array($theme, $limit));

        return $query->result_array();
    }

    public function get_by_type($type, $limit)
    {
        $query = $this->db->query("SELECT id,homeImage,title,context,publishedTime as time FROM article WHERE type= ? and status='open' ORDER BY publishedTime DESC limit ?", array($type, $limit));

        return $query->result_array();
    }
}