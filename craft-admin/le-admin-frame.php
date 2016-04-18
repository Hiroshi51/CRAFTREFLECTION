<?php
//sessiton start
//loginCheck
//assign query string
$referenceUrl = $_REQUEST['page'].'.php';
?>
<!doctype html>
<html>
    <head>
        <meta charset='utf-8' />
        <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible' />
        <meta content='width=device-width, initial-scale=1.0' name='viewport' />
    </head>
    <body>
       <?php require($referenceUrl); ?>
    </body>    
</html>    