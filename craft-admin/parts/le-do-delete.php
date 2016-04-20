<?php
include ('../model/DeletePost.php');
//sessiton start
session_start();
//dbconnection&functions
require('../le-db-connect.php');
$doDeleteId = $_REQUEST['id'];
$doGetPost = new DeletePost($db);
$doDelete = $doGetPost->deletePostById($doDeleteId);
if($doDelete === true){
header('Location: ../le-admin-frame.php?page=le-delete-success');
exit();
}
?>