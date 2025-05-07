<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Dompdf\Adapter\CPDF;      
use Dompdf\Dompdf;
use Dompdf\Exception;

/**
 *
 * Controller Penjualan
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

class Penjualan extends CI_Controller
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

  public function index()
  {
    $data['judul'] = "Halaman Penjualan";
		$data['penjualan'] = $this->Penjualan_model->get();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view("layout/admin_header", $data);
		$this->load->view("admin/vw_penjualan", $data);
		$this->load->view("layout/admin_footer");
  }

  public function detail($id)
  {
    $data['judul'] = "Halaman Detail penjualan";
    $data['detail'] = $this->Detail_model->getById($id);
    $data['penjualan'] = $this->Penjualan_model->getByIdP($id);
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->form_validation->set_rules('status', 'Status', 'required', [
    'required' => 'Status Wajib di isi'
    ]);
    if ($this->form_validation->run() == false) {
      $this->load->view("layout/admin_header", $data);
      $this->load->view("admin/vw_detail_penjualan", $data);
      $this->load->view("layout/admin_footer");
    } else {
      $status = $this->input->post('status');
      $nojual = $this->input->post('no_penjualan');
      $this->Penjualan_model->updatestatus($status, $nojual);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Status Berhasil
      DiUbah!</div>');
      redirect('Penjualan');
    } 
  }

  public function export()
  {
    $dompdf = new Dompdf();
    $this->data['all_jual'] = $this->Penjualan_model->get();
    $this->data['title'] = 'Laporan Data Penjualan';
    $this->data['no'] = 1;
    $dompdf->setPaper('A4', 'Landscape');
    $html = $this->load->view('admin/report', $this->data, true);
    $dompdf->load_html($html);
    $dompdf->render();
    $dompdf->stream('Laporan Data Penjualan Tanggal ' . date('d F Y'), array("Attachment" => false));
  }

}


/* End of file Penjualan.php */
/* Location: ./application/controllers/Penjualan.php */