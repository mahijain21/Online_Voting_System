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
<?php
require_once("config.php");
if($conn->connect_error)
{
    echo '$conn->connect_error';
    die('Connection Failed :'. $conn->connect_error);
}
else
{
$sql="SELECT * FROM votes ORDER BY votes DESC";
$result=$conn->query($sql);
}
?>
<div class="wrapper" >
	<h2 style="margin-bottom:1rem;">Results</h2>
  <main class="heading">
    <h2>Name</h2>
    <h2>Votes</h2>
  </main>
<?php
	while($row=$result->fetch_assoc())
	{
	?><main>
    <h3><?=$row['name'];?></h3>

    <h3><?=$row['votes'];?></h3>
  </main>
      <?php
	  }?>
</div>