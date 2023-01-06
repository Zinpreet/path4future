<?php
$res=false;

if(isset($_POST['name'])){
$server = "localhost";
$username ="root";
$password ="";
$dbname = "path4future";

$con = mysqli_connect($server,$username,$password,$dbname);

if(!$con){
    die("connection to this DB failed");

}

$name = $_POST['name'];
$email = $_POST['email'];
// $resume = $_POST['resume'];      



$sql = "insert into application values('','$name','$email')";

$res= mysqli_query($con,$sql);


if($res){
    $res=true;
}
else{
    echo "Error: $sql <br> $con->error ";
}
}
?>


<html>
<head>
  <title>Full stack</title>
  
</head>
<style>
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

header {
  background-color: #333;
  color: #fff;
  padding: 20px 0;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}

h1 {
  margin: 0;
}

a {
  color: #fff;
  text-decoration: none;
}

a:hover {
  color: #00b8d4;
}

main {
  background-color: #eee;
}

section {
  padding: 20px 0;
}

h2 {
  color: #00b8d4;
  text-align: center;
}

form {
  max-width: 500px;
  margin: 20px auto;
  display: flex;
  flex-direction: column;
}

.form-group {
  margin: 10px 0;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"], select {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

input[type="submit"] {
  background-color: #00b8d4;
  color: #fff;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

.program {
  margin: 20px 0;
}

section#contact {
  text-align: center;
}

address {
  font-style: normal;
  margin: 20px 0;
}

footer {
  background-color: #333;
  color: #fff;
  padding: 20px 0;
  text-align: center;
}

</style>
<body>
  <header>
    <div class="container">
      <h1>XYZ Company</h1>
    </div>
  </header>
  <main>
    <section id="overview" class="container">
      <h2>Overview</h2>
      <p>Welcome to the XYZ website. We offer fULLSTACK WEDEB internship to you. Read on to learn more about our programs and how to apply.</p>
    </section>
    <section id="programs" class="container">
      <div class="program">
        <h3>fULLSTACK WEBDEB</h3>
        <p>Our fULLSTACK WEDEB internship program offers the chance to work on a variety of projects regarding web dwvwlopment. Interns will have the opportunity to learn new technologies and work with a team of experienced developers.</p>
      </div>
    </section>
    <section id="application" class="container">
      <h2>Application</h2>
      <p>To apply for one of our internship programs, please fill out the form below. All fields are required.</p>


      <form action="7fullst.php" method="POST">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="text" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="resume">Resume:</label>
          <input type="file" id="resume" name="resume">
        </div>
        <a href="1start.php"><input type="submit" namne="submitt" value="Submit"></a>
        
      </form> 
    </section>
 
