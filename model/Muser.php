<?php 
    class User{
        public function __construct()
        {
            global $db;
            $this->db= $db;
        }
        public function register($data)
        {
            $query = $this->db->prepare("INSERT INTO user_tbl (name , lastname , email , tel , fax , companyName , address , postcode , country , city , sesion , password , share , vc , status) VALUES (:name , :lastname , :email , :tel , :fax , :companyName , :address , :postcode , :country , :city , :session , :password , :share , :vc , '0')");
            $query->bindParam('name' , $data['name']);
            $query->bindParam('lastname' , $data['lastname']);
            $query->bindParam('email' , $data['email']);
            $query->bindParam('tel' , $data['tel']);
            $query->bindParam('fax' , $data['fax']);
            $query->bindParam('companyName' , $data['companyName']);
            $query->bindParam('address' , $data['address']);
            $query->bindParam('postcode' , $data['postcode']);
            $query->bindParam('country' , $data['country']);
            $query->bindParam('city' , $data['city']);
            $query->bindParam('session' , $data['session']);
            $data['password'] = sha1($data['password']);
            $query->bindParam('password' ,$data['password']);
            $query->bindParam('share' , $data['share']);
            $query->bindParam('vc' , $data['vc']);

            $query->execute();
        }

        public function login($data)
        {
            $query = $this->db->prepare("SELECT * FROM user_tbl WHERE email = :email");
            $query->bindParam('email' , $data['email']);
            $query->execute();

            $res = $query->fetch(PDO::FETCH_ASSOC);
            
            if($res['status'] == '1')
            {
                if(sha1($data['password']) == $res['password'])
                {
                    session_start();
                    $_SESSION['user_name'] = $res['name'];
                    $_SESSION['user_lastname'] = $res['lastname'];
                    $_SESSION['user_id'] = $res['id'];
                    header("location:index.php?c=index&a=index");
                }else
                header("location:index.php?c=user&a=login&E=wrong");
            }else
                header("location:index.php?c=user&a=login&E=status");
        }

        public function logout()
        {
            unset($_SESSION['user_name']);
            unset($_SESSION['user_lastname']);
            unset($_SESSION['user_id']);
        }
    }
?>