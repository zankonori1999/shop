<?php 
    class Basket
    {
        public function __construct()
        {
            global $db;
            $this->db = $db;
        }
        
        public function list($user_id)
        {
            $query = $this->db->prepare("SELECT * FROM basket WHERE user_id = :id");
            $query->bindParam('id' , $user_id);
            $query->execute();
            $res = $query->fetchAll(PDO::FETCH_OBJ);
            return $res;
        }

        public function select_pro($id)
        {
            $query = $this->db->prepare("SELECT * FROM pro_tbl WHERE id=:id");
            $query->bindParam('id' , $id);
            $query->execute();

            $res = $query->fetch(PDO::FETCH_ASSOC);
            return $res;
        }

        public function basket_add($user_id , $pro_id , $count)
        {
            //add if exists
            $sql = $this->db->prepare("SELECT * FROM basket WHERE user_id = :user");
            $sql->bindParam('user' , $user_id);
            $sql->execute();
            $res = $sql->fetchAll(PDO::FETCH_OBJ);
            // echo '<pre>';
            // var_dump($res);
            // echo '</pre>';
            // die;
            
            $flag = true;
            foreach($res as $val)
            {
                $c = $val->count;
                if ($val->procat_id == $pro_id)
                {
                    $c += $count;
                    $sql2 = $this->db->query("UPDATE basket SET count = '$c' WHERE id = '$val->id' ");
                    $flag = false;
                break;
                }
            }
            //insert section
            if ($flag)
            {
                $query = $this->db->prepare("INSERT INTO basket (user_id , procat_id , count ) VALUES (:user , :pro , :count)");
                $query->bindParam('user' , $user_id);
                $query->bindParam('pro' , $pro_id);
                $query->bindParam('count' , $count);

                $query->execute();
            }
        }
    }
?>