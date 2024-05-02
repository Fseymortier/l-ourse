<?php

class User
{

    private $db;

    function __construct($conn)
    { 
        $this->db=$conn;
    }

    public function Password($user,$password)
    {
        try
        {
            $password_encypt = password_hash($password, PASSWORD_DEFAULT);
            $sql= "select ID, Nom, Email, Password,Compte FROM compte where Email = :email" ;
            $stmt =$this->db->prepare($sql);
            $stmt->bindParam(':user', $user);
            $stmt->bindParam(':mdp', $password);
            $stmt->execute();
            $resultat = $stmt->fetch();
            if($resultat)
            {
                
            }
        }
        catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    Public function GetUserbyUser($user)
    {
        $sql = "SELECT COUNT(*) AS count FROM compte WHERE user = :user";
        $stmt =$this->db->prepare($sql);
        $stmt->bindParam(':email', $user);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result['count'] > 0) {
            echo"'<div class=alert alert-success'>L'email est déjà utilisé.</div>'";
        }  else {
            return $result;
    }

}

public function InsertUser($user,$email,$password)
{
        try
        {
            $res=$this->GetUserbyUser($user);
            if($res['count']>0)
            {
                return false;
            }
            else{
                $sql="INSERT INTO `compte`(`USER`,`MDP`,`ADRCOMPTE`,`TYPCOMPTE`)VALUES(:user,:MDP,:email,NULL)";
                $stmt =$this->db->prepare($sql);
                $stmt->bindParam(':user', $user);
                $stmt->bindParam(':MDP', $password);
                $stmt->bindParam(':email', $email);
    
                $stmt->execute();
                return true;
            }
        }catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
}
 // funtion to return all users form rese bd
 public function getUsers()
 {
     try {
         $sql = "SELECT * FROM compte";
         $result = $this->db->query($sql);
         return $result;
     } catch (PDOException $e) {
         echo $e->getMessage();
         return false;
     }
 }
}
?>