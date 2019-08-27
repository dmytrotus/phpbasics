<?php

	$db = mysqli_connect('localhost', 'root', '', 'dbphp');
	mysqli_query($db, "SET NAMES UTF8");
	$res = mysqli_query($db, "SELECT * FROM articles");
	$posts = mysqli_fetch_all($res);
	var_dump(count($posts));
	

	$db = new mysqli('localhost', 'root', '', 'dbphp');
	$db->query("SET NAMES UTF8");
	$posts = $db->query($db, "SELECT * FROM articles")->fetch_all();
	var_dump(count($posts));
