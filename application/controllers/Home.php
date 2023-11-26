<?php

use LDAP\Result;

defined('BASEPATH') or exit('No direct scripts access allowed');

class Home extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('M_podcast');
  }

  public function index()
  {

    $data['user'] = $this->M_podcast->get_all_data('tbl_user')->result();

    $id = $this->session->userdata('idUser');
    $datawhere = array('idUser' => $id);
    $data['username'] = $this->M_podcast->get_by_id('tbl_user', $datawhere)->row();

    //get all data podcast
    $data_podcast['podcast'] = $this->M_podcast->get_all_data('tbl_podcast')->result();

    $this->load->view('home/layout/header');
    $this->load->view('home/layout/navigation', $data);
    $this->load->view('home/layout/sidebar');
    $this->load->view('home/layout/recomendation');
    $this->load->view('home/layout/hello_user');
    $this->load->view('home/user/home_page', $data_podcast);
    // $this->load->view('home/layout/footer');
  }

  public function library()
  {
    $id = $this->session->userdata('idUser');
    $datawhere = array('idUser' => $id);
    $data['username'] = $this->M_podcast->get_by_id('tbl_user', $datawhere)->row();
    $this->load->view('home/layout/header');
    $this->load->view('home/layout/navigation', $data);
    $this->load->view('home/layout/sidebar');
    $this->load->view('home/layout/recomendation');
    $this->load->view('home/user/library');
    $this->load->view('home/layout/footer');
  }


  public function history()
  {
    $id = $this->session->userdata('idUser');
    $datawhere = array('idUser' => $id);
    $data['username'] = $this->M_podcast->get_by_id('tbl_user', $datawhere)->row();
    $this->load->view('home/layout/header');
    $this->load->view('home/layout/navigation', $data);
    $this->load->view('home/layout/sidebar');
    $this->load->view('home/layout/recomendation');
    $this->load->view('home/user/history');
    $this->load->view('home/layout/footer');
  }

  public function liked_podcast()
  {
    $id = $this->session->userdata('idUser');
    $datawhere = array('idUser' => $id);
    $data['username'] = $this->M_podcast->get_by_id('tbl_user', $datawhere)->row();
    $this->load->view('home/layout/header');
    $this->load->view('home/layout/navigation', $data);
    $this->load->view('home/layout/sidebar');
    $this->load->view('home/layout/recomendation');
    $this->load->view('home/user/liked');
    $this->load->view('home/layout/footer');
  }

  public function help()
  {
    $id = $this->session->userdata('idUser');
    $datawhere = array('idUser' => $id);
    $data['username'] = $this->M_podcast->get_by_id('tbl_user', $datawhere)->row();
    $this->load->view('home/layout/header');
    $this->load->view('home/layout/navigation', $data);
    $this->load->view('home/layout/sidebar');
    $this->load->view('home/layout/recomendation');
    $this->load->view('home/user/help');
  }

  public function setting()
  {
    $id = $this->session->userdata('idUser');
    $datawhere = array('idUser' => $id);
    $data['username'] = $this->M_podcast->get_by_id('tbl_user', $datawhere)->row();
    $this->load->view('home/layout/header');
    $this->load->view('home/layout/navigation', $data);
    $this->load->view('home/layout/sidebar');
    $this->load->view('home/layout/recomendation');
    $this->load->view('home/user/setting');
  }

  public function report()
  {
    $id = $this->session->userdata('idUser');
    $datawhere = array('idUser' => $id);
    $data['username'] = $this->M_podcast->get_by_id('tbl_user', $datawhere)->row();
    $this->load->view('home/layout/header');
    $this->load->view('home/layout/navigation', $data);
    $this->load->view('home/layout/sidebar');
    $this->load->view('home/layout/recomendation');
    $this->load->view('home/user/report');
  }

  public function register()
  {
    $id = $this->session->userdata('idUser');
    $datawhere = array('idUser' => $id);
    $data['username'] = $this->M_podcast->get_by_id('tbl_user', $datawhere)->row();
    $this->load->view('home/layout/header');
    $this->load->view('home/layout/navigation', $data);
    $this->load->view('home/layout/sidebar');
    $this->load->view('home/layout/recomendation');
    $this->load->view('home/user/register');
  }
  public function login()
  {

    $id = $this->session->userdata('idUser');
    $datawhere = array('idUser' => $id);
    $data['username'] = $this->M_podcast->get_by_id('tbl_user', $datawhere)->row();
    
    $this->load->view('home/layout/header');
    $this->load->view('home/layout/navigation', $data);
    $this->load->view('home/layout/sidebar');
    $this->load->view('home/layout/recomendation');
    $this->load->view('home/user/login');
    $this->load->view('home/layout/footer');
  }

  public function regis_action()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $email = $this->input->post('email');
    $phone = $this->input->post('phone');
    $city = $this->input->post('city');

    $dataInput = array(
      'username' => $username,
      'password' => $password,
      'email' => $email,
      'phone' => $phone,
      'city' => $city,
      'is_active' => 'Y'
    );
    $this->M_podcast->insert('tbl_user', $dataInput);
    redirect('home/login');
  }

  public function login_action()
  {
    $u = $this->input->post('username');
    $p = $this->input->post('password');
    $check = $this->M_podcast->user_check($u, $p)->row_object();
    $result = $this->M_podcast->user_check($u, $p)->row_object();

    if ($check==1) {
      $data_session = array(
        'idUser' => $result->idUser,
        'User' => $u,
        'status' => 'login'
      );

      $this->session->set_userdata($data_session);
      redirect('home/index');
    } else {
      redirect('home/login');
    }
  }

  public function logout()
  {
    $this->session->sess_destroy();
    redirect('home');
  }
}
