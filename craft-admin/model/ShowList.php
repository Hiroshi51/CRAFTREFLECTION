<?php

class ShowList
{
    
    private $db;
    private $sql;
    private $recordSet;
    
    //Set SQL syntax
    public function __construct($db)
    {
        $this->db = $db;
        $this->sql = 'SELECT * FROM craft_movie ORDER BY id';
    }

    //Show all list 
    public function ShowAllListAction()
    {    
        $this->recordSet = mysqli_query($this->db,$this->sql) or die(mysqli_error($db));
        return $this->recordSet;
    }
}

?>