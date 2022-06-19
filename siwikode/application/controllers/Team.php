<?php
class Team extends CI_Controller {
    public function index() {
            // kirim ke view
            $this->load->view('layouts/header');
            $this->load->view('team/index');
            $this->load->view('layouts/footer');
    }
}
?>