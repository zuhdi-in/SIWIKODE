<?php 
class Wisata_model extends CI_Model{
    // membuat property
    public function getAll(){
        // query database, ngambil data table dari phpmyadmin
        $query = $this->db->get('wisata');
        return $query;
    }
    public function getById($id){
        $query = $this->db->get_where('wisata', array('id' => $id));
        return $query;
    }
    public function simpan($data){
        $sql = "INSERT INTO wisata (nama_wisata,deskripsi,jenis_wisata_id,fasilitas,bintang,kontak,alamat,latlong,email,web,jenis_kuliner_id,id_penanggung_jawab) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
        
        $this->db->query($sql, $data);

        $insert_id = $this->db->insert_id();
        return $this->findById($insert_id);
    }
        public function findById($id){
            $query = $this->db->get_where('wisata', array('id'=>$id));
            return $query->row();
        }
        public function update($data){
            // update table kuliner
            $sql = "UPDATE wisata SET nama_wisata=?,deskripsi=?,jenis_wisata_id=?,fasilitas=?,bintang=?,kontak=?,alamat=?,latlong=?,email=?,web=?,jenis_kuliner_id=?,id_penanggung_jawab=? WHERE id=?";
            $this->db->query($sql, $data);
        }
        public function delete($data){
            // update table kuliner
            $sql = "DELETE FROM wisata WHERE id=?";
            $this->db->query($sql, $data);
        }
}
?>