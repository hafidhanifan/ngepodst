<?php
defined('BASEPATH') or exit('No direct scripts access allowed');

class Landing extends CI_Controller
{
  public function index()
  {
    $this->load->view('landing/header');
    $this->load->view('landing/landing_body');
    $this->load->view('landing/footer');
  }
}
