<?php
class Qns extends CI_Controller {

	public function index()
	{
        $this->load->view('templates/header.php');
		$this->load->view('body/qns.php' );
        $this->load->view('templates/footer.php');
	}
}
