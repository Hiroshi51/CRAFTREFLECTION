<?php

class DeletePost
{

    private $prepare;
       
    //Set SQL syntax
    public function __construct()
    {
       
        
    }
    //Show all list 
    public function deletePostById($dbh,$id)
    {   
           
        try
        {
            $this->prepare = $dbh->prepare('DELETE FROM craft_movie WHERE id=?');
            $this->prepare->bindValue(1,(int)$id,PDO::PARAM_INT);
            $this->prepare->execute();

        }
        catch(PDOException $e)
        {
            $error = $e->getMessage();   
            echo $error;
        }
        return true;
    }
}

?>