<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Register extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('form', 'url');

        $this->load->library('form_validation');
        $this->load->model('User_model');
    }
    public function index() {
      $this->load->view('templates/header');
      $this->load->view('body/register');
      $this->load->view('templates/footer');
    }
    public function add_account() {
        $data = array(
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
            'mail' => $this->input->post('mail'),
            'iddroits' => 0
        );
        $this->User_model->set_user_news($data);
        redirect('Register', 'refresh');
    }

    public function modif_account() {

        $data = array(
          'username' => $this->input->post('username'),
          'password' => md5($this->input->post('password')),
          'mail' => $this->input->post('mail'),
        );

        if($this->input->post('password')!= NULL){
            $data['password'] = $_SESSION['user']['password_US'];
        }
        $this->User_model->set_user_news($data);
        redirect('', 'refresh');
    }

    public function account() {
        $this->load->view('templates/header');
        $this->load->view('body/account');
        $this->load->view('templates/footer');
    }
    public function validation_form() {

        $this->form_validation->set_rules('username', 'username', 'trim|required|valid_username|is_unique[username.username]', array(
            'required' => 'Vous devez saisir un username.',
            'is_unique' => 'Cette username est déjà utilisée'
        ));
        $this->form_validation->set_rules('password', 'Password', 'trim|required|alpha_dash', array(
            'required' => 'Vous devez saisir un mot de passe.',
            'min_length' => 'Le mot de passe doit faire 5 caractères minimum',
            'alpha_dash' => 'Le mot de passe ne doit contenir que des caractères alpha-numérique, des _ ou des -'
        ));
        if ($this->form_validation->run() == false) {
            $this->load->view('index.php');
        } else {
            redirect(base_url('index.php'), 'refresh');
        }
    }
}
