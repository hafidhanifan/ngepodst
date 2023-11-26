<?php
defined('BASEPATH') or exit('No direct scripts access allowed');

class Podcast extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('M_podcast');
  }

  public function index()
  {
    // if (empty($this->session->userdata('username')))
    //   redirect('home/login'); {

    $id = $this->session->userdata('idUser');
    $datawhere = array('idUser' => $id);
    $data['podcast'] = $this->M_podcast->get_by_id('tbl_podcast', $datawhere)->result();  //digunakan supaya setiap ganti akun, channel bisa berbeda
    // }
    // $data['podcast'] = $this->M_podcast->get_all_data('tbl_podcast')->result();





    // ini buat menampilkan nama di pojok
    $id = $this->session->userdata('idUser');
    $datawhere = array('idUser' => $id);
    $data_user['username'] = $this->M_podcast->get_by_id('tbl_user', $datawhere)->row();


    $this->load->view('home/layout/header');
    $this->load->view('home/layout/navigation', $data_user);
    $this->load->view('home/layout/sidebar');
    $this->load->view('home/layout/recomendation');
    $this->load->view('home/user/channel', $data);
    $this->load->view('home/layout/footer');
  }

  public function add_podcast()
  {
    $data['category'] = $this->M_podcast->get_all_data('tbl_kategori')->result();
    $id = $this->session->userdata('idUser');
    $datawhere = array('idUser' => $id);
    $data['username'] = $this->M_podcast->get_by_id('tbl_user', $datawhere)->row();
    $this->load->view('home/layout/header');
    $this->load->view('home/layout/navigation', $data);
    $this->load->view('home/layout/sidebar');
    $this->load->view('home/channel/add_podcast', $data);
    $this->load->view('home/layout/footer');
  }

  public function add_action()
  {

    $id = $this->session->userdata('idUser');
    $idPodcast = $this->input->post('idPodcast');
    $idKat = $this->input->post('idKat');
    $title = $this->input->post('title');
    $description = $this->input->post('description');
    $audio = $_FILES['audio']['name'];

    if ($audio = "") {
    } else {
      $config['upload_path'] = './uploads';
      $config['allowed_types'] = 'mp3';

      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('audio')) {
        echo "Gambar gagal";
      } else {
        $audio = $this->upload->data('file_name');
      }
    }
    
    $data_insert = array(
      'idUser' => $id,
      'idPodcast' => $idPodcast,
      'idKat' => $idKat,
      'audio' => $audio,
      'title' => $title,
      'deskripsi' => $description
    );
  
    $this->M_podcast->insert('tbl_podcast', $data_insert);
    redirect('podcast');
}

  public function edit_podcast($idPodcast)
  {
    $id = $this->session->userdata('idUser');
    $datawhere = array('idUser' => $id);
    $data_user['username'] = $this->M_podcast->get_by_id('tbl_user', $datawhere)->row();

    $data['podcast'] = $this->M_podcast->get_by_id('tbl_podcast', array('idPodcast' => $idPodcast))->row();
    $data['category'] = $this->M_podcast->get_all_data('tbl_kategori')->result();

    $this->load->view('home/layout/header');
    $this->load->view('home/layout/navigation', $data_user);
    $this->load->view('home/layout/sidebar');
    $this->load->view('home/channel/edit_podcast', $data);
    $this->load->view('home/layout/footer');
  }

  public function edit_action()
  {
    $data['podcast'] = $this->M_podcast->get_all_data('tbl_podcast')->result();
    $data['category'] = $this->M_podcast->get_all_data('tbl_kategori')->result();

    $id = $this->input->post('idUser');
    $idPodcast = $this->input->post('idPodcast');
    $idKat = $this->input->post('idKat');
    $title = $this->input->post('title');
    $description = $this->input->post('description');
    $audio = $_FILES['audio']['name'];
    
    if ($audio = "") {
    }else {
      $config['upload_path'] = './uploads';
      $config['allowed_types'] = 'mp3';

      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('audio')) {
        echo "Gambar gagal";
      } else {
        $audio = $this->upload->data('file_name');
      }
    }

    $data_update = array(
      'idUser' => $id,
      'idPodcast' => $idPodcast,
      'idKat' => $idKat,
      'audio' => $audio,
      'title' => $title,
      'deskripsi' => $description
    );

    $this->M_podcast->update('tbl_podcast', $data_update, 'idPodcast', $idPodcast);
    redirect('podcast');
  }



  public function delete($id)
  {
    $this->M_podcast->delete('tbl_podcast', 'idPodcast', $id);
    redirect('podcast');
  }
}
