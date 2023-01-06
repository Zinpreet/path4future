<?php 
    ob_start();
    include('config/constants.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student-Panel</title>
</head>


<style>
    body{
        margin: 0;
        padding: 0;
        /* box-sizing: border-box; */
    }
    h3{
        text-align: center;
        font-size: 50px;
        margin-bottom: 0;
        margin-top: 10px;
    }
    form{
        background-color: grey;
        width: 50%;
        padding: 50px 50px 20px;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
    }
    .box{
        height: 40px;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        padding: 10px;
        
    }
    .label-text{
        text-align: left;
        margin : 9px 0;
        color: white;
        flex-basis: 150px;
        margin-left: 40px;  
        font-size: 20px;   
    }
    .input-text{
        margin-right: 10%;
        margin-left: 40px;
        text-align: left;
        padding-left: 12px;
        width: 240px;
    }
    .gender-div{
        margin-right: 10%;
        margin-left: 40px;
        margin-top: 5px;
        font-size: 20px;
        text-align: left;
    }
    .skills{
        padding-top: 10px;
        display: flex;
        flex-direction: row; 
        /* background-color: brown; */
    }
    .skill-div{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
    }
    .skill-title{
        padding-left: 50px;
        flex-basis: 400px;        
        color: white;
        font-size: 20px;
    }
    .skill-text{
        width: 160px;
        padding: 5px 0;
    }
    
    .input-radio{
        width: 20px;
        height: 20px;
        border-radius: 100%;
    }
    .input-checkbox{
        width: 20px;
        height: 20px;
        border-radius: 20px ;
    }
    .submit-btn-div{
        text-align: center;

    }
    .submit-btn{
        margin-top: 22px;
        margin-bottom: 0;
        width: 180px;
        height: 40px;
        font-size: 20px;
        font-weight: bold;
        border-radius: 20px;
        border-style: none;
    }
    .submit-btn:hover{
        background-color: black;
        color: white;
    }



</style>


<body>
    <h3>Student login</h3>
    <br>
    <form action="" method="POST">
        <div class="box">
            <label class="label-text" for="student_name">Student Name :</label>
            <input class="input-text" type="text" name="student_name" placeholder="Enter your name">
        </div>
        <div class="box">
            <label class="label-text" for="gender">Gender :</label>
            <div class="gender-div">
                <input class="input-radio" type="radio" name="gender" value="male">Male
                <input class="input-radio" type="radio" name="gender" value="female">Female
            </div>
        </div>
        <div class="box">
            <label class="label-text" for="phone">Phone Number :</label>
            <input class="input-text" type="number" name="phone_no" placeholder="Enter your phone number">
        </div>
        <div class="box">
            <label class="label-text" for="college_name">College Name :</label>
            <input class="input-text" type="text" name="college_name" placeholder="Enter your college name">
        </div>
        <div class="box">
            <label class="label-text" for="year">Year :</label>
            <input class="input-text" type="number" maxlength="4" name="year" placeholder="Enter year of studying" >
        </div>
        <div class="box">
            <label class="label-text" for="branch">Branch :</label>
            <input class="input-text" type="text" name="branch" placeholder="Enter your branch">
        </div>
        <div class="skills">
            <div class="skill-title" for="skills">Skills:</div>
            <div class="skill-div">
                <div class="skill-text"><input class="input-checkbox" type="checkbox" name="skills" value="c">C </div>
                <div class="skill-text"><input class="input-checkbox" type="checkbox" name="skills" value="c++">C++ </div> 
                <div class="skill-text"><input class="input-checkbox" type="checkbox" name="skills" value="python">Python </div>
                <div class="skill-text"><input class="input-checkbox" type="checkbox" name="skills" value="java">Java </div>
                <div class="skill-text"><input class="input-checkbox" type="checkbox" name="skills" value="php">PHP </div>
                <div class="skill-text"><input class="input-checkbox" type="checkbox" name="skills" value="html">HTML </div>
                <div class="skill-text"><input class="input-checkbox" type="checkbox" name="skills" value="css">CSS </div>
                <div class="skill-text"><input class="input-checkbox" type="checkbox" name="skills" value="javascript">Javascript </div>
                <div class="skill-text"><input class="input-checkbox" type="checkbox" name="skills" value="mern">MERN </div>
                <div class="skill-text"><input class="input-checkbox" type="checkbox" name="skills" value="mern">MEAN </div>
                <div class="skill-text"><input class="input-checkbox" type="checkbox" name="skills" value="ui/ux">UI/UX </div>
                <div class="skill-text"><input class="input-checkbox" type="checkbox" name="skills" value="graphic">Graphics </div>      
            </div>
        </div>
        <div  class="submit-btn-div">
            <input type="submit" name="submit" value="Submit" class="submit-btn">
        </div>
     
    </form>

    <?php
    if(isset($_POST['submit'])){
        echo "clicked" ;

        $student_name = $_POST['student_name'];
        $phone_no = $_POST['phone_no'];
        $college_name = $_POST['college_name'];
        $year = $_POST['year'];
        $branch = $_POST['branch'];

        if(isset($_POST['gender'])){
            $gender = $_POST['gender'];
        }
        else{
            $gender = "none"; 
        }

        if(isset($_POST['skills'])){
            $skills = $_POST['skills'];
        }
        else{
            $skills = "none";
        }

        $sql = "INSERT INTO tbl_student SET 
            student_name = '$student_name',
            gender = '$gender', 
            phone_no = '$phone_no',
            college_name = '$college_name',
            year = '$year',
            branch = '$branch'              
        "; 

        $res = mysqli_query($conn,$sql);
         
        if($res == true){
            echo "data inserted";
            //$_SESSION['add-admin'] = "<div class='success text-center'> Admin Added Successfully. </div>";
            // Redirect Page to the manage-admin.php
            header('location:'.SITEURL.'manage-student.php' );
            ob_end_flush();
            die(); 
         }
         else {
            //Failed to insert admin to db
             echo "Failed to insert data";
             //Create a session variable to display message
            // $_SESSION['add-admin'] = "<div>Failed to add admin. </div>";
            // Redirect Page to the manage-student.php
            // header('location:'.SITEURL.'admin/add-admin.php' );
         }
    }

    ?>

</body>
</html>