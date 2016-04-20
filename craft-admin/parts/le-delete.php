<?php
include ('model/GetCraftPost.php');
$deleteId = $_REQUEST['id'];
$getPost = new GetCraftPost($db);
$deleteItemRecord = $getPost->getPostById($deleteId);
$deleteItemData = mysqli_fetch_assoc($deleteItemRecord);
?>