<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Barang
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

class Barang extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
	is_logged_in();
    $this->load->model('Barang_model');
  }

  public function index()
	{
		$data['judul'] = "Halaman Barang";
		$data['barang'] = $this->Barang_model->get();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view("layout/admin_header", $data);
		$this->load->view("admin/vw_barang(1)", $data);
		$this->load->view("layout/admin_footer");
	}
	function tambah()
	{
		$data['judul'] = "Halaman Tambah Barang";

		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('nama', 'Nama Barang', 'required', [
			'required' => 'Nama Barang Wajib di isi'
		]);
		$this->form_validation->set_rules('stok', 'Stok', 'required', [
			'required' => 'Stok Wajib di isi'
		]);
		$this->form_validation->set_rules('harga',  'Harga', 'required', [
			'required' => 'Harga Wajib di isi'
		]);
		$this->form_validation->set_rules('keterangan',  'Keterangan', 'required', [
			'required' => 'Keterangan Wajib di isi'
		]);
		if ($this->form_validation->run() == false) {
			$this->load->view("layout/admin_header", $data);
			$this->load->view("admin/vw_tambah_barang", $data);
			$this->load->view("layout/admin_footer", $data);
		} else {
			$data = [
				'nama' => $this->input->post('nama'),
				'stok' => $this->input->post('stok'),
				'harga' => $this->input->post('harga'),
				'keterangan' => $this->input->post('keterangan'),
			];
      $upload_image = $_FILES['gambar']['name'];
      if ($upload_image) {
          $config['allowed_types'] = 'gif|jpg|png|jpeg';
          $config['max_size'] = '2048';
          $config['upload_path'] = './assets/img/menu/';
          $this->load->library('upload', $config);
          if ($this->upload->do_upload('gambar')) {
			$new_image = $this->upload->data('file_name');
			$this->db->set('gambar', $new_image);
          } else {
          	echo $this->upload->display_errors();
          }
      }
      $this->Barang_model->insert($data, $upload_image);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data
      Barang Berhasil Ditambah!</div>');
      redirect('Barang');
		}
	}
	public function hapus($id)
	{
		$this->Barang_model->delete($id);
		$error = $this->db->error();
		if ($error['code'] != 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data Sembako tidak dapat dihapus (sudah berelasi)!</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Sembako Berhasil Dihapus!</div>');
		}
		redirect('Barang');
	}

	function edit($id)
	{
		$data['judul'] = "Halaman Edit Barang";
		$data['barang'] = $this->Barang_model->getById($id);
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('nama', 'Nama Barang', 'required', [
			'required' => 'Nama Barang Wajib di isi'
		]);
		$this->form_validation->set_rules('stok', 'Stok', 'required', [
			'required' => 'Stok Wajib di isi'
		]);
		$this->form_validation->set_rules('harga',  'Harga', 'required', [
			'required' => 'Harga Wajib di isi'
		]);
		$this->form_validation->set_rules('keterangan',  'Keterangan', 'required', [
			'required' => 'Keterangan Wajib di isi'
		]);
		if ($this->form_validation->run() == false) {
			$this->load->view("layout/admin_header", $data);
			$this->load->view("admin/vw_ubah_barang", $data);
			$this->load->view("layout/admin_footer");
		} else {
			$data = [
				'nama' => $this->input->post('nama'),
				'stok' => $this->input->post('stok'),
				'harga' => $this->input->post('harga'),
				'keterangan' => $this->input->post('keterangand'),
			];
      $upload_image = $_FILES['gambar']['name'];
      if ($upload_image) {
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2048';
        $config['upload_path'] = './assets/img/menu/';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('gambar')) {
            $old_image = $data['barang']['gambar'];
        if ($old_image != 'default.jpg') {
            unlink(FCPATH . 'assets/img/barang/' . $old_image);
        }
        $new_image = $this->upload->data('file_name');
        $this->db->set('gambar', $new_image);
        } else {
          echo $this->upload->display_errors();
        }
      }
      $id = $this->input->post('id');
      $this->Barang_model->update(['id' => $id], $data, $upload_image);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Barang Berhasil
      Diubah!</div>');
      redirect('barang');
		}
	}

}


/* End of file Barang.php */
/* Location: ./application/controllers/Barang.php */