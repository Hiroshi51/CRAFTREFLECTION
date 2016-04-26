<?php 
   $registerItem = $_POST;
   $confirmRegister = new confirmRegister();
   $confirmRegister->registerMember();
   heaer('Location: member-registered.php');
   exit();
?>

