<?php 

class Model_mhs extends CI_Model {
    function get_mhs() {
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->join('prodi', 'prodi.kodeprodi=mahasiswa.kodeprodi');
        $query = $this->db->get()->result();
        return $query;
    }

    function get_prodi() {
        $result = $this->db->get('prodi')->result();
        return $result;
    }

    function simpan($nim, $nama, $kdprodi, $tgl, $jk, $alamat) {
        $data = array(
            'nim' => $nim,
            'nama' => $nama,
            'kodeprodi' => $kdprodi,
            'tgl_lahir' => $tgl,
            'jenis_kelamin' => $jk,
            'alamat' => $alamat
        );
        $this->db->insert('mahasiswa', $data);
    }

    function get_mhs_id($nim) {
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->join('prodi', 'prodi.kodeprodi=mahasiswa.kodeprodi');
        $this->db->where('nim', $nim);
        $query = $this->db->get();
        return $query;
    }

    function update($nim, $nama, $kdprodi, $tgl, $jk, $alamat, $nimlama){
        $data = array(
            'nim' => $nim,
            'nama' => $nama,
            'kodeprodi' => $kdprodi,
            'tgl_lahir' => $tgl,
            'jenis_kelamin' => $jk,
            'alamat' => $alamat
        );
        $this->db->where('nim', $nimlama);
        $this->db->update('mahasiswa', $data);
    }

    function delete($nim){
        $this->db->where('nim', $nim);
        $this->db->delete('mahasiswa');
    }

    function cari($key) {
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->join('prodi', 'prodi.kodeprodi=mahasiswa.kodeprodi');
        $this->db->like('nim', $key);
        $this->db->or_like('nama', $key);
        $this->db->or_like('namaprodi', $key);
        $query = $this->db->get()->result();
        return $query;
    }
}

?>