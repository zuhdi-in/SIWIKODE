<?php 
class Testimoni_model extends CI_Model{
    // membuat property
    public function getAll(){
        // query database, ngambil data table dari phpmyadmin
        $query = $this->db->get('view_testimoni');
        return $query;
    }
    public function getById($id){
        $query = $this->db->get_where('view_testimoni', array('id' => $id));
        return $query;
    }
    public function simpan($data){
        $sql = "INSERT INTO testimoni (id_login,email,wisata_id,profesi_id,rating,komentar) VALUES (?,?,?,?,?,?)";
        
        $this->db->query($sql, $data);

        $insert_id = $this->db->insert_id();
        return $this->findById($insert_id);
    }
        public function findById($id){
            $query = $this->db->get_where('testimoni', array('id'=>$id));
            return $query->row();
        }
        public function update($data){
            // update table kuliner
            $sql = "UPDATE testimoni SET id_login=?,email=?,wisata_id=?,profesi_id=?,rating=?,komentar=? WHERE id=?";
            $this->db->query($sql, $data);
        }
        public function delete($data){
            // update table kuliner
            $sql = "DELETE FROM testimoni WHERE id=?";
            $this->db->query($sql, $data);
        }
}
?>