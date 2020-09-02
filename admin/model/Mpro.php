<?php 
    class Pro{
        public function __construct()
        {
            global $db;
            $this->db = $db;
        }

        public function procat_list($id)
        {
            $query = $this->db->prepare("SELECT * FROM procat_tbl WHERE id != :id ");
            $query->bindParam('id' , $id);
            $query->execute();

            $res = $query->fetchAll(PDO::FETCH_OBJ);
            return $res;
        }

        private function img_add($file)
        {
            $name = $file['name'];
            $exp = explode("." , $name);
            $newname = rand().".".end($exp);

            $from = $file['tmp_name'];
            $to = "../public/uploader/".$name;

            move_uploaded_file($from , $to);
            $to =  substr($to , 3);
            return $to;
        }

        public function pro_add($data , $files)
        {
            foreach($files as $key=>$file)
            {
                $img [$key] = $this->img_add($file);
            }

            $query = "INSERT INTO pro_tbl (title , text , catID , count , price ";
            foreach ($img as $key=>$value)
            {
                $query = $query.", ".$key;
            }
            $query = $query.") VALUES ('$data[title]' , '$data[text]' , '$data[catID]' , '$data[count]' , '$data[price]'";
            foreach ($img as $key=>$value)
            {
                $query = $query.", '".$value."'";
            }
            $query = $query.")";
            // var_dump($query);die;
             $this->db->exec($query);
            //  $sql->bindParam('title' , $data['title']);
            //  $sql->bindParam('text' , $data['text']);
            //  $sql->bindParam('catID' , $data['catID']);
            //  $sql->bindParam('count' , $data['count']);
            //  $sql->bindParam('price' , $data['price']);
            //  foreach ($img as $key=>$value)
            // {
            //     $sql->bindParam('$key' , $value);
            // }
            // var_dump($sql);die;
            // $sql->execute();
        }

        public function pro_list()
        {
            $query = $this->db->prepare("SELECT * FROM pro_tbl");
            $query->execute();

            $res = $query->fetchAll(PDO::FETCH_OBJ);
            return $res;
        }

        public function pro_delete($id)
        {
            $query = $this->db->prepare("DELETE FROM pro_tbl WHERE id = :id");
            $query->bindParam('id' , $id);
            $query->execute();
        }

        public function pro_edit_show($id)
        {
            $query = $this->db->prepare("SELECT * FROM pro_tbl WHERE id = :id");
            $query->bindParam('id' , $id);
            $query->execute();

            $row =  $query->fetch(PDO::FETCH_ASSOC);
            return $row;
        }

        private function img_update($file , $past)
        {
            $name = $file['name'];
            $exp = explode("." , $name);

            if(count($exp) > 1){
                unlink($past);
                $newname = rand().".".end($exp);

                $from = $file['tmp_name'];
                $to = "../public/uploader/".$name;

                move_uploaded_file($from , $to);
                $to =  substr($to , 3 );
            }else{
                $to = $past;
            }
            return $to;
        }

        public function pro_edit($data , $files , $id)
        {
            $query = $this->db->prepare("SELECT * FROM pro_tbl WHERE id = :id");
            $query->bindParam('id' , $id);
            $query->execute();
            $res = $query->fetch(PDO::FETCH_ASSOC);
            foreach($files as $key=>$file)
            {
                $img [$key] = $this->img_update($file , $res[$key]);
            }
            $query = "UPDATE pro_tbl SET title = '$data[title]' , text = '$data[text]' , catID = '$data[catID]' , count = '$data[count]' , price = '$data[price]' ";

            foreach ($img as $key => $value) {
                $query = $query." , ".$key." = '".$value."'";
            }

            $query = $query."WHERE id = '$id'";
            $this->db->query($query);
        }
    }
?>