<?php
class User_model extends CI_model {
    public function get_user()
    {
        $this->load->database();
        $query=$this->db->query('SELECT * FROM user');
        return $query->result();
    }
    public function getUserByNum($numD){
        $this->load->database();
        $query = $this->db->get_where('user',array('id'=>$numD));
        return $query->row_array();
}
function login($email, $password) {
   $query = $this->db->get_where('user', array('username' => $email, 'password' => md5($password)));
   if ($query->row_array()!= null) {
       return $query->row_array();
   }
   return 0;
}

    public function set_user_news($numD=0){
        $test=$this->input->post('id');
        $this->load->helper('url');
        $data = array(
          'username' => $this->input->post('username'),
          'password' => $this->input->post('password'),
          'mail' => $this->input->post('mail'),
          'iddroits' => $this->input->post('iddroits'),
        );
        if($test) {
        $this->db->where('id',$test);
        return $this->db->update('user', $data);
        }else{
              return $this->db->insert('user',$data);
      }
  }
    public function deleteuser($numD) {
      return $this->db->where('id',$numD)->delete('user');
  }

    }
    ?>
