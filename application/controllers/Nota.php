<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Nota extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_app');

    }

    public function index($faktur = null)
    {
        if ($faktur == null) {
            echo json_encode(["message" => "ups nggak ada datanya ni"]);
        } else {
            $cabang = $this->session->userdata('cabang');
            $transaction = $this->M_app->findData('transaksi_jual', 'faktur', $faktur)->row();
            $data = $this->M_app->findData('transaksi_jual_produk', 'faktur', $faktur)->result();
            $response = [
                'cabang' => $cabang,
                'data' => $data,
                'faktur' => $faktur,
                'tgl' => $transaction->tgl,
                'jam' => $transaction->jam,
                'customer_name' => $transaction->customer_name,
                'hp' => $transaction->hp,
                'tgl_tempo' => $transaction->tgl_tempo,
            ];
            $this->load->view('nota', $response, false);
            // echo $response;
        }
    }

}

/* End of file  Nota.php */
