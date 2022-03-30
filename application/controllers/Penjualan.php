<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penjualan extends CI_Controller
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
        $cabang = $this->session->userdata('cabang');
        $data['nama_cabang'] = $cabang['nama'];
        $data['lokasi'] = $this->session->userdata('lokasi');
        $data['akun'] = $this->session->userdata('akun');
        $data['nama_akun'] = $this->session->userdata('nama');
        $data['title'] = 'Penjualan';
        $data['head'] = 'layout/head';
        $data['menu'] = 'layout/menu';
        $data['body'] = 'content/penjualan';
        $data['foot'] = 'layout/foot';

        $data['data_member'] = $this->M_app->data_customer();
        $data['data_pending'] = $this->M_app->data_pending();
        $data['dd_kategori'] = $this->M_app->dropdown_pilih_bank();
        $data['id_kategori'] = '';

        $this->load->view('template', $data);
        // echo json_encode($data['data_member']);
    }
    // use for get data produk
    public function getDataProduk()
    {
        $startTime = microtime(true);
        $json = array();

        $this->load->library('pagination');
        $config['data_page_attr'] = 'class="page-link" data-ci-pagination-page ';
        $config['base_url'] = base_url('index.php/penjual/getDataProduk');
        $config['total_rows'] = $this->M_app->pagination_total_rows('produk');
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;
        $config["use_page_numbers"] = true;
        $config['num_links'] = 3;
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li class="paginate_button page-item">';
        $config['num_tag_close'] = '</li">';
        $config['cur_tag_open'] = "<li class='disabled paginate_button page-item'><li class='active paginate_button page-item'><a href='#' class='page-link' >";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = '<li class="paginate_button page-item next">';
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = '<li class="paginate_button page-item previous">';
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = '<li class="paginate_button page-item">';
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = '<li class="paginate_button page-item">';
        $config['last_tagl_close'] = "</li>";
        $this->pagination->initialize($config);

        $page = $this->uri->segment(3);
        $start = ($page - 1) * $config["per_page"];
        // count row
        $end = ($this->uri->segment(3) == floor($config['total_rows'] / $config['per_page'])) ? $config['total_rows'] : (int) $this->uri->segment(3) * $config['per_page'] + $config['per_page'];
        $startFirts = $start + 1;
        $result_count = "Showing " . $startFirts . " - " . $end . " of " . $config['total_rows'] . " Results";

        $json = [
            'pagination_links' => $this->pagination->create_links(),
            'pagination_results' => $this->M_app->pagination_data($config["per_page"], $start, 'produk'),
            'start' => $start,
            'result_count' => $result_count,
            'elapsed_time' => microtime(true) - $startTime,
        ];

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($json));
    }
    // use for find spesific product
    public function findSpecificProductByCode(Type $var = null)
    {
        $code = $this->input->post('code');
        $dataProduct = $this->M_app->findData('produk', 'kode', $code)->row();
        echo json_encode($dataProduct);
    }
    public function getDataMember(Type $var = null)
    {
        $phone_number = $this->input->post('phone_number');
        $dataMember = $this->M_app->getDataMember($phone_number);
        $response = [
            'status' => 'success',
            'data' => $dataMember,
        ];
        echo json_encode($response);
    }
    // get data in price option
    public function getPriceOption(Type $var = null)
    {
        $kode_produk = $this->input->post('kode_produk');
        $dataPriceOption = $this->M_app->findData('produk_opsi_harga', 'kode_brg', $kode_produk)->result();
        $response = [
            'status' => 'success',
            'data' => $dataPriceOption,
        ];
        echo json_encode($response);
    }

}
