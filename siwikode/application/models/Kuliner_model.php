<?php 
class Kuliner_model extends CI_Model{
    // membuat property
    public function getAll(){
        // query database, ngambil data table dari phpmyadmin
        $query = $this->db->get('jenis_kuliner');
        return $query;
    }
    public function getById($id){
        $query = $this->db->get_where('jenis_kuliner', array('id' => $id));
        return $query;
    }
    public function simpan($data){
        $sql = "INSERT INTO jenis_kuliner (nama_jeniskuliner) VALUES (?)";
        
        $this->db->query($sql, $data);

        $insert_id = $this->db->insert_id();
        return $this->findById($insert_id);
    }
        public function findById($id){
            $query = $this->db->get_where('jenis_kuliner', array('id'=>$id));
            return $query->row();
        }
        public function update($data){
            // update table kuliner
            $sql = "UPDATE jenis_kuliner SET nama_jeniskuliner=? WHERE id=?";
            $this->db->query($sql, $data);
        }
        public function delete($data){
            // update table kuliner
            $sql = "DELETE FROM jenis_kuliner WHERE id=?";
            $this->db->query($sql, $data);
        }
}
?>