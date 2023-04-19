<?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM user WHERE power!='1' AND id= :memid");
	$result->bindParam(':memid', $id);
	$result->execute();
?>