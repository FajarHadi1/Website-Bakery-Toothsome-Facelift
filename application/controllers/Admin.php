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
//  * @property CI_DB $db
//  * @property CI_Session $session
//  * @property Barang_model $Barang_model
//  * @property Penjualan_model $Penjualan_model
//  * @property User_model $User_model
//  * @property Detail_model $Detail_model
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