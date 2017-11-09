<?php
class Produit_model extends CI_model {
    public function get_produit()
    {
        $this->load->database();
        $query=$this->db->query('SELECT * FROM produits');
        return $query->result();
    }
    public function getByNum($numD){
        $this->load->database();
        $query = $this->db->get_where('produits',array('id'=>$numD));
        return $query->row_array();
}

    public function set_news($numD=0){
        $test=$this->input->post('id');
        $this->load->helper('url');
        $data = array(
          'nom' => $this->input->post('nom'),
          'description' => $this->input->post('description'),
          'idgenre' => $this->input->post('idgenre'),
          'idfiltres' => $this->input->post('idfiltres'),
        );
        if($test) {
        $this->db->where('id',$test);
        return $this->db->update('produits', $data);
        }else{
              return $this->db->insert('produits',$data);
      }
  }
    public function delete($numD) {
      return $this->db->where('id',$numD)->delete('produits');
  }

    }
    ?>
