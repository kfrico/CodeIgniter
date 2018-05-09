<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facade extends CI_Controller {
    public function index()
    {
        $this->load->helper('pm');
        
        $data = array();

        $this->load->model('tblmusic');
        $data['c_ret'] = $this->tblmusic->get_album_by_musictype('華語專輯', 12);
        $data['u_ret'] = $this->tblmusic->get_album_by_musictype('西洋專輯', 12);
        $data['j_ret'] = $this->tblmusic->get_album_by_musictype('日韓專輯', 12);

        $this->load->model('tblmusiccomments');
        $data['music_comments'] = $this->tblmusiccomments->get_music_comments(6);

        
        $this->load->model('tblmoviecomments');
        $data['movie_comments'] = $this->tblmoviecomments->get_movie_comments(6);

        $this->load->model('article');
        $data['music_cross_comments'] = $this->article->get_by_theme('音樂x跨界', 6);
        $data['music_theme_comments'] = $this->article->get_by_theme('音樂專題報導', 6);

        $this->load->model('tblweeklysongsrank');
        $data['weekly_songs_rank'] = $this->tblweeklysongsrank->get(3);

        $data['c_new_comments'] = $this->article->get_by_type(5, 6);
        $data['u_new_comments'] = $this->article->get_by_type(17, 6);
        $data['j_new_comments'] = $this->article->get_by_type(18, 6);

        $data['music_talk_comments'] = $this->article->get_by_type(3, 6);
        $data['music_story_comments'] = $this->article->get_by_type(4, 6);
        $data['singer_mail_comments'] = $this->article->get_by_type(16, 6);

        $this->load->model('tblbillboardalbum');
        $data['c_board_album'] = $this->tblbillboardalbum->get_by_category_date_from('華語專輯', '%'.date('Y').'%', 6);

        $this->load->model('tblbillboardsong');
        $data['c_board_song'] = $this->tblbillboardsong->get_by_category_date_from('華語歌曲', '%'.date('Y').'%', 6);

        $this->load->model('tblcelebrity');
        $data['singer_bday'] = $this->tblcelebrity->get();
        $data['singer_pass'] = $this->tblcelebrity->get_pass();

        $this->load->model('tblrowad');
        $data['partners'] = $this->tblrowad->get_by_type('合作單位', 10);

        var_export($data);exit;
        // exit;
        $this->load->view('facade', $data);
    }
}
