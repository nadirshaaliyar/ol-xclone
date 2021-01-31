<?php


        $dsn=getenv('PqaTu0evkE');
        $user=getenv('PqaTu0evkE');
        $pass=getenv('nkzN970fqw');
        $con=mysqli_connect ("remotemysql.com",$dsn,$pass,$user) or die ('I cannot connect to the database because: ' . mysql_error());
        mysqli_select_db ($con,$dbname);

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
