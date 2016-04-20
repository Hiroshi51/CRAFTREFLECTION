<?php

class GetCraftPost
{
    private $db;
    private $sql;
    private $recordSet;
    
    //Set SQL syntax
    public function __construct($db)
    {
        $this->db = $db;
    }
    public function getPostById($id)
    {
        $this->sql = sprintf('SELECT * FROM craft_movie WHERE id=%d',$id);
        $this->recordSet = mysqli_query($this->db,$this->sql) or die(mysqli_error($this->db));
        return $this->recordSet;
    }
}

?>