<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

    public function index()
    {
        $this->load->view('header');
        $this->load->view('v_beranda');
        $this->load->view('footer');

    }

}

?>