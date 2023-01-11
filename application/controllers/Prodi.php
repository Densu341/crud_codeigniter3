<?php 

class Prodi extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Model_prodi');
    }

    public function index()
    {
        $data['prodi'] = $this->Model_prodi->get_prodi();
        $this->load->view('header', $data);
        $this->load->view('v_prodi');
        $this->load->view('footer');
    }

    function tambah(){
        $this->load->view('header');
        $this->load->view('v_tambah_prodi');
        $this->load->view('footer');
    }

    function simpan(){
        $kdprodi = $this->input->post('kdprodi');
        $nmprodi = $this->input->post('nmprodi');
        $this->Model_prodi->simpan($kdprodi, $nmprodi);
        redirect('prodi');
    }

    function getprodi(){
        $kdprodi = $this->uri->segment(3);
        $data = $this->Model_prodi->get_prodi_id($kdprodi);
        if ($data->num_rows() > 0) {
            $i = $data->row_array();
            $data = array(
                'kdprodi' => $i['kodeprodi'],
                'nmprodi' => $i['namaprodi']
            );
            $this->load->view('header');
            $this->load->view('v_edit_prodi', $data);
            $this->load->view('footer');
        } else {
            echo "Data tidak ada";
        }
    }

    function update(){
        $kdlama = $this->input->post('kdprodilama');
        $kdprodi = $this->input->post('kdprodi');
        $nmprodi = $this->input->post('nmprodi');
        $this->Model_prodi->update($kdlama, $kdprodi, $nmprodi);
        redirect('prodi');
    }

    function hapus(){
        $kdprodi = $this->uri->segment(3);
        $this->Model_prodi->delete($kdprodi);
        redirect('prodi');
    }

    function cari(){
        $kunci = $this->input->post('ktkunci');
        $data['hasilcari'] = $this->Model_prodi->cari($kunci);
        $this->load->view('header');
        $this->load->view('v_cari_prodi', $data);
        $this->load->view('footer');
    }
}

?>