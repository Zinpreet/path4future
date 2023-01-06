<?php
include ("student.php");
$res=false;

if(isset($_POST['Fname'])){
$server = "localhost";
$username ="root";
$password ="";
$dbname = "path4future";

$con = mysqli_connect($server,$username,$password,$dbname);

if(!$con){
    die("connection to this DB failed");

}

$Fname = $_POST['Fname'];
$Lname = $_POST['Lname'];
$gender = $_POST['gender'];      
$Nameclg = $_POST['Nameclg'];
$yearstudy = $_POST['yearstudy'];
$branch = $_POST['branch'];
$skills =$_POST['skills'];
$about_us =$_POST['about_us'];
$details =$_POST['details'];


$sql = "insert into student values('','$Fname','$Lname','$gender','$Nameclg','$yearstudy','$branch','$skills','$about_us','$details')";

$res= mysqli_query($con,$sql);


if($res){
     // echo "sucessfully inserted";
    $res=true;
}
else{
    echo "Error: $sql <br> $con->error ";
}
}
?>
