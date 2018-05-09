<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facade extends CI_Controller {
    public function index()
    {
        $this->load->helper('pm');
        
        $data = array();

        $this->load->model('tblmusic');
        $data['c_ret'] = $this->tblmusic->get_album_by_musictype("華語專輯", 12);
        $data['u_ret'] = $this->tblmusic->get_album_by_musictype("西洋專輯", 12);
        $data['j_ret'] = $this->tblmusic->get_album_by_musictype("日韓專輯", 12);

        $this->load->model('tblmusiccomments');
        $data['music_comments'] = $this->tblmusiccomments->get_music_comments(6);

        
        $this->load->model('tblmoviecomments');
        $data['movie_comments'] = $this->tblmoviecomments->get_movie_comments(6);

        $this->load->model('article');
        $data['music_cross_comments'] = $this->article->get_by_theme("音樂x跨界", 6);
        $data['music_theme_comments'] = $this->article->get_by_theme("音樂專題報導", 6);

        $this->load->model('Tblweeklysongsrank');
        $data['weekly_songs_rank'] = $this->tblweeklysongsrank->get(3);

        var_export($data);exit;
        // exit;
        $this->load->view('facade', $data);
    }
}
