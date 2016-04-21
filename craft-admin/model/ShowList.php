<?php

class ShowList
{
    

    private $prepare;
    
    //Set SQL syntax
    public function __construct()
    {
        
    }

    //Show all list 
    public function ShowAllListAction($dbh)
    {    
        
        try
        {
            $this->prepare = $dbh->prepare('SELECT * FROM craft_movie ORDER BY id');
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
