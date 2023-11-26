<?php
defined('BASEPATH') or exit('No direct scripts access allowed');

class Admin extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('M_podcast');
  }

  public function index()
  {
    if (empty($this->session->userdata('username'))) {
      redirect('admin_login');
    }
    $data['category'] = $this->M_podcast->get_all_data('tbl_kategori')->result();
    $this->load->view('admin/header');
    $this->load->view('admin/navigation');
    $this->load->view('admin/sidebar');
    $this->load->view('admin/category', $data);
  }

  public function member()
  {
    $data['user'] = $this->M_podcast->get_all_data('tbl_user')->result();
    $this->load->view('admin/header');
    $this->load->view('admin/navigation');
    $this->load->view('admin/sidebar');
    $this->load->view('admin/member', $data);
  }

  public function add_view()
  {
    $this->load->view('admin/header');
    $this->load->view('admin/navigation');
    $this->load->view('admin/sidebar');
    $this->load->view('admin/add_category');
  }

  public function edit_category($id)
  {
    $dataWhere = array('idKat' => $id);
    $data['category'] = $this->M_podcast->get_by_id('tbl_kategori', $dataWhere)->row_object();
    $this->load->view('admin/header');
    $this->load->view('admin/navigation');
    $this->load->view('admin/sidebar');
    $this->load->view('admin/edit_category', $data);
  }

  public function add_action()
  {
    $category = $this->input->post('category');
    $dataInput = array('category_name' => $category);
    $this->M_podcast->insert('tbl_kategori', $dataInput);
    redirect('admin');
  }

  public function edit_action()
  {
    $id = $this->input->post('id');
    $categoryName = $this->input->post('category');
    $dataUpdate = array('category_name' => $categoryName);
    $this->M_podcast->update('tbl_kategori', $dataUpdate, 'idKat', $id);
    redirect('admin');
  }

  public function delete_category($id)
  {
    $this->M_podcast->delete('tbl_kategori', 'idKat', $id);
    redirect('admin');
  }

  public function change_status($id)
  {
    $dataWhere = array('idUser' => $id);
    $result = $this->M_podcast->get_by_id('tbl_user', $dataWhere)->row_object();
    $status = $result->is_active;
    if ($status == "Y") {
      $dataUpdate = array('is_active' => "N");
    } else {
      $dataUpdate = array('is_active' => "Y");
    }
    $this->M_podcast->update('tbl_user', $dataUpdate, 'idUser', $id);
    redirect('admin/member');
  }

  public function delete_user($id)
  {
    $this->M_podcast->delete('tbl_user', 'idUser', $id);
    redirect('admin/member');
  }

  public function logout()
  {
    $this->session->sess_destroy();
    redirect('admin_login');
  }
}
