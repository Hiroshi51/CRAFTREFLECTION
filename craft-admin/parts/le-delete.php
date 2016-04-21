<?php
include ('model/GetCraftPost.php');
$deleteId = $_REQUEST['id'];
$getPost = new GetCraftPost();
$deleteItemRecord = $getPost->getPostById($dbh,$deleteId);
$deleteItemData = $deleteItemRecord -> fetch(PDO::FETCH_ASSOC);
?>