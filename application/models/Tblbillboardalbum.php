<?php

class Tblbillboardalbum extends CI_Model {

    public $table_name = "tblbillboard_album";

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
    }

    public function get_by_category_date_from($category, $date_from, $limit)
    {
        $query = $this->db->query("SELECT b.Album, b.Singer, b.Date_from, b.Date_to, m.AlbumID, m.AlbumPic, c.CelebrityID FROM tblbillboard_album as b JOIN tblcelebrity as c ON c.Name =  b.Singer JOIN tblMusic as m ON m.Album = b.Album AND m.Singer = c.CelebrityID WHERE b.Category = ? AND b.Date_from like ? AND b.Week_no = (SELECT MAX(Week_no) FROM tblbillboard_album WHERE Category = ? and Date_from like ?) GROUP BY b.Album ORDER BY Rank ASC limit ?", array($category, $date_from, $category, $date_from, $limit));

        return $query->result_array();
    }
}