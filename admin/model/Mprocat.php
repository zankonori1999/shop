<?php 
    class Procat{
        public function __construct()
        {
            global $db ;
            $this->db = $db;
        }

        public function procat_list()
        {
            $query = $this->db->prepare("SELECT * FROM procat_tbl");
            $query->execute();

            $res = $query->fetchAll(PDO::FETCH_OBJ);
            return $res;
        }

        public function procat_main_list()
        {
            $query = $this->db->prepare("SELECT * FROM procat_tbl WHERE chid = 0");
            $query->execute();
            $res = $query->fetchAll(PDO::FETCH_OBJ);

            return $res;
        }

        public function procat_add($data)
        {
            $query = $this->db->prepare("INSERT INTO procat_tbl(title , chid) VALUES (:title , :chid)");
            $query->bindParam('title' , $data['title']);
            $query->bindParam('chid' , $data['chid']);
            $query->execute();

        }

        public function procat_delete($id)
        {
            $query = $this->db->prepare("DELETE FROM procat_tbl WHERE id = :id");
            $query->bindParam('id' , $id);
            $query->execute();
        }

        public function procat_edit_show($id)
        {
            $qurey = $this->db->prepare("SELECT * FROM procat_tbl WHERE id = :id");
            $qurey->bindParam('id' , $id);
            $qurey->execute();

            $res = $qurey->fetch(PDO::FETCH_ASSOC);
            return $res;
        }

        public function procat_edit($data , $id)
        {
    
            $query = $this->db->prepare("UPDATE procat_tbl SET title = :title , chid = :chid WHERE id = :id");
            $query->bindParam('title' , $data['title']);
            $query->bindParam('chid' , $data['chid']);
            $query->bindParam('id' , $id , PDO::PARAM_INT);
            $query->execute();
        }
    }
?>