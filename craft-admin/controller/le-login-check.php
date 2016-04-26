<?php

require('controller/CheckLogin.php');

try{
	$adminDbh = new PDO(
		'mysql:host=localhost; dbname=craft_admin; charset=utf8',
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

//mysqli ver
//$db = mysqli_connect('localhost','root','root','craft_main') or die(mysqli_connect_error());
//mysqli_set_charset($db,'utf8');
$loginItem = $_POST;
$checkLogin = new CheckLogin();
if($checkLogin->checkLoginItem($adminDbh,$loginItem) === true){
	header(Location: /*success page*/);
    exit();
}else{
	header(Location: /*failure page*/);
    exit();
}




?>
