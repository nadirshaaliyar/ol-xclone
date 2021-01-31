<?php

        $dsn = 'mysql:host= remotemysql.com;port=3306;dbname=PqaTu0evkE';
	$user = 'PqaTu0evkE';
	$pass = 'nkzN970fqw';
	$option = array(
		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
	);

	try {
		$con = new PDO($dsn, $user, $pass, $option);
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}

	catch(PDOException $e) {
		echo 'Failed To Connect' . $e->getMessage();
	}
