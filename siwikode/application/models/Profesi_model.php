<?php
class Profesi_model extends CI_Model{
   // query database, ngambil data table dari phpmyadmin
   public function getAll(){
   $query = $this->db->get('profesi');
   return $query;
}
public function getById($id){
   $query = $this->db->get_where('profesi', array('id' => $id));
   return $query;
}
public function simpan($data){
   $sql = "INSERT INTO profesi (nama_profesi) VALUES (?)";
   
   $this->db->query($sql, $data);

   $insert_id = $this->db->insert_id();
   return $this->findById($insert_id);
}
   public function findById($id){
       $query = $this->db->get_where('profesi', array('id'=>$id));
       return $query->row();
   }
   public function update($data){
       // update table kuliner
       $sql = "UPDATE profesi SET nama_profesi=? WHERE id=?";
       $this->db->query($sql, $data);
   }
   public function delete($data){
       // update table kuliner
       $sql = "DELETE FROM profesi WHERE id=?";
       $this->db->query($sql, $data);
   }
}
?>