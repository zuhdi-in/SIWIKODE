<?php
class Testimoni extends CI_Controller {
    public function index() {
        $this->load->model('testimoni_model', 'testimoni');
        $data['list_testimoni'] = $this->testimoni->getAll();

            // kirim ke view
            $this->load->view('layouts/header');
            $this->load->view('testimoni/index', $data);
            $this->load->view('layouts/footer');
    }
    public function create() {
            // kirim ke view
            $this->load->view('layouts/header');
            $this->load->view('testimoni/form');
            $this->load->view('layouts/footer');
    }
    /*
    public function jeniswisata(){
        $this->load->model('Jeniswisata_model');
        // memanggil model
        $list_jenis = $this->Jeniswisata_model->getAll();
        $data['list_jenis'] = $list_jenis;
        $this->load->view('layouts/header');
        $this->load->view('wisata/form', $data);
        $this->load->view('layouts/footer');
    }*/
    public function save(){
        $this->load->model('testimoni_model', 'testimoni');
        $_id_login = $this->input->post('id_login');
        $_email = $this->input->post('email');
        $_wisata_id = $this->input->post('wisata_id');
        $_profesi_id = $this->input->post('profesi_id');
        $_rating = $this->input->post('rating');
        $_komentar = $this->input->post('komentar');
        $_idedit = $this->input->post('idedit');
    
        $data_testimoni['id_login']=$_id_login;//?2
        $data_testimoni['email']=$_email;
        $data_testimoni['wisata_id']=$_wisata_id;
        $data_testimoni['profesi_id']=$_profesi_id;
        $data_testimoni['rating']=$_rating;
        $data_testimoni['komentar']=$_komentar;
        
        if(!empty($_idedit)){// update
            $data_testimoni['id']=$_idedit;//?3
            $this->testimoni->update($data_testimoni);
        }else{//data baru
            $this->testimoni->simpan($data_testimoni);
        }
        redirect('testimoni','refresh');
        /*
        $data['list_dosen'] = $this->dosen->getAll();
            // kirim ke view
            $this->load->view('layouts/header');
            $this->load->view('dosen/index', $data);
            $this->load->view('layouts/footer'); */
    }
    public function edit($id){
        $this->load->model('testimoni_model', 'testimoni');
        $obj_testimoni = $this->testimoni->findById($id);
        $data['objtestimoni']=$obj_testimoni;
            // kirim ke view
            $this->load->view('layouts/header');
            $this->load->view('testimoni/edit', $data);
            $this->load->view('layouts/footer');
    }
    public function delete($id){
        $this->load->model('testimoni_model', 'testimoni');
        $data_testimoni['id']=$id;
        $this->testimoni->delete($data_testimoni);
        redirect('testimoni','refresh');
    }
}
?>