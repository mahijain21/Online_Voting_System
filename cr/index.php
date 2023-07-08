<!DOCTYPE html>
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
  <h1>E Polling System™️</h1>

  <button id="applyCR" style="margin-right: 4rem;" class="float-left submit-button" >Apply for Class Representative</button>
  <button id="voteVR" class="float-left submit-button" >Vote for Class Representative</button>
<script type="text/javascript">
    document.getElementById("applyCR").onclick = function () {
        location.href = "/cr/apply.php";
    };
    document.getElementById("voteVR").onclick = function () {
        location.href = "/cr/vote.php";
    };
</script>
</body>
</html>