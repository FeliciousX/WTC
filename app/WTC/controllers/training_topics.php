<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Training_topics extends MY_Controller {

	public function index()
	{
		$this->data['title'] = '- WTC | Training Topics -';

		$this->load->helper('url');

		$this->load->view('templates/head.php', $this->data);
		$this->load->view('templates/navbar.php', $this->data);
		$this->load->view('training_topics.php', $this->data);
		$this->load->view('templates/foot.php', $this->data);
	}
}

/* End of file about_us.php */
/* Location: ./application/controllers/about_us.php */