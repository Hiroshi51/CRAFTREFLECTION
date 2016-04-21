<?php
include ('model/GetCraftPost.php');
 //check whetehr user click Send
    if(!empty($_POST)){
        $requireItem = array("name","tube-link","category","ready");
        $error = array(); 
        $notCompleted = false;
        foreach ($_POST as $key => $value){
            if($value == ""){
                $error[$key] = "blank";
                $notCompleted = true;
            }  
        }
        if($notCompleted != true){
            $_SESSION['craft'] = $_POST;
            header('location: le-admin-frame.php?page=le-checkUp-post');
            exit();
        }
    }
    //when rewrite mode(RewiteButton has been clicked in the check page)
    if($_REQUEST['action'] == 'rewrite'){
        $_POST = $_SESSION['craft'];
        $error['rewrite'] = true;
        
    }

$deleteId = $_REQUEST['id'];
$getPost = new GetCraftPost();
$deleteItemRecord = $getPost->getPostById($dbh,$deleteId);
$deleteItemData = $deleteItemRecord -> fetch(PDO::FETCH_ASSOC);

?>