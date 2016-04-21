<?php
require('../le-db-connect.php');
include ('../model/DeletePost.php');
//sessiton start
session_start();
//dbconnection&functions

$doDeleteId = $_REQUEST['id'];
$doGetPost = new DeletePost();
$doDelete = $doGetPost->deletePostById($dbh,$doDeleteId);
if($doDelete === true){
header('Location: ../le-admin-frame.php?page=le-delete-success');
exit();
}
?>