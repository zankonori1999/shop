<?php 
    class catagory{
        public function __construct()
        {
            global $db;
            $this->db = $db;
        }

        public function procat_list($id)
        {
            $query = $this->db->prepare("SELECT * FROM procat_tbl WHERE chid = :id");
            $query->bindParam('id' , $id , PDO::PARAM_INT);
            $query->execute();

            $res = $query->fetchAll(PDO::FETCH_OBJ);
            return $res;
        }
    }
?>