<?php 
//create new member table
require('../le-db-connect.php');
require('../functions.php');
$prepare = $dbh->prepare('SELECT COUNT(*) as CNT FROM ?');
$prepare->bindValue(1,'craft_member',PDO::PARAM_STR);
$prepare->execute();
$dataCount = $prepare->fetch(PDO::FETCH_ASSOC)); 
?>

<?php if($dataCount['CNT'] === 0) : ?>
	<form action="confirmRegister.php" method="post">
	  <input type="text" name="id"/>
	  <input type="text" name="nick_name"/>
	  <input type="password" name="pass_word"/>
      <input type="password" name="pass_word_confirm"/>
	  <input type="submit" value="REGISTER"/>
    </form>
<?php elseif($dataCount['CNT'] > 0) : ?>
    <p>You have already registered</p>
    <a href="<?php siteUrl(); ?>/craft-admin">GOTO LOGIN PAGE</a>
<?php endif; ?>        

