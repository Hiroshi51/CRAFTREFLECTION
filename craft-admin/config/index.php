<?php 
//create new member table
require('../le-db-connect.php');
require('../functions.php');
$prepare = $dbh->prepare('SELECT COUNT(*) as CNT FROM ?');
$prepare->bindValue(1,'craft_member',PDO::PARAM_STR);
$prepare->execute();
$dataCount = $prepare->fetch(PDO::FETCH_ASSOC)); 
?>
<!DOCTYPE html>
<html>
<head>
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script>
		$(document).ready(function(){
			var $submit = $("#submitBtn");
			$('#password2').on('keyup',function(){
				if($('#password1').val() != $('#password2').val()){
					$warningMsg = "確認パスワードが一致しません";
					$('p.warning').text($warningMsg);
				}
			});
		});
	</script>
</head>
<body>
	<?php if($dataCount['CNT'] === 0) : ?>
		<form action="confirmRegister.php" method="post">
		  <input type="text" name="id"/>
		  <input type="text" name="nick_name"/>
		  <input id="password1" type="password" name="pass_word"/>
	      <input id="password2" type="password" name="pass_word_confirm"/>
	      <p class="warning"></p>
		  <input type="submit" value="REGISTER"/>
	    </form>
	<?php elseif($dataCount['CNT'] > 0) : ?>
	    <p>You have already registered</p>
	    <a href="<?php siteUrl(); ?>/craft-admin">GOTO LOGIN PAGE</a>
	<?php endif; ?>        
</body>
</html>
