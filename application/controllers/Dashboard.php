<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_app');

        if (!$this->session->userdata('akun')) {
            redirect(base_url('admin/login'));
        }
    }

    public function index()
    {
        $data['lokasi'] = $this->session->userdata('lokasi');
        $data['akun'] = $this->session->userdata('akun');
        $data['nama_akun'] = $this->session->userdata('nama');
        $data['title'] = 'Dashboard';
        $data['head'] = 'layout/head';
        $data['menu'] = 'layout/menu';
        $data['body'] = 'content/dashboard';
        $data['foot'] = 'layout/foot';

        $data['jml_transaksi_today'] = $this->M_app->jml_transaksi_today();
        $data['jml_penjualan_today'] = $this->M_app->jml_penjualan_today();
        $data['jml_piutang'] = $this->M_app->jml_piutang();
        $data['data'] = $this->M_app->transaksi_today();

        $cabang = $this->session->userdata('cabang');
        $data['nama_cabang'] = $cabang['nama'];

        $this->load->view('template', $data);
    }
}
