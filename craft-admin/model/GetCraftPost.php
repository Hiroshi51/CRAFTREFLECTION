<?php

class GetCraftPost
{
    private $prepare;
    
    //Set SQL syntax
    public function __construct()
    {
        
    }
    public function getPostById($dbh,$id)
    {
        try
        {
            $this->prepare = $dbh->prepare('SELECT * FROM craft_movie WHERE id=?');
            $this->prepare->bindValue(1,(int)$id,PDO::PARAM_INT);
            $this->prepare->execute();

        }
        catch(PDOException $e)
        {
            $error = $e->getMessage();   
            
        }

        return $this->prepare;
    }
}

?>