<?php
class Regis extends CI_Controller {
    public function index() {
        $this->load->model('regismodel', 'regis');
        $data['list_regis'] = $this->regis->getAll();
            // kirim ke view
            $this->load->view('regis/index', $data);
    }
    public function create() {
            // kirim ke view
            $this->load->view('regis/form');
    }
    public function save(){
        $this->load->model('regismodel', 'regis');
        $_nama = $this->input->post('nama_login');
        $_username = $this->input->post('username');
        $_password = $this->input->post('password');
        $_level = $this->input->post('level');
        $_idedit = $this->input->post('idedit');
    
        $data_regis['nama_login']=$_nama;//?2
        $data_regis['username']=$_username;//?2
        $data_regis['password']=$_password;//?2
        $data_regis['level']=$_level;//?2
    
        if(!empty($_idedit)){// update
            $data_regis['id']=$_idedit;//?3
            $this->regis->update($data_regis);
        }else{//data baru
            $this->regis->simpan($data_regis);
        }
        redirect('regis','refresh');
        /*
        $data['list_dosen'] = $this->dosen->getAll();
            // kirim ke view
            $this->load->view('layouts/header');
            $this->load->view('dosen/index', $data);
            $this->load->view('layouts/footer'); */
    }
    public function edit($id){
        $this->load->model('regismodel', 'regis');
        $obj_regis = $this->regis->findById($id);
        $data['objregis']=$obj_regis;
            // kirim ke view
            $this->load->view('regis/edit', $data);
    }
    public function delete($id){
        $this->load->model('regismodel','regis');
        $data_regis['id']=$id;
        $this->regis->delete($data_regis);
        redirect('regis','refresh');
    }
}

?>