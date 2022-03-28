<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pagination extends CI_Model {

    public function halaman($perpage)
    {
        $jml_data = $this->jml_order();
		$config['base_url'] = base_url().'status_order/';
		$config['total_rows'] = $jml_data;
		$config['per_page'] = $perpage;
		$config['next_link'] 		= '<span class="iconify-inline" data-icon="ep:arrow-right"></span>';
		$config['prev_link'] 		= '<span class="iconify-inline" data-icon="ep:arrow-left"></span>';
		$config['first_link'] 		= '<span class="iconify-inline" data-icon="ep:d-arrow-left"></span>';
		$config['last_link'] 		= '<span class="iconify-inline" data-icon="ep:d-arrow-right"></span>';
		$config['full_tag_open'] 	= '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close'] 	= '</ul></nav></div>';
		$config['num_tag_open'] 	= '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] 	= '</span></li>';
		$config['cur_tag_open'] 	= '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close'] 	= '<span class="sr-only">(current)</span></span></li>';
		$config['prev_tag_open'] 	= '<li class="page-item"><span class="page-link">';
		$config['prev_tag_close'] 	= '</span></li>';
		$config['next_tag_open'] 	= '<li class="page-item"><span class="page-link">';
		$config['next_tag_close'] 	= '<span aria-hidden="true"></span></span></li>';
		$config['last_tag_open'] 	= '<li class="page-item"><span class="page-link">';
		$config['last_tag_close'] 	= '</span></li>';
		$config['first_tag_open'] 	= '<li class="page-item"><span class="page-link">';
		$config['first_tag_close'] 	= '</span></li>';

        $this->pagination->initialize($config);
        $links = $this->pagination->create_links();
        return $links;
    }

    public function jml_order()
    {
        return $this->db->get('transaksi_jual')->num_rows();
    }

}