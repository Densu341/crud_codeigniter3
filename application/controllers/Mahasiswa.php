<?php 
class Mahasiswa extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('Model_mhs');
        $this->load->model('Model_prodi');
    }

    function index(){
        $data['mahasiswa'] = $this->Model_mhs->get_mhs();
        $this->load->view('header');
        $this->load->view('v_mahasiswa', $data);
        $this->load->view('footer');
    }

    function tambah(){
        $data['prodi'] = $this->Model_prodi->get_prodi();
        $this->load->view('header');
        $this->load->view('v_tambah_mhs', $data);
    }

    function simpan(){
            $nim = $this->input->post('nim');
            $nama = $this->input->post('nama');
            $kdprodi = $this->input->post('kdprodi');
            $tgl = $this->input->post('tgl');
            $jk = $this->input->post('jk');
            $alamat = $this->input->post('alamat');

            $this->Model_mhs->simpan($nim, $nama, $kdprodi, $tgl, $jk, $alamat);
            redirect('mahasiswa');
    }

    function getmhs(){
        $nim = $this->uri->segment(3);
        $result = $this->Model_mhs->get_mhs_id($nim);
        if($result->num_rows() > 0){
            $i = $result->row_array();
            $data = array(
                'nim' => $i['nim'],
                'nama' => $i['nama'],
                'kdprodi' => $i['kodeprodi'],
                'tgl' => $i['tgl_lahir'],
                'jk' => $i['jenis_kelamin'],
                'alamat' => $i['alamat']
            );
            $data['prodi'] = $this->Model_prodi->get_prodi();
            $this->load->view('header');
            $this->load->view('v_edit_mhs', $data);
        }
    }

    function update(){
        $nim = $this->input->post('nim');
        $nimlama = $this->input->post('nimlama');
        $nama = $this->input->post('nama');
        $kdprodi = $this->input->post('kdprodi');
        $tgl = $this->input->post('tgl');
        $jk = $this->input->post('jk');
        $alamat = $this->input->post('alamat');
        $this->Model_mhs->update($nim, $nama, $kdprodi, $tgl, $jk, $alamat, $nimlama);
        redirect('mahasiswa');
    }

    function hapus(){
        $nim = $this->uri->segment(3);
        $this->Model_mhs->delete($nim);
        redirect('mahasiswa');
    }

    function cari(){
        $kunci = $this->input->post('cari');
        $data['hasilcari'] = $this->Model_mhs->cari($kunci);
        $this->load->view('header');
        $this->load->view('v_cari_mhs', $data);
        $this->load->view('footer');
    }

}
?>