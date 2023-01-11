<?php 

class Model_mk extends CI_Model {
    function get_mk(){
        $query = $this->db->get('mk');
        return $query->result();
    }

    function simpan($kdmk, $nmmk, $sks){
        $data = array(
            'kodemk' => $kdmk,
            'namamk' => $nmmk,
            'sks' => $sks
        );
        $this->db->insert('mk', $data);
    }

    function get_mk_id($kdmk){
        $this->db->where('kodemk', $kdmk);
        $query = $this->db->get('mk');
        return $query;
    }

    function update($kdlama, $kdmk, $nmmk, $sks){
        $data = array(
            'kodemk' => $kdmk,
            'namamk' => $nmmk,
            'sks' => $sks
        );
        $this->db->where('kodemk', $kdlama);
        $this->db->update('mk', $data);
    }

    function delete($kdmk){
        $this->db->where('kodemk', $kdmk);
        $this->db->delete('mk');
    }

    function cari($key){
        $this->db->like('kodemk', $key);
        $this->db->or_like('namamk', $key);
        $query = $this->db->get('mk');
        return $query->result();
    }
}

?>