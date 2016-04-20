<?php 
if(!empty($_POST)){
    //Execute Registering
    $sql = sprintf('INSERT INTO craft_movie SET title="%s", tube_link="%s", detail="%s", created="%s", category="%s", ready="%s"',
                  mysqli_real_escape_string($db, $_SESSION['craft']['title']),
                  mysqli_real_escape_string($db, $_SESSION['craft']['tube_link']),
                  mysqli_real_escape_string($db, $_SESSION['craft']['detail']),
                  mysqli_real_escape_string($db, $_SESSION['craft']['created']),
                  mysqli_real_escape_string($db, $_SESSION['craft']['category']),
                  mysqli_real_escape_string($db, $_SESSION['craft']['ready'])     
                  );
    mysqli_query($db, $sql) or die(mysqli_error($db));
    unset($_SESSION['craft']);
    header('Location: le-admin-frame.php?page=le-has-registered');
    exit();
}
?>