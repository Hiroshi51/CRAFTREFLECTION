<?php
class PageProp
{
    private $siteDbh;
    private $prepare;
    private $error;
    private $data;

    //Set SQL syntax
    public function __construct()
    {
        try{
            $this->$siteDbh = new PDO(
                'mysql:host=localhost; dbname=craft_main; charset=utf8',
                'root',
                'root',
                array(
                //throw error mode ON
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                //Emulater OFF
                PDO::ATTR_EMULATE_PREPARES => false,
                )
            ); 

        }catch(PDOException $e){
            $error = $e->getMessage();
        }

    }

    //Show all list 
    public function fetchPageProp()
    {    
		try
		{
		    $this->prepare = $this->$siteDbh->prepare('SELECT * FROM craft_site');
		    $this->prepare->execute();
		    $this->data = $this->prepare->fetch(PDO::FETCH_ASSOC)); 
		}
		catch(PDOException $e)
		{
		    $this->error = $e->getMessage(); 
        }
        return $this->data['site_url'];
    }
}
?>
