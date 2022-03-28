<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['head'] = 'layout/head';
        $data['foot'] = 'layout/foot';

        $this->load->view('login', $data);
    }

    public function login_akses()
    {
        $username = trim($this->input->post('username'));
        $password = sha1(trim($this->input->post('password')));

        $akses = $this->db->query("SELECT * FROM karyawan A
			WHERE A.username = '$username' AND A.password = '$password'");

        if ($akses->num_rows() == 1) {
            foreach ($akses->result_array() as $data) {
                $lokasi = $data['lokasi_cabang'];
                $session['cabang'] = $this->db->get_where('setup_toko', array('lokasi' => $lokasi))->row_array();
                $session['akun'] = $data['akun'];
                $session['nama'] = $data['nama'];
            }

            // echo $kode;
            $this->session->set_userdata($session);
            redirect(base_url('dashboard'));
        } else {
            $this->session->set_flashdata("msg", "<div class='alert alert-warning col-md-12'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Pastikan Username dan Password Benar!</div>");
            redirect(base_url('login'));
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }

    public function akses()
    {
        redirect(base_url('dashboard'));
    }
    public function makeAkun(Type $var = null)
    {
        $akun = sha1(trim('admin'));
        echo json_encode($akun);
    }

}
