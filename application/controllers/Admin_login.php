<?php
defined('BASEPATH') or exit('No direct scripts access allowed');

class Admin_login extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('M_podcast');
  }

  public function index()
  {
    $this->load->view('admin/login');
  }

  public function register()
  {
    $this->load->view('admin/register');
  }

  public function regis_action()
  {
    $username = $this->input->post('username');
    $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);

    $dataInput = array(
      'username' => $username,
      'password' => $password
    );
    $this->M_podcast->insert('tbl_admin', $dataInput);
    redirect('admin_login');
  }

  public function login_action()
  {
    $u = $this->input->post('username');
    $p = $this->input->post('password');

    $check = $this->db->get_where('tbl_admin', ['username' => $u])->row_array();

    if (password_verify($p, $check['password'])) {
      $data_session = array(
        'username' => $u,
        'status' => 'login'
      );

      $this->session->set_userdata($data_session);
      redirect('admin');
    } else {
      redirect('admin_login');
    }
  }
}
