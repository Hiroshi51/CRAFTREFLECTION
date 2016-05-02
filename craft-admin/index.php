<?php
    $error = $_REQUEST['check'];
    if($error === "fail"){
    	$errorMsg = "Incorrect Id or Password...try again please";
    }
    else{
        $errorMsg = "";
    }
?>
<!DOCTYPE html>
<html>
<head>
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script>
		$(document).ready(function(){
			var $submit = $("#submitBtn");
			$('#id,#password').on('keyup',function(){
				if($('#id').val() != "" && $('#password').val() != ""){
					$submit.removeAttr("disabled");
					$submit.css({cursor:"pointer",opacity:1})
				}
				if($('#id').val() === "" || $('#password').val() === ""){
					console.log("Not works");
					$submit.attr("disabled","disabled");
					$submit.css({cursor:"unset",opacity:0.2})
				}
			})
		});
	</script>
	<style type="text/css">
		#submitBtn{
			opacity:0.2;
		}
		input[type=submit] {
			padding:5px 15px; 
			color:#fff;
			background:#000; 
			border:0 none;
			cursor:pointer;
			-webkit-border-radius: 5px;
			border-radius: 5px; 
			cursor:unset;
		}
	</style>
</head>
<body>

	<?php if($errorMsg != "") :?>
	<p><?php echo $errorMsg ?></p>
	<?php endif ?>	

	<form action="le-login-check.php" method="post">
		<input id="id" type="text" name="id" placeholder="id" />
		<input id="password" type="password" name="password" placeholder="password"/>   
		<input id="submitBtn" type="submit" value="SEND" disabled="disabled"/>
	</form>

</body>
</html>