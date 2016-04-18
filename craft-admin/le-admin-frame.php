<?php
    //sessiton start
    session_start();
    //dbconnection&functions
    require('le-db-connect.php');
    //loginCheck
    //assign query string
    $referenceUrl = $_REQUEST['page'];
    //When createpage
    if($referenceUrl == "le-create-post"){
    require('le-create.php');
    }
    //When checkpage
    if($referenceUrl == "le-check-post"){
    require('le-register.php');
    }
?>
<!doctype html>
<html>
    <head>
        <meta charset='utf-8' />
        <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible' />
        <meta content='width=device-width, initial-scale=1.0' name='viewport' />
    </head>
    <body>
       <?php require($referenceUrl.'.php'); ?>
    </body>    
</html>