<?php
   //proccess for pagination etc
   include ('model/ShowList.php');
   $showList = new ShowList();
   $listRecord = $showList->showAllListAction($dbh);
?>