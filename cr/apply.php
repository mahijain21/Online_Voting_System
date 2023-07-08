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
<div class="wrapper" >
  <form action="/cr/candidate.php" method="POST">
	  <h2 style="margin-bottom:1rem;">Apply for CR</h2>
    <label for="fname">Name</label><br>
    <input type="text" id="name" name="name" placeholder="Enter your full name" required><br>
    <label for="lname">Email</label><br>
    <input type="email" pattern=".+@muj\.manipal\.edu" id="email" name="email" placeholder="Your your email" required><br>

    <label for="grade">Grade</label><br>
    <input type="text"  id="grade" name="grade" placeholder="Enter grade here" onblur="gradeChecker()" required><br>

    <label for="Section">Section</label><br>
    <input type="text"  id="class" name="Section" placeholder="Enter section here" required><br>
    <span><button style="text-align: center" id="submit" type="submit" value="Submit" disabled>Submit</button></span>
    <span id=demo Style="color:red"></span>
  </form>
  <p id=demo></p>
  <script>
function gradeChecker() {
  var x = document.getElementById("grade").value;
  var text;
  if ( x >=9) {
    console.log("ss");
    document.getElementById("submit").disabled= false;
  }
   else {
    text = "The minimum required grade is 9";
    document.getElementById("demo").innerHTML = text
  }
  ;
}
</script>
</div>