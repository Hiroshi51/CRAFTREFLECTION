<?php
    //sessiton start
    session_start();
    //dbconnection&functions
    require('le-db-connect.php');
    //loginCheck


    require ('functions.php');
    //assign query string
    $referenceUrl = $_REQUEST['page'];

    switch($referenceUrl)
    {
        case "le-create-post":
        require('parts/le-create.php');
        break;

        case "le-check-post":
        require('parts/le-register.php');
        break;

        case "le-list-post":
        require('parts/le-list.php');
        break;

        case "le-delete-post":
        require('parts/le-delete.php');
        break;
     }   
     //Let the broweser know that HTML afterward is written by URF-8
     header('Content-Type: text/html; charset=utf-8');
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
