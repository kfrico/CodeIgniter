<?php

class Tblmusiccomments extends CI_Model {

    public $table_name = "tblMusicComments";

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
    }

    public function get_music_comments($limit)
    {
        $query = $this->db->query("SELECT c.CommentID,c.Comment,concat(music.Album,'-',singer.name) as name, music.AlbumPic as pic FROM tblMusicComments as c left join tblMusic as music on music.AlbumID=c.AlbumID left join tblcelebrity as singer on singer.CelebrityID=music.singer WHERE c.status = 'open'ORDER BY c.publishDate DESC limit ?", array($limit));

        return $query->result_array();
    }
}