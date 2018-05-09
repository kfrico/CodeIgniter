<?php

class Tblbillboardsong extends CI_Model {

    public $table_name = "tblbillboard_song";

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
    }

    public function get_by_category_date_from($category, $date_from, $limit)
    {
        $query = $this->db->query("SELECT b.Song, b.Singer, b.Date_from, b.Date_to, c.CelebrityID, c.Name, m.AlbumID, m.AlbumPic FROM tblbillboard_song as b JOIN tblcelebrity as c ON c.Name = b.Singer JOIN tblMusic as m ON m.Album = b.Album AND m.Singer = c.CelebrityID WHERE b.Category = ? AND Date_from like ? AND Week_no = (SELECT MAX(Week_no) FROM tblbillboard_song WHERE Category = ? and Date_from like ?) GROUP BY b.Song ORDER BY Rank ASC LIMIT ?", array($category, $date_from, $category, $date_from, $limit));

        return $query->result_array();
    }
}