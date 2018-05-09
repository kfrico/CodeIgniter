<?php

class Tblmusic extends CI_Model {

    public $table_name = "tblmusic";

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
    }

    public function get_album_by_musictype($music_type, $limit)
    {
        $query = $this->db->query("SELECT AlbumID,Album,AlbumPic,CelebrityID,Name FROM tblMusic as m JOIN tblcelebrity as c on c.CelebrityID=m.Singer WHERE MusicType= ? ORDER BY PublishDate DESC limit ?", array($music_type, $limit));

        return $query->result_array();
    }
}