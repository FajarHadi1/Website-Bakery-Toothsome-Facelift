<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Keranjang_model
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

class Keranjang_model extends CI_Model {

  public $table = 'keranjang';
	public $id = 'keranjang.id';
  
  public function __construct()
  {
    parent::__construct();
  }

  public function get()
  {
    $id = $this->session->userdata('id');
    $this->db->select('k.*, b.nama as nama, b.harga as harga');
    $this->db->from('keranjang k');
    $this->db->join('barang b', 'k.id_barang = b.id');
    $this->db->where('k.id_user', $id);
    $query = $this->db->get();
    return $query->result_array();
  }

  public function getById($id)
	{

		$this->db->from($this->table);
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row_array();
	}

  public function update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}
  
	public function insert($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function delete($id)
	{
		$this->db->where($this->id, $id);
		$this->db->delete($this->table);
		return $this->db->affected_rows();
	}

  public function delete_all($id)
  {
    $this->db->from($this->table);
		$this->db->where('id_user', $id);
    $this->db->delete($this->table);
    return $this->db->affected_rows();
  }

  public function jumlah()
  {
    $id = $this->session->userdata('id');
    $query = $this->db->get($this->table);
    $this->db->where('id_user', $id);
    return $query->num_rows();
  }
}

/* End of file Keranjang_model.php */
/* Location: ./application/models/Keranjang_model.php */