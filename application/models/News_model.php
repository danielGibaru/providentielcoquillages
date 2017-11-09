<?php
class News_model extends CI_model {
    public function get_news()
    {
        $this->load->database();
        $query=$this->db->query('SELECT * FROM news');
        return $query->result();
    }
    public function getByNumNews($numD){
        $this->load->database();
        $query = $this->db->get_where('news',array('id'=>$numD));
        return $query->row_array();
}

    public function set_news_news($numD=0){
        $test=$this->input->post('id');
        $this->load->helper('url');
        $data = array(
          'nom' => $this->input->post('nom'),
          'texte' => $this->input->post('texte'),
        );
        if($test) {
          $this->db->where('id',$test);
          return $this->db->update('news', $data);
        }else{
          return $this->db->insert('news',$data);
      }
  }
    public function deletenews($numD) {
      return $this->db->where('id',$numD)->delete('news');
  }

    }
    ?>
