<?php
   //proccess for pagination etc
   include ('model/ShowList.php');
   $showList = new ShowList($db);
   $listRecord = $showList->showAllListAction();
?>