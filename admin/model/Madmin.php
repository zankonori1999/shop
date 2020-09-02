<?php 
// session_start();
    class Admin{
        public function __construct()
        {
            global $db;
            $this->db = $db;
        }

        public function login($data)
        {
            $query = $this->db->prepare("SELECT * FROM admins_tbl WHERE email = :email");
            $query->bindParam('email' , $data['email']);
            $query->execute();

            $row = $query->fetch(PDO::FETCH_ASSOC);

            if(isset($row))
            {
                if(sha1($data['password']) == $row['password'])
                {
                    $_SESSION['login'] = $row['name']." ".$row['lastname'];
                    header("Refresh:0; url=index.php");
                }else
                    header("index.php?E=wrong");
            }else
                header("index.php?E=wrong");
        }

        public function logout()
        {
            session_destroy();
        }
    }
?>