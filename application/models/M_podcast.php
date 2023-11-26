<?php
defined('BASEPATH') or exit('No direct scripts access allowed');

class M_podcast extends CI_Model
{

  public function insert($tabel, $data)
  {
    $this->db->insert($tabel, $data);
  }

  public function user_check($u, $p)
  {
    $q = $this->db->get_where('tbl_user', array('username' => $u, 'password' => $p, 'is_active' => 'Y'));
    return $q;
  }

  public function get_all_data($tabel)
  {
    $q = $this->db->get($tabel);
    return $q;
  }

  public function get_by_id($tabel, $id)
  {
    return $this->db->get_where($tabel, $id);
  }

  public function update($tabel, $data, $pk, $id)
  {
    $this->db->where($pk, $id);
    $this->db->update($tabel, $data);
  }

  public function delete($tabel, $id, $val)
  {
    $this->db->delete($tabel, array($id => $val));
  }
}
