
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <link rel="stylesheet" href="student.php">
</head>
<style>
    .body2 {
        background-image: url("bg2.jpg");
        background-size: cover;
        background-color: rgb(234, 241, 241);
    }
    
    .div2 {
        margin-top: 10px;
        top: auto;
        transform: translateY(-10%);
        text-align: center;
        background-color: rgb(247, 225, 40);
        border-radius: 10px;
    }
    
    .div3 {
        text-align: center;
    }
    
    .fieldset {
        height: 650px;
        width: 50%;
        margin: auto;
        border: 5px solid black;
    }
    
    .leg {
        background: rgb(29, 26, 26);
        width: 90%;
        margin: auto;
        color: #009688;
        font-family: garamond, serif;
        font-weight: 800;
        font-size: 20px;
        text-align: center;
        align-items: center;
        align-self: center;
        padding: 3px;
        border-radius: 10px;
    }
    
    .legs {
        background: rgb(29, 26, 26);
        width: 60% 20%;
        height: 30%;
        color: #009688;
        font-family: garamond, serif;
        font-weight: 800;
        font-size: 20px;
        padding: 2px;
        border: none;
        border-radius: 10px;
    }
    
    .inputname {
        border-radius: 6px;
    }
    
    .input {
        border-radius: 6px;
        color: solid black;
        background-color: #cfdbda;
        width: 50%;
        height: 25px;
        margin: 5px;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    
    .input1 {
        margin: 4px;
        width: 58%;
        height: 80px;
        background-color: #cfdbda;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        border-radius: 8px;
        font-size: large;
        font-weight: 100;
    }
    
    .input2 {
        margin: 4px;
        height: 20px;
        width: 50%;
        border-radius: 8px;
        background-color: #cfdbda;
    }
    
    .submit {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-size: large;
        margin: 4px;
        height: 35px;
        width: 40%;
        border-radius: 5px;
        border: 3px solid black;
        color: white;
        background-color: #009688;
        cursor: pointer;
        transition: 0.5s;
    }
    
    .submit:hover {
        width: 42%;
        height: 38;
        border-radius: 5px;
        border: 3px solid black;
        color: rgb(12, 12, 12);
        background-color: #04dfc9;
        box-shadow: black;
    }
</style>

<body class="body2">

    <div class="div2">
        <h1> <u>Welcome to the best internship platform</u></h1>
        <h1> <u> path4Future 🎓</u></h1>
        <h3 class="h3c">
            <marquee scrollamount="10" direction="right" behavior="alternate" direction="right"> Get the virtual work experience in your dream company </marquee>
            
        </h3>
       
    </div>
    <form action="student.php" method="POST">
    <fieldset class="fieldset">
        <div class="div3">
            <legend class="leg">Student name:
                <input class="inputname" type="text" name="Fname" placeholder="first name" id="" required>
                <input class="inputname" type="text" name="Lname" placeholder="last name" id="" required>
            </legend>
            <br>
            <fieldset id="leg" class="legs">gender <br>
                <input class="legs" type="radio" value="male" name="gender" id="">male
                <input class="legs" type="radio" value="female" name="gender" id="">female
                <input class="legs" type="radio" value="other" name="gender" id="">Others</fieldset>
            <br>
            <legend class="leg">Name of college/institution</legend>
            <input name="Nameclg" class="input" type="text" placeholder="college name">
            <legend class="leg">year of study </legend>
            <input name="yearstudy" class="input" type="text" placeholder="write year">
            <legend class="leg">your brach</legend>
            <input name="branch" class="input" type="text" placeholder="your brach">
            <legend class="leg">your Skills</legend>
            <input name="skills" class="input" type="text" placeholder="your skills">

            <legend class="leg">How do you get to know about us</legend>
            <select class="input2" name="about_us" id="" required>
    <option class="input2" name="about_us" value="">--about us --</option>
    <option name="about_us" value="college/intsitution">college/intsitution</option>
    <option name="about_us" value="friends">friends</option>
    <option name="about_us" value="Social media">Social media</option>
    <option name="about_us" value="by our website">by our website</option><br>
    </select>

            <legend  class="leg">write about yourself and knowledge in mentioned skills </legend>
            <textarea name="details" class="input1" name="" id="" cols="30" rows="10" placeholder="write about self and knowledge"></textarea>
            <br>
            <br>
            <a href="5main.php"><input class="submit" type="submit" id="Submit"value="Submit"></a>
           

    </fieldset>
    </form>
    </div>
</body>
</html>