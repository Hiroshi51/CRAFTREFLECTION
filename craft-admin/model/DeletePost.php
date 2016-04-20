<?php

class DeletePost
{
    private $db;
    private $sql;
    private $recordSet;
    
    //Set SQL syntax
    public function __construct($db)
    {
        $this->db = $db;
        
    }

    //Show all list 
    public function deletePostById($id)
    {    
        
        $this->sql = sprintf('DELETE FROM craft_movie WHERE id =%d',$id);
        $ret = mysqli_query($this->db,$this->sql) or die(mysqli_error($this->db));
        return $ret;
    }
}

?>