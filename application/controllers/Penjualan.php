<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Penjualan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_app');
        $this->load->library('form_validation');

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
        // use for delete data user by kasir
        $this->M_app->deleteData('cart', 'kasir', $this->session->userdata('nama'));
        $this->load->view('template', $data);
        // echo json_encode($this->session->userdata());
    }
    // use for get data produk
    public function getDataProduk()
    {
        // use for filter data
        $jenis = $this->input->post('jenis');
        $filter = $this->input->post('filter');
        // end option filter
        $startTime = microtime(true);
        $json = array();

        $this->load->library('pagination');
        $config['data_page_attr'] = 'class="page-link" data-ci-pagination-page ';
        $config['base_url'] = base_url('index.php/penjual/getDataProduk');
        $config['total_rows'] = $this->M_app->pagination_total_rows_product('produk', $jenis, $filter);
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;
        $config["use_page_numbers"] = true;
        $config['num_links'] = 1;
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
            'pagination_results' => $this->M_app->pagination_data_product($config["per_page"], $start, 'produk', $jenis, $filter),
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
    // cart add
    public function cartAdd(Type $var = null)
    {
        $this->form_validation->set_rules('kode_produk', 'Kode Produk', 'trim|required', [
            'required' => 'Kode Produk harus diisi',
        ]);
        $this->form_validation->set_rules('qty', 'Qty', 'trim|required', [
            'required' => 'Qty harus diisi',
        ]);
        $this->form_validation->set_rules('harga', 'Harga', 'trim|required', [
            'required' => 'Harga harus diisi',
        ]);
        // $this->form_validation->set_rules('id_member', 'ID Member', 'trim|required', [
        //     'required' => 'ID Member harus diisi',
        // ]);

        if ($this->form_validation->run() == false) {
            $response = [
                'status' => 'validation_failed',
                'message' => $this->form_validation->error_array(),
            ];
        } else {
            $kode_produk = $this->input->post('kode_produk');
            $id_member = $this->input->post('id_member');
            $checkProduk = $this->M_app->checkProduct($kode_produk, $id_member);
            $harga = $this->input->post('harga');
            $qty = $this->input->post('qty');

            if ($checkProduk == null) {
                $inserCart = [
                    'kode_transaksi' => 1,
                    'kode_produk' => $kode_produk,
                    'id_member' => 1,
                    'keterangan' => $this->input->post('keterangan'),
                    'qty' => $qty,
                    'harga' => $harga,
                    'kasir' => $this->session->userdata('nama'),
                    'total_harga' => $harga * $qty,
                ];
                $this->M_app->storeData('cart', $inserCart);
                $response = [
                    'status' => 'success',
                    'message' => 'Produk berhasil ditambahkan ke keranjang',
                ];
            } else {
                $response = [
                    'status' => 'failed',
                    'message' => 'Produk sudah ada di keranjang',
                ];
            }
        }
        echo json_encode($response);
    }
    // cart update
    public function updateCart(Type $var = null)
    {
        $start = microtime(true);
        $id_cart = $this->input->post('kode_brg');
        $keterangan = $this->input->post('ket');
        $qty = $this->input->post('qty');
        $jenisField = $this->input->post('jenis_field');
        $harga = $this->input->post('total_harga');
        $total_harga = (int) $qty * (int) $harga;
        if ($jenisField == 'cart') {
            $updateCart = [
                'qty' => $qty,
                'keterangan' => $keterangan,
                'total_harga' => $total_harga,
            ];
            $this->M_app->updateData('cart', 'id_cart', $id_cart, $updateCart);
            $transaksi = $this->M_app->findData('cart', 'id_cart', $id_cart)->row();
            $cart = $this->M_app->getDataCart($transaksi->kode_transaksi);
            if ($cart != null) {
                foreach ($cart as $key => $value) {
                    $resultHarga[] = $value->total_harga;
                }
                $total = array_sum($resultHarga);
            } else {
                $total = 0;
            }
        } else if ($jenisField == 'pending') {
            $updateCart = [
                'qty' => $qty,
                'ket' => $keterangan,
                'subtotal' => $total_harga,
            ];
            $this->M_app->updateData('transaksi_jual_produk_pending', 'id', $id_cart, $updateCart);
            // use for count data
            $checkKodeFaktur = $this->M_app->findData('transaksi_jual_produk_pending', 'id', $id_cart)->row();
            $jual_produk_pending = $this->M_app->findData('transaksi_jual_produk_pending', 'faktur', $checkKodeFaktur->faktur)->result();
            if ($jual_produk_pending !== null) {
                foreach ($jual_produk_pending as $key => $value) {
                    $resultHarga[] = $value->subtotal;
                }
                $total = array_sum($resultHarga);
            } else {
                $total = 0;
            }
        }
        $response = [
            'status' => 'success',
            'content' => $this->input->post(),
            'total_harga' => $total_harga,
            'keterangan' => $keterangan,
            'qty' => $qty,
            'id_cart' => $id_cart,
            'total_keseluruhan' => $total,
            'elapsed_time' => microtime(true) - $start,
        ];
        echo json_encode($response);
    }
    // process transaction
    public function transactionProcess(Type $var = null)
    {
        $this->form_validation->set_rules('bayar', 'Bayar', 'trim|required|numeric', [
            'required' => 'Bayar Tidak Boleh kosong',
            'numeric' => 'Bayar Harus Berupa Angka',
        ]);
        $this->form_validation->set_rules('jenis', 'jenis', 'trim|required', [
            'required' => 'Jenis Tidak Boleh Kosong',
        ]);
        $this->form_validation->set_rules('jenis_pembayaran', 'Jenis Pembaayaran', 'trim|required', [
            'required' => 'Jenis Pembayaran Harus di pilih',
        ]);
        // $this->form_validation->set_rules('costumer_id', 'ID Member', 'trim|required', [
        // 'required' => 'ID Member Tidak Boleh Kosong',
        // ]);

        if ($this->form_validation->run() == false) {
            $response = [
                'status' => 'validation_failed',
                'message' => $this->form_validation->error_array(),
            ];
        } else {
            $costumer_id = $this->input->post('costumer_id');
            $costumer_name = $this->input->post('costumer_name');
            $total_harga = $this->input->post('total_harga');
            $jenis = $this->input->post('jenis');
            $kasir = $this->session->userdata('nama');
            $no_hp = $this->input->post('no_hp');
            $jenis_pembayaran = $this->input->post('jenis_pembayaran');

            if ($jenis == 'cart') {
                $cart = $this->M_app->getDataCartByKasir($kasir);
                if ($cart == null) {
                    $response = [
                        'status' => 'chart emty',
                        'msg' => 'Keranjang belanja kosong',
                    ];
                } else {
                    $faktur = $this->makeFaktur();
                    $transaksi_jual = [
                        'faktur' => $faktur,
                        'tgl' => date('Y-m-d'),
                        'jam' => date('H:i:s'),
                        'kasir' => $kasir,
                        'customer_id' => $costumer_id,
                        'customer_name' => $costumer_name,
                        'total_harga' => $total_harga,
                        'bayar' => $this->input->post('bayar'),
                        'kembali' => $this->input->post('kembali'),
                        'dp' => 0,
                        'sisa' => 0,
                        'j_item' => 0,
                        'j_produk' => 0,
                        'keterangan' => 0,
                        'hp' => $no_hp,
                        'untung' => 0,
                        'diskon' => 0,
                        'ppn' => 0,
                        'total_hpp' => 0,
                        'tgl_ambil' => 0,
                        'prioritas' => 0,
                        'status' => '',
                        'pc' => 0,
                        'ket' => 'Lunas',
                        'jenis' => $jenis_pembayaran,
                        'tgl_bayar' => '',
                        'angsuran' => '',
                        'jumlah_terakhir' => 0,
                        'metode' => $jenis_pembayaran,
                        'alamat' => '',
                        'pengirim' => 0,
                        'kurir' => 0,
                        'nopol' => 0,
                        'mail' => 0,
                        'tgl_kirim' => 0,
                        'op_cs' => 0,
                        'kredit_poin' => 0,
                        'lokasi' => 'Pusat',
                        'tgl_tempo' => 0,
                        'id_auto' => 0,
                        'pajak_bank' => 0,
                    ];
                    foreach ($cart as $key => $value) {
                        $transaksi_jual_produk[] = [
                            'faktur' => $faktur,
                            'kode_brg' => $value->kode_produk,
                            'nama_brg' => $value->nama,
                            'qty' => $value->qty,
                            'harga_brg' => $value->harga,
                            'size' => 0,
                            'luas' => 0,
                            'disc' => 0,
                            'subtotal' => $value->total_harga,
                            'ket' => $value->keterangan,
                            'rincian' => 0,
                            'subtotal_hpp' => 0,
                            'sat' => 0,
                            'hitstat' => 0,
                            'bahan' => 0,
                            'bagian' => 0,
                            'p' => 0,
                            'l' => 0,
                            'hgnormal' => 0,
                            'kategori' => 0,
                            'tambahan' => 0,
                            'dikirim' => 0,
                            'sisakirim' => 0,
                            'packing' => 0,
                            'ket_kirim' => 0,
                            'status' => 0,
                            'op_mesin' => 0,
                            'op_desain' => 0,
                            'mesin' => 0,
                            'customer_id' => 0,
                            'customer_nama' => 0,
                            'lampiran' => 0,
                        ];
                    }
                    // insert transaction
                    $this->M_app->storeData('transaksi_jual', $transaksi_jual);
                    $this->M_app->storeBacthData('transaksi_jual_produk', $transaksi_jual_produk);
                    $this->M_app->deleteData('cart', 'kasir', $this->session->userdata('nama'));
                    $response = [
                        'status' => 'success',
                        'faktur' => $faktur,
                        'transaksi_jual' => $transaksi_jual,
                        'transaksi_jual_produk' => $transaksi_jual_produk,
                    ];
                }

            } else if ($jenis == 'pending') {
                $faktur = $this->input->post('faktur');
                $jual_produk_pending = $this->M_app->findData('transaksi_jual_produk_pending', 'faktur', $faktur)->result();
                $transaksi_jual_pending = $this->M_app->findData('transaksi_jual_pending', 'faktur', $faktur)->row();
                if ($jual_produk_pending !== null) {
                    foreach ($jual_produk_pending as $key => $value) {
                        $resultHarga[] = $value->subtotal;
                        $transaksi_jual_produk[] = [
                            'faktur' => $faktur,
                            'kode_brg' => $value->kode_brg,
                            'nama_brg' => $value->nama_brg,
                            'qty' => $value->qty,
                            'harga_brg' => $value->harga_brg,
                            'size' => 0,
                            'luas' => 0,
                            'disc' => 0,
                            'subtotal' => $value->subtotal,
                            'ket' => $value->ket,
                            'rincian' => 0,
                            'subtotal_hpp' => 0,
                            'sat' => 0,
                            'hitstat' => 0,
                            'bahan' => 0,
                            'bagian' => 0,
                            'p' => 0,
                            'l' => 0,
                            'hgnormal' => 0,
                            'ketegori' => 0,
                            'tambahan' => 0,
                            'dikirim' => 0,
                            'sisakirim' => 0,
                            'packing' => 0,
                            'ket_kirim' => 0,
                            'status' => 0,
                            'op_mesin' => 0,
                            'op_desain' => 0,
                            'mesin' => 0,
                            'customer_id' => 0,
                            'customer_nama' => 0,
                            'lampiran' => 0,
                        ];
                    }
                    $total = array_sum($resultHarga);
                } else {
                    $total = 0;
                }
                $transaksi_jual = [
                    'faktur' => $faktur,
                    'tgl' => $transaksi_jual_pending->tgl,
                    'jam' => $transaksi_jual_pending->jam,
                    'kasir' => $kasir,
                    'costumer_id' => $transaksi_jual_pending->customer_id,
                    'costumer_name' => $transaksi_jual_pending->customer_name,
                    'total_harga' => $transaksi_jual_pending->total_harga,
                    'bayar' => $this->input->post('bayar'),
                    'kembali' => $this->input->post('kembali'),
                    'dp' => 0,
                    'sisa' => 0,
                    'j_item' => 0,
                    'j_produk' => 0,
                    'keterangan' => 0,
                    'hp' => $no_hp,
                    'untung' => 0,
                    'diskon' => 0,
                    'ppn' => 0,
                    'total_hpp' => 0,
                    'tgl_ambil' => 0,
                    'prioritas' => 0,
                    'status' => '',
                    'pc' => 0,
                    'ket' => 'Lunas',
                    'jenis' => $jenis_pembayaran,
                    'tgl_bayar' => '',
                    'angsuran' => '',
                    'jumlah_terakhir' => 0,
                    'metode' => $jenis_pembayaran,
                    'alamat' => '',
                    'pengirim' => 0,
                    'kurir' => 0,
                    'nopol' => 0,
                    'mail' => 0,
                    'tgl_kirim' => 0,
                    'op_cs' => 0,
                    'kredit_poin' => 0,
                    'lokasi' => 'Pusat',
                    'tgl_tempo' => 0,
                    'id_auto' => 0,
                    'pajak_bank' => 0,
                ];

                // insert transaction
                $this->M_app->storeData('transaksi_jual', $transaksi_jual);
                $this->M_app->storeBacthData('transaksi_jual_produk', $transaksi_jual_produk);
                $this->M_app->deleteData('transaksi_jual_produk_pending', 'faktur', $faktur);
                $this->M_app->deleteData('transaksi_jual_pending', 'faktur', $faktur);
                $response = [
                    'status' => 'success',
                    'faktur' => $faktur,
                    'transaksi_jual' => $transaksi_jual,
                    'transaksi_jual_produk' => $transaksi_jual_produk,
                ];
            }
        }
        echo json_encode($response);
    }
    // use for make faktur
    public function makeFaktur(Type $var = null)
    {
        $cabang = $this->session->userdata('cabang');
        $kode = $cabang['kd_penjualan'];
        $date = date('dmy');
        $faktur = $kode . $date;

        $lastFakturNumber = $this->M_app->getLastFakturNumber($faktur)->faktur;
        $newNumber = explode("-", $lastFakturNumber);
        $newFaktur = $faktur . "-" . ($newNumber[1] + 1);
        return $newFaktur;
    }
    // get cart data
    public function getCartData(Type $var = null)
    {
        $kode_transaksi = $this->input->post('kode_transaksi');
        $cart = $this->M_app->getDataCart($kode_transaksi);
        if ($cart != null) {
            foreach ($cart as $key => $value) {
                $resultHarga[] = $value->total_harga;
            }
            $totalHarga = array_sum($resultHarga);
        } else {
            $totalHarga = 0;
        }
        $response = [
            'status' => 'success',
            'data' => $cart,
            'total_harga' => $totalHarga,
        ];
        echo json_encode($response);
    }
    // use for delete
    public function deleteCartdata(Type $var = null)
    {
    }
    // delete cart data
    public function deleteCart(Type $var = null)
    {
        $id_cart = $this->input->post('id_cart');
        $this->M_app->deleteData('cart', 'id_cart', $id_cart);
        $response = [
            'status' => 'success',
            'message' => 'Data berhasil dihapus',
        ];
        echo json_encode($response);
    }
    // use for get data pending
    public function getDataPending(Type $var = null)
    {
        $faktur = $this->input->post('faktur');
        if ($faktur == null) {
            $response = [
                'status' => 'not_fount',
                'message' => 'Faktur tidak ditemukan',
            ];
        } else {

            $jual_produk_pending = $this->M_app->findData('transaksi_jual_produk_pending', 'faktur', $faktur)->result();
            $transaksi_jual_pending = $this->M_app->findData('transaksi_jual_pending', 'faktur', $faktur)->row();
            if ($jual_produk_pending !== null) {
                foreach ($jual_produk_pending as $key => $value) {
                    $resultHarga[] = $value->subtotal;
                }
                $total = array_sum($resultHarga);
            } else {
                $total = 0;
            }
            $response = [
                'status' => 'success',
                'data' => $jual_produk_pending,
                'transaksi_jual_pending' => $transaksi_jual_pending,
                'total_harga' => $total,
            ];}
        echo json_encode($response);
    }
    public function getQr()
    {
        $code = $this->input->post('barcode');
        $this->form_validation->set_rules('barcode', 'Barcode Tidak Boleh Kosong', 'trim|required', [
            'required' => 'Kode Produk harus diisi',
        ]);

        if ($this->form_validation->run() == false) {
            $response = [
                'status' => 'validation_failed',
                'errors' => $this->form_validation->error_array(),
            ];
        } else {
            $data = $this->M_app->findData('produk', 'barcode', $code)->row();
            if ($data == null) {
                $response = [
                    'status' => 'not_found',
                    'message' => 'Kode Produk tidak ditemukan',
                ];
            } else {
                $response = [
                    'status' => 'success',
                    'data' => $data,
                ];
            }
        }
        echo json_encode($response);
    }
}
