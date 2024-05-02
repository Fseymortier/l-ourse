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

    Public function GetUserbyEmail($email)
    {
        $sql = "SELECT COUNT(*) AS count FROM compte WHERE email = :email";
        $stmt =$this->db->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result['count'] > 0) {
            echo"'<div class=alert alert-success'>L'email est déjà utilisé.</div>'";
        }  else {
            return $result;
    }
}

public function InsertUser($nom,$email,$password,$compte)
{
        try
        {
            $res=$this->GetUserbyEmail($email);
            if($res['count']>0)
            {
                return false;
            }
            else{
                $sql="SELECT INTO `compte`(`Nom`,`Email`,`Compte`,`Password`)VALUES(:nom,:email:compte,:`password`)";
                $stmt =$this->db->prepare($sql);
                $stmt->bindParam(':nom', $nom);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':password', $password);
                $stmt->bindParam(':compte', $compte);
    
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