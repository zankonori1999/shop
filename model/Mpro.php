<?php
    class ProShow
    {
        public function __construct()
        {
            global $db;
            $this->db = $db;
        }

        public function show_pro($id)
        {
            $query = $this->db->prepare("SELECT * FROM pro_tbl WHERE id = :id");
            $query->bindParam('id' , $id);

            $query->execute();
            $res = $query->fetch(PDO::FETCH_ASSOC);
            return $res;
        }

        public function near($catID)
        {
            $query = $this->db->prepare("SELECT * FROM pro_tbl WHERE catID = :catID");
            $query->bindParam('catID' , $catID);
            $query->execute();

            $res = $query->fetchAll(PDO::FETCH_OBJ);

            return $res;
        }

        public function pro_list()
        {
            $query = $this->db->prepare("SELECT * FROM pro_tbl");
            $query->execute();

            $res = $query->fetchAll(PDO::FETCH_OBJ);
            return $res;
        }


        public function procats($id)
        {
            $query = $this->db->prepare("SELECT * FROM procat_tbl WHERE chid = :id ");
            $query->bindParam('id' , $id);
            // echo '<pre>';
            // var_dump($query);
            // echo '/<pre>';
            // die;
            $query->execute();
            
            $res = $query->fetchAll(PDO::FETCH_OBJ);
            return $res;
        }

        public function pro_select($id)
        {
            $query = $this->db->prepare("SELECT * FROM procat_tbl WHERE id = :id");
            $query->bindParam('id' , $id);
            $query->execute();

            $res = $query->fetch(PDO::FETCH_ASSOC);
            return $res;
        }
    }
?>