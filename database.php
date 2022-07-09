<?php
class Database{
    private $db;
    public function __construct($user,$pass,$dbname){
        $this->db=new PDO("mysql:host=localhost;dbname=$dbname",$user,$pass);
        if($this->db){
            echo 'Connnection Successfull';

        }
        else{
            echo 'Connection Failed';
        }
    }
    public function showalldata(){
 return $this->db->query('SELECT * FROM students');
 
    }
    public function signincheck($user,$pass){
        $sql = "SELECT \'uid\' FROM users WHERE username=\'$user\' AND password=\'$pass\'";
        $st=$this->db->query($sql);
        if($st->rowCount()>0){
            $row=$st->fetch();
            return $row[0];
           
        }
        else{
            return false;
        }
    }
    function  signUp($user,$pass){
      try{
        $sql="INSERT INTO `users` (`uid`, `username`, `password`) VALUES (NULL, ?, ?);";
        $st=$this->db->prepare($sql);
        $res=$st->execute(array($user,$pass));
        print_r($res);
      }
      catch(Exception $e){
        header('location:show_student.php?e='.$e->getCode());
      }
    }
}