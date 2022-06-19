<?php
class Wisata extends CI_Controller {
    public function index() {
        $this->load->model('wisata_model', 'wisata');
        $data['list_wisata'] = $this->wisata->getAll();
            // kirim ke view
            $this->load->view('layouts/header');
            $this->load->view('wisata/index', $data);
            $this->load->view('layouts/footer');
    }
    public function create() {
            // kirim ke view
            $this->load->view('layouts/header');
            $this->load->view('wisata/form');
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
        $this->load->model('wisata_model', 'wisata');
        $_namawisata = $this->input->post('nama_wisata');
        $_deskripsi = $this->input->post('deskripsi');
        $_jenis_wisata_id = $this->input->post('jenis_wisata_id');
        $_fasilitas = $this->input->post('fasilitas');
        $_bintang = $this->input->post('bintang');
        $_kontak = $this->input->post('kontak');
        $_alamat = $this->input->post('alamat');
        $_latlong = $this->input->post('latlong');
        $_email = $this->input->post('email');
        $_web = $this->input->post('web');
        $_jenis_kuliner_id = $this->input->post('jenis_kuliner_id');
        $_id_penanggung_jawab = $this->input->post('id_penanggung_jawab');
        $_idedit = $this->input->post('idedit');
    
        $data_wisata['nama_wisata']=$_namawisata;//?2
        $data_wisata['deskripsi']=$_deskripsi;
        $data_wisata['jenis_wisata_id']=$_jenis_wisata_id;
        $data_wisata['fasilitas']=$_fasilitas;
        $data_wisata['bintang']=$_bintang;
        $data_wisata['kontak']=$_kontak;
        $data_wisata['alamat']=$_alamat;
        $data_wisata['latlong']=$_latlong;
        $data_wisata['email']=$_email;
        $data_wisata['web']=$_web;
        $data_wisata['jenis_kuliner_id']=$_jenis_kuliner_id;
        $data_wisata['id_penanggung_jawab']=$_id_penanggung_jawab;

        if(!empty($_idedit)){// update
            $data_wisata['id']=$_idedit;//?3
            $this->wisata->update($data_wisata);
        }else{//data baru
            $this->wisata->simpan($data_wisata);
        }
        redirect('wisata','refresh');
        /*
        $data['list_dosen'] = $this->dosen->getAll();
            // kirim ke view
            $this->load->view('layouts/header');
            $this->load->view('dosen/index', $data);
            $this->load->view('layouts/footer'); */
    }
    public function edit($id){
        $this->load->model('wisata_model', 'wisata');
        $obj_wisata = $this->wisata->findById($id);
        $data['objwisata']=$obj_wisata;
            // kirim ke view
            $this->load->view('layouts/header');
            $this->load->view('wisata/edit', $data);
            $this->load->view('layouts/footer');
    }
    public function delete($id){
        $this->load->model('wisata_model','wisata');
        $data_wisata['id']=$id;
        $this->wisata->delete($data_wisata);
        redirect('wisata','refresh');
    }
    public function view($id){
        $this->load->model('wisata_model', 'wisata');
        $obj_wisata = $this->wisata->findById($id);
        $data['objwisata']=$obj_wisata;
        $data['error']='';
            // kirim ke view
            $this->load->view('layouts/header');
            $this->load->view('wisata/view', $data);
            $this->load->view('layouts/footer');
    }
    public function upload(){
        $_idwisata=$this->input->post("idwisata");
        $this->load->model('wisata_model', 'wisata');
        $obj_wisata = $this->wisata->findById($_idwisata);
        $data['objwisata']=$obj_wisata;

        $config [ 'upload_path' ]='./uploads/photos' ; 
        $config [ 'allowed_types' ]='gif|jpg|png' ; 
        $config [ 'max_size' ]=2894; 
        $config [ 'max_width' ]=2894; 
        $config [ 'max_height' ]=2894;
        $config [ 'file_name' ]=$obj_wisata->id;

        $this->load->library('upload',$config);

        if (!$this->upload->do_upload('foto')) 
        { 
                $data['error'] = $this->upload->display_errors();
                //$this -> load -> view ('upload_form' ,  $error ); 
        } 
        else 
        {
                $data['error']='data sukses';
                $data['upload_data'] = $this->upload->data();
                //$this -> load -> view ( 'upload_success' ,  $data ); 
        }
            // kirim ke view
            $this->load->view('layouts/header');
            $this->load->view('wisata/view', $data);
            $this->load->view('layouts/footer');
    }
}
?>