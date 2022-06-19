<?php
class Regismodel extends CI_Model{
   // query database, ngambil data table dari phpmyadmin
   public function getAll(){
   $query = $this->db->get('login');
   return $query;
}
public function getById($id){
   $query = $this->db->get_where('login', array('id_login' => $id));
   return $query;
}
public function simpan($data){
   $sql = "INSERT INTO login (nama_login,username,password,level) VALUES (?,?,?,?)";
   
   $this->db->query($sql, $data);

   $insert_id = $this->db->insert_id();
   return $this->findById($insert_id);
}
   public function findById($id){
       $query = $this->db->get_where('login', array('id_login'=>$id));
       return $query->row();
   }
   public function update($data){
       // update table kuliner
       $sql = "UPDATE login SET nama_login=?,username=?,password=?,level=? WHERE id_login=?";
       $this->db->query($sql, $data);
   }
   public function delete($data){
       // update table kuliner
       $sql = "DELETE FROM login WHERE id_login=?";
       $this->db->query($sql, $data);
   }
}
?>