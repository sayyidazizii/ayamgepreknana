<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // if ($this->session->userdata('is_login') != true) {
        //     redirect('Login');
        // }
        $this->load->model('M_beranda');
        $this->load->model('M_produk');
        $this->load->model('M_informasi');

    }

    public function index()
    {
        $data['title'] = 'Ayam Geprek Nana';
        $data['beranda'] = $this->M_beranda->get_data();
        $data['menu'] = $this->M_produk->get_data();
        $data['informasi'] = $this->M_informasi->get_data();
        $this->load->view('layout/header');
        $this->load->view('layout/navbar');
        $this->load->view('home',$data);
        $this->load->view('layout/footer',$data);
    }

}
