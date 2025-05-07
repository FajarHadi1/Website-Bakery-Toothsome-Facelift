<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Admin
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Admin extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    is_logged_in();
    $this->load->model('Barang_model');
    $this->load->model('Penjualan_model');
    $this->load->model('User_model');
    $this->load->model('Detail_model');
  }

  function index()
  {
    // $data['judul'] = "Halaman Penjualan";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['barang'] = $this->Barang_model->tbarang();
    $data['penjualan'] = $this->Penjualan_model->tpenjualan();
    $data['totalb'] = $this->Detail_model->charts();
    $data['us'] = $this->User_model->tuser();
    $this->load->view("layout/admin_header", $data);
    $this->load->view("admin/dashboard", $data);
    $this->load->view("layout/admin_footer");
  }

}


/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */