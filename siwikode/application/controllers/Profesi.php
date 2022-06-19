<?php

class Profesi extends CI_Controller {
    public function index() {
        $this->load->model('profesi_model', 'profesi');
        $data['list_profesi'] = $this->profesi->getAll();
            // kirim ke view
            $this->load->view('layouts/header');
            $this->load->view('profesi/index', $data);
            $this->load->view('layouts/footer');
    }
    public function create() {
            // kirim ke view
            $this->load->view('layouts/header');
            $this->load->view('profesi/form');
            $this->load->view('layouts/footer');
    }
    public function save(){
        $this->load->model('profesi_model', 'profesi');
        $_nama = $this->input->post('nama_profesi');
        $_idedit = $this->input->post('idedit');
    
        $data_profesi['nama_profesi']=$_nama;//?2
    
        if(!empty($_idedit)){// update
            $data_profesi['id']=$_idedit;//?3
            $this->profesi->update($data_profesi);
        }else{//data baru
            $this->profesi->simpan($data_profesi);
        }
        redirect('profesi','refresh');
        /*
        $data['list_dosen'] = $this->dosen->getAll();
            // kirim ke view
            $this->load->view('layouts/header');
            $this->load->view('dosen/index', $data);
            $this->load->view('layouts/footer'); */
    }
    public function edit($id){
        $this->load->model('profesi_model', 'profesi');
        $obj_profesi = $this->profesi->findById($id);
        $data['objprofesi']=$obj_profesi;
            // kirim ke view
            $this->load->view('layouts/header');
            $this->load->view('profesi/edit', $data);
            $this->load->view('layouts/footer');
    }
    public function delete($id){
        $this->load->model('profesi_model','profesi');
        $data_profesi['id']=$id;
        $this->profesi->delete($data_profesi);
        redirect('profesi','refresh');
    }
}

?>