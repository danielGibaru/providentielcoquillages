<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');
    }
    public function index() {
        $this->form_validation->set_rules('username', 'username', 'trim|required|valid_username', array(
            'required' => 'Vous devez saisir un %s.',
            'min_length' => 'Le nom doit faire 3 caractères minimum',
        ));
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[5]|alpha_dash|callback_session', array(
            'required' => 'Vous devez saisir un %s.',
            'min_length' => 'Le mot de passe doit faire 5 caractères minimum',
            'alpha_dash' => 'Le mot de passe ne doit contenir que des caractères alpha-numérique, des _ ou des -'
        ));
        $this->load->view('templates/header');
        $this->load->view('body/login');
        $this->load->view('templates/footer');
    }

    function logout(){
        session_destroy();
        redirect('login', 'refresh');
    }
    function session() {
        $password = $this->input->post('password');
        $email = $this->input->post('username');
        $result = $this->User_model->login($email, $password);
        echo $email."/".$password;
        if ($result!=0) {
            echo "toto";
            $_SESSION['user'] = $result;
        }
    }
}
