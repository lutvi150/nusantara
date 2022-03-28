<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status_order extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->model('M_app');
		$this->load->model('M_pagination');

		if (!$this->session->userdata('akun')) {
			redirect(base_url('admin/login'));
		}
	}

	public function index()
	{
		$cabang = $this->session->userdata('cabang');
        $data['nama_cabang'] = $cabang['nama'];
        $data['lokasi']    = $this->session->userdata('lokasi');      
        $data['akun']      = $this->session->userdata('akun');
        $data['nama_akun'] = $this->session->userdata('nama');
        $data['title']  = 'Status Order';
        $data['head']   = 'layout/head';
        $data['menu']   = 'layout/menu';
        $data['body']   = 'content/status_order';
        $data['foot']   = 'layout/foot';
		
		$perpage = 10;		
		$page = $this->uri->segment(1);
		$data['links'] = $this->M_pagination->halaman($perpage);
        $data['order'] = $this->M_app->status_order($perpage, $page);

		$this->load->view('template', $data);
	}

	public function search()
	{
		$keyword = $this->input->post('keyword');
		$data = $this->M_app->status_order_s($keyword);
		$hasil = $this->load->view('content/status_order_table', array('data' => $data), true);

		$callback = array(
			'hasil' => $hasil,
		);

		echo json_encode($callback);
	}

	public function cari()
	{
		$keyword = "ZP031420";
		$data = $this->M_app->status_order_s($keyword);

		foreach ($data as $d){
			echo $d->faktur.' - '.$d->customer_name.'<br>';
		}
	}

	public function d($id)
	{
		$cabang = $this->session->userdata('cabang');
        $data['nama_cabang'] = $cabang['nama'];
        $data['lokasi']    = $this->session->userdata('lokasi');      
        $data['akun']      = $this->session->userdata('akun');
        $data['nama_akun'] = $this->session->userdata('nama');
        $data['title']  = 'Detail Order';
        $data['head']   = 'layout/head';
        $data['menu']   = 'layout/menu';
        $data['body']   = 'content/status_order_detail';
        $data['foot']   = 'layout/foot';

        $d = $this->M_app->status_order_id($id);
		$data['faktur'] = $d['faktur'];
		$data['tanggal'] = $d['tgl'].' '.$d['jam'];
		$data['customer_name'] = $d['customer_name'];
		$data['hp'] = $d['customer_id'];
		$data['alamat'] = $d['alamat'];
		$data['keterangan'] = $d['keterangan'];
		$data['total_harga'] = $d['total_harga'];
		$data['data'] = $this->M_app->order_detail($id);

		$this->load->view('template', $data);
	}

	public function cetak_spk()
	{
		$data['lokasi']    = $this->session->userdata('lokasi');  
		$data['head']   = 'layout/head';
		$data['foot']   = 'layout/foot';
		$this->load->view('content/cetak_spk', $data);
	}

	public function id()
	{
		$data['nama_akun'] = 'nama akun';
        $data['title']  = 'Detail Order';
        $data['head']   = 'layout/head';
        $data['menu']   = 'layout/menu';
        $data['body']   = 'content/status_order_detail';
        $data['foot']   = 'layout/foot';

		$this->load->view('template', $data);
	}
}