<?php 

class Mk extends CI_Controller {
    
        function __construct(){
            parent::__construct();
            $this->load->model('model_mk');
        }
    
        function index(){
            $data['mk'] = $this->model_mk->get_mk();
            $this->load->view('header');
            $this->load->view('v_mk', $data);
            $this->load->view('footer');
        }

        function tambah(){
            $this->load->view('header');
            $this->load->view('v_tambah_mk');
        }
    
        function simpan(){
            $kdmk = $this->input->post('kdmk');
            $nmmk = $this->input->post('nmmk');
            $sks = $this->input->post('sks');
            $this->model_mk->simpan($kdmk, $nmmk, $sks);
            redirect('mk');
        }
    
        function getmk(){
            $kdmk = $this->uri->segment(3);
            $data = $this->model_mk->get_mk_id($kdmk);
            if ($data->num_rows() > 0) {
                $i = $data->row_array();
                $data = array(
                    'kdmk' => $i['kodemk'],
                    'nmmk' => $i['namamk'],
                    'sks' => $i['sks']
                );
                $this->load->view('header');
                $this->load->view('v_edit_mk', $data);
            } else {
                echo "Data tidak ada";
            } 
        }

        function update(){
            $kdlama = $this->input->post('kdmklama');
            $kdmk = $this->input->post('kdmk');
            $nmmk = $this->input->post('nmmk');
            $sks = $this->input->post('sks');
            $this->model_mk->update($kdlama, $kdmk, $nmmk, $sks);
            redirect('mk');
        }

        function hapus(){
            $kdmk = $this->uri->segment(3);
            $this->model_mk->delete($kdmk);
            redirect('mk');
        }

        function cari(){
            $kunci = $this->input->post('cari');
            $data['hasilcari'] = $this->model_mk->cari($kunci);
            $this->load->view('header');
            $this->load->view('v_cari_mk', $data);
            $this->load->view('footer');
        }
}

?>