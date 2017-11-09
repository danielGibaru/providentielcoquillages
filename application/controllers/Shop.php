<?php

class Shop extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->model('Produit_model');
		$produit['Produit']=$this->Produit_model->get_produit();
        $this->load->view('templates/header.php');
		$this->load->view('body/shop.php' , $produit);
        $this->load->view('templates/footer.php');
	}
}
