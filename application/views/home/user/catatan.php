$this->form_validation->set_rules('username', 'Username', 'required|trim');
$this->form_validation->set_rules('password', 'Password', 'required|trim|valid_email');

if ($this->form_validation->run() == FALSE) {
$this->login();
$this->session->set_flashdata('error');
} else {
echo 'berhasil';
}

<small class="text-danger"><?php echo form_error('username'); ?></small>