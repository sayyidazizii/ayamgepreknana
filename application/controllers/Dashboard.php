<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('is_login') != true) {
            redirect('Login');
        }
        $this->load->model('M_beranda');
        $this->load->model('M_produk');
        $this->load->model('M_informasi');
    }

    public function index()
    {
        $data['page'] = 'Dashboard';
        $data['beranda'] = $this->M_beranda->count();
        $data['menu'] = $this->M_produk->count();
        $data['informasi'] = $this->M_informasi->count();
        $this->load->view('content/layout/header');
        $this->load->view('content/layout/sidebar');
        $this->load->view('content/layout/navbar');
        $this->load->view('content/dashboard', $data);
        $this->load->view('content/layout/footer');
    }

    //Beranda
    public function beranda()
    {
        $data['page'] = 'Beranda';
        $data['beranda'] = $this->M_beranda->get();
        $this->load->view('content/layout/header');
        $this->load->view('content/layout/sidebar');
        $this->load->view('content/layout/navbar');
        $this->load->view('content/beranda/index', $data);
        $this->load->view('content/layout/footer');
    }

    public function editBeranda($id_beranda)
    {
        $data['page'] = 'Edit Beranda';
        $data['id_beranda'] = $id_beranda;
        $data['beranda'] = $this->M_beranda->getbyid($id_beranda);
        $this->load->view('content/layout/header');
        $this->load->view('content/layout/sidebar');
        $this->load->view('content/layout/navbar');
        $this->load->view('content/beranda/edit', $data);
        $this->load->view('content/layout/footer');
    }

    function processEditBeranda()
    {
        $id_beranda         = $this->input->post('id_beranda');
        $alamat             = $this->input->post('alamat');
        $deskripsi     = $this->input->post('deskripsi');
        $telepon     = $this->input->post('telepon');

        $data = array(
            // 'id_beranda'     => $id_beranda,
            'alamat'    => $alamat,
            'deskripsi'            => $deskripsi,
            'telepon'    => $telepon,
        );

        $this->M_beranda->update($id_beranda, $data);
        $this->session->set_flashdata('alert', 'Data berhasil diedit.');
        $this->session->set_flashdata('alert_type', 'info');
        redirect('Dashboard/beranda');
    }

    function deleteBeranda($idberanda)
    {
        $id_beranda         = $idberanda;

        // $data = array(
        //     'data_state'     => 1,
        // );
        $this->M_beranda->delete($id_beranda);
        $this->session->set_flashdata('alert', 'Data berhasil dihapus.');
        $this->session->set_flashdata('alert_type', 'info');
        redirect('Dashboard/beranda');
    }
    // end beranda


     //Menu
    public function menu()
    {
        $data['page'] = 'Menu';
        $data['menu'] = $this->M_produk->get_data();
        $this->load->view('content/layout/header');
        $this->load->view('content/layout/sidebar');
        $this->load->view('content/layout/navbar');
        $this->load->view('content/menu/index', $data);
        $this->load->view('content/layout/footer');
    }

    public function editMenu($id_menu)
    {
        $data['page'] = 'Edit Beranda';
        $data['id_menu'] = $id_menu;
        $data['menu'] = $this->M_produk->getbyid($id_menu);
        $this->load->view('content/layout/header');
        $this->load->view('content/layout/sidebar');
        $this->load->view('content/layout/navbar');
        $this->load->view('content/menu/edit', $data);
        $this->load->view('content/layout/footer');
    }

    function processEditMenu()
    {
        $id_menu       = $this->input->post('id_menu');
        $menu          = $this->input->post('menu');
        $image         = $this->input->post('image');
        $harga         = $this->input->post('harga');

        $data = array(
            // 'id_beranda'     => $id_beranda,
            'menu'     => $menu,
            'image'    => $image,
            'harga'    => $harga,
        );

        $this->M_produk->update($id_menu, $data);
        $this->session->set_flashdata('alert', 'Data berhasil diedit.');
        $this->session->set_flashdata('alert_type', 'info');
        redirect('Dashboard/menu');
    }

    function deleteMenu($idmenu)
    {
        $id_menu         = $idmenu;

        $this->M_produk->delete($id_menu);
        $this->session->set_flashdata('alert', 'Data berhasil dihapus.');
        $this->session->set_flashdata('alert_type', 'info');
        redirect('Dashboard/menu');
    }
    // end Menu


    //Menu
    public function informasi()
    {
        $data['page'] = 'Informasi';
        $data['informasi'] = $this->M_informasi->get();
        $this->load->view('content/layout/header');
        $this->load->view('content/layout/sidebar');
        $this->load->view('content/layout/navbar');
        $this->load->view('content/informasi/index', $data);
        $this->load->view('content/layout/footer');
    }

    public function editInformasi($id_informasi)
    {
        $data['page'] = 'Edit Informasi';
        $data['id_informasi'] = $id_informasi;
        $data['informasi'] = $this->M_informasi->getbyid($id_informasi);
        $this->load->view('content/layout/header');
        $this->load->view('content/layout/sidebar');
        $this->load->view('content/layout/navbar');
        $this->load->view('content/informasi/edit', $data);
        $this->load->view('content/layout/footer');
    }

    function processEditInformasi()
    {
        $id_informasi         = $this->input->post('id_informasi');
        $whatsapp             = $this->input->post('whatsapp');
        $instagram            = $this->input->post('instagram');
        $facebook             = $this->input->post('facebook');

        $data = array(
            // 'id_beranda'     => $id_beranda,
            'whatsapp'    => $whatsapp,
            'instagram'   => $instagram,
            'facebook'    => $facebook,
        );

        $this->M_informasi->update($id_informasi, $data);
        $this->session->set_flashdata('alert', 'Data berhasil diedit.');
        $this->session->set_flashdata('alert_type', 'info');
        redirect('Dashboard/informasi');
    }

    function deleteInformasi($idinformasi)
    {
        $id_informasi         = $idinformasi;

        $this->M_informasi->delete($id_informasi);
        $this->session->set_flashdata('alert', 'Data berhasil dihapus.');
        $this->session->set_flashdata('alert_type', 'info');
        redirect('Dashboard/informasi');
    }
    // end Menu
}
