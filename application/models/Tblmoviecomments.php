<?php

class Tblmoviecomments extends CI_Model {

    public $table_name = "tblMovieComments";

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
    }

    public function get_movie_comments($limit)
    {
        $query = $this->db->query("SELECT c.CommentID AS id, Movie AS name, c.Comment AS Comment, movie.MoviePic AS pic FROM `tblMovieComments` AS c LEFT JOIN tblMovie AS movie ON movie.MovieID = c.MovieID WHERE c.status = 'open'ORDER BY c.publishDate DESC limit ?", array($limit));

        return $query->result_array();
    }
}