<?php
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
            header('location:le-admin-frame.php?page=le-check-post');
            exit();
        }
    }
    //when rewrite mode(RewiteButton has been clicked in the check page)
    if($_REQUEST['action'] == 'rewrite'){
        $_POST = $_SESSION['craft'];
        $error['rewrite'] = true;
        
    }
?>