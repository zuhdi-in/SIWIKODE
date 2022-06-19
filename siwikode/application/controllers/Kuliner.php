<?php
class Kuliner extends CI_Controller {
    public function index() {
        $this->load->model('kuliner_model', 'kuliner');
        $data['list_kuliner'] = $this->kuliner->getAll();
            // kirim ke view
            $this->load->view('layouts/header');
            $this->load->view('kuliner/index', $data);
            $this->load->view('layouts/footer');
    }
    public function create() {
            // kirim ke view
            $this->load->view('layouts/header');
            $this->load->view('kuliner/form');
            $this->load->view('layouts/footer');
    }
    public function save(){
        $this->load->model('kuliner_model', 'kuliner');
        $_nama = $this->input->post('nama_jeniskuliner');
        $_idedit = $this->input->post('idedit');

    
        $data_kuliner['nama_jeniskuliner']=$_nama;//?2
    
        if(!empty($_idedit)){// update
            $data_kuliner['id']=$_idedit;//?3
            $this->kuliner->update($data_kuliner);
        }else{//data baru
            $this->kuliner->simpan($data_kuliner);
        }
        redirect('kuliner','refresh');
        /*
        $data['list_dosen'] = $this->dosen->getAll();
            // kirim ke view
            $this->load->view('layouts/header');
            $this->load->view('dosen/index', $data);
            $this->load->view('layouts/footer'); */
    }
    public function edit($id){
        $this->load->model('kuliner_model', 'kuliner');
        $obj_kuliner = $this->kuliner->findById($id);
        $data['objkuliner']=$obj_kuliner;
            // kirim ke view
            $this->load->view('layouts/header');
            $this->load->view('kuliner/edit', $data);
            $this->load->view('layouts/footer');
    }
    public function delete($id){
        $this->load->model('kuliner_model','kuliner');
        $data_kuliner['id']=$id;
        $this->kuliner->delete($data_kuliner);
        redirect('kuliner','refresh');
    }
}
?>