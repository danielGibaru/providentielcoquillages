
<?php
class Aproduit extends CI_Controller {

  function __construct(){
      parent::__construct();
			$this->load->model('Produit_model');
            $this->load->model('User_model');
            $this->load->model('News_model');
			$this->load->view('templates/header.php');
			$this->load->view('templates/footer.php');
            $this->load->helper('url');
  }
	public function index()
	{
		$produit['Produit']=$this->Produit_model->get_produit();
    $produit['user']=$this->User_model->get_user();
    $produit['news']=$this->News_model->get_news();
		$this->load->view('body/admin.php' , $produit);
	}
	public function addpro($numD = NULL){
         $this->load->helper('form');
         $this->load->library('form_validation');
         $produit['Produit'] = $this->Produit_model->getByNum($numD);
         $this->form_validation->set_rules('nom','nom', 'required');
         $this->form_validation->set_rules('description', 'description' , 'required');
         $this->form_validation->set_rules('idfiltres', 'idfiltres', 'required');
         $this->form_validation->set_rules('idgenre', 'idgenre', 'required');

         if($this->form_validation->run()=== false){
             $this->load->view('create.php',$produit);
         }
         else{
             $this->Produit_model->set_news($numD);
             redirect( base_url() . '/Shop/index');

         }
     }

public function deletepro($numD = NULL)
      {
          $news_item = $this->Produit_model->get_produit($numD);
          $this->Produit_model->delete($numD);
          redirect( base_url() . '/Louer/index');
      }

      public function adduser($numD = NULL){
             $this->load->helper('form');
             $this->load->library('form_validation');
             $user['user'] = $this->User_model->getUserByNum($numD);
             $this->form_validation->set_rules('username','username', 'required');
             $this->form_validation->set_rules('password', 'password' , 'required');
             $this->form_validation->set_rules('mail', 'mail', 'required');
             $this->form_validation->set_rules('iddroits', 'iddroits', 'required');
             if($this->form_validation->run()=== false){
                 $this->load->view('createuser.php',$user);
             }
             else{
                 $this->User_model->set_user_news($numD);
                 redirect( base_url() . '/Aproduit/index');

             }
         }

    public function deleteuser($numD = NULL)
          {
              $news_item = $this->Produit_model->get_produit($numD);
              $this->User_model->deleteuser($numD);
              redirect( base_url() . '/Louer/index');
          }
          public function addnews($numD = NULL){
                 $this->load->helper('form');
                 $this->load->library('form_validation');
                 $news['news'] = $this->News_model->getByNumNews($numD);
                 $this->form_validation->set_rules('nom','nom', 'required');
                 if($this->form_validation->run()=== false){
                     $this->load->view('createnews.php',$news);
                 }
                 else{
                     $this->News_model->set_news_news($numD);
                     redirect( base_url() . '/Aproduit/index');
                 }
             }

        public function deletenews($numD = NULL)
              {
                  $news_item = $this->News_model->get_news($numD);
                  $this->News_model->deletenews($numD);
                  redirect( base_url() . '/Aproduit/index');
              }
}
