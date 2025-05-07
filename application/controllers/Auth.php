<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Auth
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

class Auth extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('User_model', 'userrole');
  }

  public function index()
  {
    $this->load->view('layout/auth_header');
    $this->load->view('auth/login');
    $this->load->view('layout/auth_footer');
  }

  public function register()
  {
    $this->load->view('layout/auth_header');
    $this->load->view('auth/register');
    $this->load->view('layout/auth_footer');
  }

  public function cek_regis()
  {
    $data = [
      'nama' => htmlspecialchars($this->input->post('nama', true)),
      'email' => htmlspecialchars($this->input->post('email', true)),
      'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
      'role' => "User",
      'date_created' => date('Y-m-d'),
    ];
    $this->userrole->insert($data);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat Akunmu telah berhasil terdaftar, Silahkan Login!</div>');
    redirect('Auth');
  }

  public function cek_login()
  {
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    $user = $this->db->get_where('user', ['email' => $email])->row_array();
    if($user){
      if(password_verify($password, $user['password'])){
        $data = [
          'email' => $user['email'],
          'role' => $user['role'],
          'id' => $user['id'],
        ];
        $this->session->set_userdata($data);
        if($user['role'] == 'Admin'){
          redirect('Admin');
        }else{
          redirect('Home');
        }
      }else{
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
        redirect('Auth');
      }
    }else{
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum terdaftar!</div>');
      redirect('Auth');
    }
  }

  public function logout()
  {
    $this->session->unset_userdata('email');
    $this->session->unset_userdata('role');
    $this->session->unset_userdata('message', '<div class="alert alert-success" role="alert">Berhasil logout!</div>');
    redirect('Auth');
  }

}


/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */