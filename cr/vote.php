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
  <li><a class="active" href="admin.php">Admin</a></li>
</ul>
<?php
require_once "config.php";
if($conn->connect_error)
{
    echo '$conn->connect_error';
    die('Connection Failed :'. $conn->connect_error);
}
else
{
$sql="SELECT name FROM votes";
$result=$conn->query($sql);
}
?>
<div class="wrapper" >
  <form action="/cr/votes.php" method="POST">
	  <h2 style="margin-bottom:1rem;">Voting Section</h2>
    <label for="name">Name</label><br>
    <input type="text" id="name" name="name" placeholder="Your name.." required><br>
    <label for="email">Email</label><br>
    <input type="text" id="email" name="email" placeholder="Your Email" required><br>

    <label for="cname">Candidate</label><br>
    <select id="cname" name="cname">
    <?php
	while($row=$result->fetch_assoc())
	{
	?>
      <option value="<?=$row['name'];?>"><?=$row['name'];?></option>
      <?php
	  }?>
    </select>

    <span><button type="submit" value="Submit"> Submit</button></span>
  </form>
</div>