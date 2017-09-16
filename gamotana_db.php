<?php

try{
	$conn = new pdo("mysql:host=localhost; dbname=site; charset=utf8", "root", "");
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sql = ("SELECT title, paragraph, date FROM content ORDER BY id DESC");
	$stmt=$conn->query($sql);

	$post=[];
	while ($row = $stmt->fetch()) {
		$post[]=$row;
		// print_r($post);
	}
}

catch(PDOExeption $e)
{
	echo $e->getMessage();
}

?>

