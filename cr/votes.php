<?php
	$Name = $_POST['name'];
	$email= $_POST['email'];
	$cname = $_POST['cname'];
	require_once "config.php";
	$sql="SELECT votes FROM votes WHERE name='$cname'";
    $result=$conn->query($sql);
    $r=$result->fetch_assoc();
    $v=$r['votes'];
    $vo=$v+1;
	$st=$conn->prepare("
		update votes
		set votes=$vo
		where name='".mysqli_real_escape_string($conn,$cname)."' and NOT EXISTS
		(SELECT *
		FROM voters
		WHERE voters.name = '".mysqli_real_escape_string($conn,$Name)."'
		)
		");
		if($st){
			$st->execute();
			$stmt = $conn->prepare("insert into voters(name,email,cname) values(?, ?, ?)");
			$stmt->bind_param("sss",$Name,$email,$cname);
			$stmt->execute();
		}
		else{
			redirect("http://localhost/error.php");
		}
	function redirect($url) {
	    ob_start();
	    header('Location: '.$url);
	    ob_end_flush();
	    die();
	}
	redirect("http://localhost/cr");
	// echo "$Name";
	// echo "$email";
	// echo "$cname";
	// echo "$vo";
	// echo "$v";
	$stmt->close();
	$conn->close();
?>