<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_app extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function date()
    {
        date_default_timezone_set('Asia/Jakarta');
        return date('Y-m-d');
    }

    public function jml_transaksi_today()
    {
        $date = $this->date();
        $q = $this->db->get_where('transaksi_jual', array('tgl' => $date));
        return $q->num_rows();
    }

    public function jml_penjualan_today()
    {
        $date = $this->date();
        $q = $this->db->query("SELECT SUM(total_harga) AS penjualan FROM transaksi_jual WHERE tgl='$date'");
        $row = $q->row_array();
        $sum = $row['penjualan'];
        if (!empty($sum)) {
            return $sum;
        } else {
            return 0;
        }
    }

    public function jml_piutang()
    {
        $q = $this->db->query("SELECT SUM(sisa) AS piutang FROM transaksi_jual");
        $row = $q->row_array();
        return $row['piutang'];
    }

    public function jml_pelunasan()
    {
        $date = $this->date();
        $q = $this->db->query("SELECT SUM(bayar) AS penjualan FROM transaksi_jual WHERE tgl='$date'");
        $row = $q->row_array();
        $sum = $row['penjualan'];
        if (!empty($sum)) {
            return $sum;
        } else {
            return 0;
        }
    }

    public function transaksi_today()
    {
        $date = $this->date();
        $this->db->order_by('jam', 'DESC');
        $q = $this->db->get_where('transaksi_jual', array('tgl' => $date));
        return $q->result();
    }

    public function data_customer()
    {
        return $this->db->get('customer')->result();
    }

    public function data_pending()
    {
        $this->db->order_by('faktur', 'DESC');
        $q = $this->db->get('transaksi_jual_pending');
        return $q->result();
    }

    public function status_order($number, $offset)
    {
        $this->db->order_by('faktur', 'DESC');
        $q = $this->db->get('transaksi_jual', $number, $offset);
        return $q->result();
    }

    public function status_order_id($id)
    {
        $q = $this->db->get_where('transaksi_jual', array('faktur' => $id));
        return $q->row_array();
    }

    public function order_detail($id)
    {
        return $this->db->get_where('transaksi_jual_produk', array('faktur' => $id))->result();
    }

    public function status_order_s($keyword)
    {
        $this->db->like('faktur', $keyword);
        $this->db->or_like('customer_name', $keyword);
        $q = $this->db->get('transaksi_jual');
        return $q->result();
    }

    public function dropdown_metode()
    {
        $value[''] = '-- Pilih Metode --';
        $value['DEBIT'] = 'DEBIT';
        $value['GIRO'] = 'GIRO';
        $value['TRANSFER'] = 'TRANSFER';
    }

    public function dropdown_pilih_bank()
    {
        $this->db->from('bank');
        $this->db->order_by('bank', 'ASC');
        $q = $this->db->get()->result();

        $value[''] = '-- Pilih Metode --';
        foreach ($q as $row) {
            $value[$row->bank] = $row->bank;
        }
        return $value;

    }
    public function getDataMember($id)
    {

        $this->db->from('customer');
        $this->db->where('id', $id);
        $this->db->limit(1);
        return $this->db->get()->row();

    }

    public function pagination_data($limit, $start, $table)
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get($this->db->dbprefix . $table);
        return $query->result_array();
    }

    public function pagination_total_rows($table)
    {
        $query = $this->db->get($this->db->dbprefix . $table);
        return $query->num_rows();
    }
    // use for find specific data
    public function findData($table, $reference, $id)
    {
        $this->db->from($table);
        $this->db->where($reference, $id);
        return $this->db->get();
    }
    // use for check produk is exist
    public function checkProduct($kode_produk, $id_member)
    {
        $this->db->from('cart');
        $this->db->where('kode_produk', $kode_produk);
        $this->db->where('id_member', $id_member);
        return $this->db->get()->row();
    }
    // store to database
    public function storeData($table, $object)
    {
        $this->db->insert($table, $object);
    }
    // use for update data to database
    public function updateData($table, $reference, $id, $object)
    {
        $this->db->where($reference, $id);
        $this->db->update($table, $object);
    }
    // get data for cart
    public function getDataCart($kode_transaksi)
    {
        $this->db->from('cart');
        $this->db->where('kode_transaksi', $kode_transaksi);
        $this->db->join('produk', 'cart.kode_produk = produk.kode');
        return $this->db->get()->result();
    }
    // use for delete data
    public function deleteData($table, $reference, $id)
    {
        $this->db->where($reference, $id);
        $this->db->delete($table);
    }
}
