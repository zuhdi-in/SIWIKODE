<?php

class Jeniswisata extends CI_Controller {
    public function index() {
        $this->load->model('jeniswisata_model', 'jeniswisata');
        $data['list_jeniswisata'] = $this->jeniswisata->getAll();
            // kirim ke view
            $this->load->view('layouts/header');
            $this->load->view('jeniswisata/index', $data);
            $this->load->view('layouts/footer');
    }
    public function create() {
        
            // kirim ke view
            $this->load->view('layouts/header');
            $this->load->view('jeniswisata/form');
            $this->load->view('layouts/footer');
    }
    public function save(){
        $this->load->model('jeniswisata_model', 'jeniswisata');
        $_nama = $this->input->post('nama_jeniswisata');
        $_idedit = $this->input->post('idedit');
    
        $data_jeniswisata['nama']=$_nama;//?2
    
        if(!empty($_idedit)){// update
            $data_jeniswisata['id']=$_idedit;//?3
            $this->jeniswisata->update($data_jeniswisata);
        }else{//data baru
            $this->jeniswisata->simpan($data_jeniswisata);
        }
        redirect('jeniswisata','refresh');
        /*
        $data['list_dosen'] = $this->dosen->getAll();
            // kirim ke view
            $this->load->view('layouts/header');
            $this->load->view('dosen/index', $data);
            $this->load->view('layouts/footer'); */
    }
    public function edit($id){
        $this->load->model('jeniswisata_model', 'jeniswisata');
        $obj_jeniswisata = $this->jeniswisata->findById($id);
        $data['objjeniswisata']=$obj_jeniswisata;
            // kirim ke view
            $this->load->view('layouts/header');
            $this->load->view('jeniswisata/edit', $data);
            $this->load->view('layouts/footer');
    }
    public function delete($id){
        $this->load->model('jeniswisata_model','jeniswisata');
        $data_jeniswisata['id']=$id;
        $this->jeniswisata->delete($data_jeniswisata);
        redirect('jeniswisata','refresh');
    }
}

?>