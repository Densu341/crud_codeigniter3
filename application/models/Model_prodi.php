<?php 

class Model_prodi extends CI_Model {
    function get_prodi(){
        $query = $this->db->get('prodi');
        return $query->result();
    }

    function simpan($kdprodi, $nmprodi){
        $data = array(
            'kodeprodi' => $kdprodi,
            'namaprodi' => $nmprodi
        );
        $this->db->insert('prodi', $data);
    }

    function get_prodi_id($kdprodi){
        $this->db->where('kodeprodi', $kdprodi);
        $query = $this->db->get('prodi');
        return $query;
    }

    function update($kdlama, $kdprodi, $nmprodi){
        $data = array(
            'kodeprodi' => $kdprodi,
            'namaprodi' => $nmprodi
        );
        $this->db->where('kodeprodi', $kdlama);
        $this->db->update('prodi', $data);
    }

    function delete($kdprodi){
        $this->db->where('kodeprodi', $kdprodi);
        $this->db->delete('prodi');
    }

    function cari($key) {
        $this->db->select('*');
        $this->db->from('prodi');
        $this->db->like('namaprodi', $key);
        $query = $this->db->get()->result();
        return $query;
    }
}

?>