<!-- <?php echo "Hello Admin!"; ?> -->

<?php include('config/constants.php'); ?>

<html>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/admin.css">
</html>

<div class="main-content">
    <div class="wrapper">
        <h3>Manage Student</h3>
        <br>
        <table>
            <tr>
                <th>Sl.No</th>
                <th>Student Name</th>
                <th>Gender</th>
                <th>Phone No.</th>
                <th>College</th>
                <th>Year</th>
                <th>Branch</th>
                <th>Skills</th>
            </tr>
            <?php
                $sql = "SELECT * FROM tbl_student";
                $res = mysqli_query($conn,$sql);
                if($res == true){
                    $count = mysqli_num_rows($res);
                    $sn=1;

                    if($count > 0){
                        while($rows = mysqli_fetch_assoc($res))
                        {
                            $id = $rows['id'];
                            $student_name = $rows['student_name'];
                            $gender = $rows['gender'];
                            $phone_no = $rows['phone_no'];
                            $college_name = $rows['college_name'];
                            $year = $rows['year'];
                            $branch = $rows['branch'];

                            ?>
                                <tr>
                                    <td><?php echo $sn++ ; ?></td>
                                    <td><?php echo $student_name ; ?></td>
                                    <td><?php echo $gender ; ?></td>
                                    <td><?php echo $phone_no ; ?></td>
                                    <td><?php echo $college_name ; ?></td>
                                    <td><?php echo $year ; ?></td>
                                    <td><?php echo $branch ?></td>
                                    <td><?php echo "skills" ; ?></td>
                                </tr>
                            <?php
                        }
                    }                    
                }
                else
                {
                    //we don't have data in our database.
                    echo "Not have any data in database";
                }
            ?>
        </table>

    </div>
            <!-- footer starts -->
            <footer>
            <div>
                <ul>
                    <a href="#"><li><i class="fa-brands fa-instagram"></i></li></a>
                    <a href="#"><li><i class="fa-brands fa-facebook"></i></li></a>
                    <a href="#"><li><i class="fa-brands fa-twitter"></i></li></a>
                </ul>
                <p class="text-center footer-text">2023 All rights reserved, Simba Restaurant. Developed By <i class="fa-solid fa-laptop-code"></i> Supreet Shivu</a> together we are Shipreet</p>
            </div>
        </footer>
        <!-- footer ends -->
</div>
