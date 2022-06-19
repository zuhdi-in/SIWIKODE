<?php
class Jeniswisata_model extends CI_Model{
   // query database, ngambil data table dari phpmyadmin
   
public function getAll(){
   $query = $this->db->get('jenis_wisata');
   return $query;
}
public function getById($id){
   $query = $this->db->get_where('jenis_wisata', array('id' => $id));
   return $query;
}
public function simpan($data){
   $sql = "INSERT INTO jenis_wisata (nama_jeniswisata) VALUES (?)";
   
   $this->db->query($sql, $data);

   $insert_id = $this->db->insert_id();
   return $this->findById($insert_id);
}
   public function findById($id){
       $query = $this->db->get_where('jenis_wisata', array('id'=>$id));
       return $query->row();
   }
   public function update($data){
       // update table kuliner
       $sql = "UPDATE jenis_wisata SET nama_jeniswisata=? WHERE id=?";
       $this->db->query($sql, $data);
   }
   public function delete($data){
       // update table kuliner
       $sql = "DELETE FROM jenis_wisata WHERE id=?";
       $this->db->query($sql, $data);
   }
}
?>