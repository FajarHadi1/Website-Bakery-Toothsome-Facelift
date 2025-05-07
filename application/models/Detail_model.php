<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Detail_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Detail_model extends CI_Model {
  public $table = 'detail_penjualan';
  public $id = 'detail_penjualan.id';
  
  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------
  
  public function getById($id)
  {
    $this->db->select('d.*,r.nama as nama, b.nama as barang');
    $this->db->from('detail_penjualan d');
    $this->db->join('user r', 'd.id_user = r.id');
    $this->db->join('barang b', 'd.id_barang = b.id');
    $this->db->where('d.no_penjualan', $id);
    $query = $this->db->get();
    return $query->result_array();
  }

  public function getByUser($id)
  {
    $idu = $this->session->userdata('id');
    $this->db->select('d.*, b.nama as nama_barang');
    $this->db->from('detail_penjualan d');
    $this->db->join('barang b', 'd.id_barang = b.id');
    $this->db->where('d.no_penjualan', $id, 'AND d.id_user=' . $idu);
    $this->db->where('d.id_user=' . $idu);
    $query = $this->db->get();
    return $query->result_array();
  }

  public function update($where, $data){
    $this->db->update($this->table, $data, $where);
    return $this->db->affected_rows();
  }

  public function insert($data)
  {
    return $this->db->insert_batch($this->table, $data);
  }

  public function delete($id){
    $this->db->where($this->id, $id);
    $this->db->delete($this->table);
    return $this->db->affected_rows();
  }

  function charts()
  {
    $this->db->select('d.*, b.nama as barang, sum(d.jumlah) as jum');
    $this->db->from('detail_penjualan d');
    $this->db->join('barang b', 'd.id_barang = b.id');
    $this->db->group_by('d.id_barang');
    $query = $this->db->get();
    return $query->result_array();
  }

}

/* End of file Detail_model.php */
/* Location: ./application/models/Detail_model.php */