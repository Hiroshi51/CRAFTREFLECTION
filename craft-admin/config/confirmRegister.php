<?php 
   require('../le-db-connect.php');
   $registerItem = $_POST;
   $confirmRegister = new ConfirmRegister();
   $confirmRegister->registerMember($dbh,$registerItem);
   heaer('Location: member-registered.php');
   exit();
?>

