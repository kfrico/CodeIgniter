<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->database();

		$query = $this->db->query("SELECT AlbumID,Album,AlbumPic,CelebrityID,Name FROM tblMusic as m
									JOIN tblcelebrity as c on c.CelebrityID=m.Singer
 									WHERE MusicType= ? ORDER BY PublishDate DESC limit 12", array('華語專輯'));

		foreach ($query->result() as $row)
		{
		    var_dump($row);
		}

		echo 'Total Results: ' . $query->num_rows();
		exit;
		// $this->load->view('welcome_message');
	}
}
