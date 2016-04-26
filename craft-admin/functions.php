<?php 
	include('model/FetchPageProp.php');
	$fetchPageProp = new FetchPageProp();
	$siteUrl = $fetchPageProp->fetchPageProp();

	//short ver of htmlspecialchars
	function hsc ($st){
		return htmlspecialchars($st);
	}
	//get siteUrl
	function siteUrl($afterDomain){
		echo $siteUrl + $afterDomain;
		return true;
	}
?>