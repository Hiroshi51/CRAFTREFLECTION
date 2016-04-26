<?php 
class ConfirmRegister
{
	private $siteDbh;
	private $prepare;
	private $error;
	private $data;

	public function registerMember($dbh,$item)
	{ 
		try
		{
			$this->prepare = $dbh->prepare('INSERT INTO craft_member(id,nick_name,pass_word) VALUES (?,?,?)');
			$this->prepare->bindValue(1,(int)$item['id'],PDO::PARAM_INT);
			$this->prepare->bindValue(2,$item['nick_name'],PDO::PARAM_STR);
			$this->prepare->bindValue(3,$item['pass_word'],PDO::PARAM_STR);
			$this->prepare->execute();
		}
	    catch(PDOException $e)
		{
            $this->$error = $e->getMessage();
        }
	}
}  
?>

