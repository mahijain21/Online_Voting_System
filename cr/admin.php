<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>EPS</title>
  <link rel="stylesheet" href="./assets/css/index.css">

  </head>
<body>
<ul>
  <li><a class="active" href="index.php">Home</a></li>
</ul>
<div class="wrapper" >
	<h2 style="margin-bottom:1rem;">Admin Login</h2>
    <label for="fname">Username</label><br>
    <input type="text" id="name" name="name" placeholder="Enter your name here" required><br>
    <label for="lname">Password</label><br>
    <input type="password" id="pass" name="pass" placeholder="Enter your password here" required><br>
    <span><button  value="Submit" onclick=login();> Submit</button></span>
  <script>
	const login = () => {
		if (document.querySelector("#name").value=="admin" && document.querySelector("#pass").value=="admin") {
			location.href = "/cr/result.php";
		}
		else {
			alert("Invalid Username or Password");
		}
	}
</script>
</div>