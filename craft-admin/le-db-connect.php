<?php
try{
	$dbh = new PDO(
		'mysql:host=localhost; dbname=craft_main; charset=utf8',
		'root',
		'root',
		array(
			//throw error mode ON
			PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION,
			//Emulater OFF
			PDO::ATTR_EMULATE_PREPARES => false,
		)
	); 

}catch(PDOException $e){
	$error = $e->getMessage();
}
//mysqli ver
//$db = mysqli_connect('localhost','root','root','craft_main') or die(mysqli_connect_error());
//mysqli_set_charset($db,'utf8');
?>
