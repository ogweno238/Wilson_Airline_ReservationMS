<?php
session_start();
$link = mysql_connect('localhost','root',"");
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}
	
	//Select database
	$db = mysql_select_db("kcau_clinic", $link);
	if(!$db) {
		die("Unable to select database");
	}
	mysql_query("UPDATE falied SET power='0' where id =id ");
	
?>
	<script>alert('server succefully opened!');
            window.location.href = "../adminaccount.php";</script>

