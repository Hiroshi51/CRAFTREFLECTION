<?php
class CheckLogin
{
    

    private $prepare;
    private $data;
    //Set SQL syntax
    public function __construct()
    {
        
    }

    //Show all list 
    public function checkLoginItem($dbh,$item)
    {    
		try
		{
		    $this->$prepare = $dbh->prepare('SELECT pass_word FROM craft_admin WHERE id=?');
		    $this->$prepare->bindValue(1,(int)$item['id'],PDO::PARAM_INT);
		    $this->$prepare->execute();
		    $this->data = $this->$prepare->fetch(PDO::FETCH_ASSOC)); 
		}
		catch(PDOException $e)
		{
		    $error = $e->getMessage(); 
        }
        if($item['pass_word'] === $this->$data['pass_word']){
        	session_start();
        	$_SESSION['nick_name'] = $this->$data['nick_name'];
        	return true;
        }else{
        	return false;
        }
    }
}
?>
