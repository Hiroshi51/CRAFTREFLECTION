<?php 
if(!empty($_POST)){
    //Execute Registering
    $prepare = $dbh->prepare('INSERT INTO craft_movie SET title=?, tube_link=?, detail=?, created=?, category=?, ready=?');
    $prepare->bindValue(1,$_SESSION['craft']['title'],PDO::PARAM_STR);
    $prepare->bindValue(2,$_SESSION['craft']['tube_link'],PDO::PARAM_STR);
    $prepare->bindValue(3,$_SESSION['craft']['detail'],PDO::PARAM_STR);
    $prepare->bindValue(4,$_SESSION['craft']['created'],PDO::PARAM_STR);
    $prepare->bindValue(5,$_SESSION['craft']['category'],PDO::PARAM_STR);
    $prepare->bindValue(6,$_SESSION['craft']['ready'],PDO::PARAM_STR);
    $prepare->execute();
    unset($_SESSION['craft']);
    header('Location: le-admin-frame.php?page=le-has-registered');
    exit();
}
?>