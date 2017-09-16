<?php

session_start();

try{
	$conn = new pdo ("mysql:host=localhost; dbname=site; charset=utf8", "root", "");
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		if (empty($_POST['title']) || empty($_POST['paragraph']))
		{
			$_SESSION['error']="wrong";

			header('location:form.php');
			die();
		}
		else
		{
			$stmt= $conn->prepare('INSERT INTO content (title, paragraph) VALUES (:title, :paragraph)');
			$stmt-> bindParam('title', $_POST['title']);
			$stmt->bindParam('paragraph', $_POST['paragraph']);
			$stmt-> execute(array(
				'title'=>htmlentities($_POST['title']),
				'paragraph'=>htmlentities($_POST['paragraph'])));

			$_SESSION['ok']='done';
			header('location:form.php');			
		}
	}
}
catch(PDOExeption $e)
{
	echo $e->getMessage();
}