<?php
	function redirect($url) {
	    ob_start();
	    header('Location: '.$url);
	    ob_end_flush();
	    die();
	}
	$Name = $_POST['name'];
	$email = $_POST['email'];
	$grade = $_POST['grade'];
	$class = $_POST['Section'];
    $votes=0;
	require_once("config.php");

	if($conn->connect_error)
	{
		echo '$conn->connect_error';
		die('Connection Failed :'. $conn->connect_error);
	}
	else
	{
		// echo "$Name";
		$stmt = $conn->prepare("insert into candidates(name,email,grade,class) values(?, ?, ?, ?)");
		$stmt->bind_param("ssis",$Name,$email,$grade,$class);
		$stmt->execute();
        $st=$conn->prepare("insert into votes(name,votes) values(?,?)");
        $st->bind_param("si",$Name,$votes);
		$st->execute();
		echo "Registration Successful...";
		redirect("http://localhost/cr");
		$stmt->close();
		$conn->close();
	}
?>