<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="patient_info.css">
</head>
<body>
    <div class="main_info">
        <div class="container_info">

            <div class="title_info">Patient Information</div>

            <div class="button_info">
                <button type="submit" id="btn1" onclick="window.location='../AInfo.php' ">Back</button>
            </div>
            <br>

            <table id="myTable"> 
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>DOB</th>
                    <th>Address</th>
                    <th>State</th>
                    <th>City</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Hemoglobin</th>
                    <th>Blood Pressure</th>
                    <th>blood group</th>
                    <th>Heart rate</th>
                    <th>weight</th>
                    <th>Fasting blood</th>
                    <th>Blood CBC</th>
                    <th>Urin</th>
                    <th>Serum</th>
                    <th>Lipid profit</th>
                    <th>TSH</th>
                    <th>SGPT</th>
                    <th>Platelet count</th>
                    <th>HIV</th>
                    <th>Chronic disease</th>
                    <th>Gender</th>
                    <th colspan="2">Operation</th>
                </tr>
                <script>
                    function Patient(){
                      <?php
                        $con= mysqli_connect('localhost', 'root','');
                        mysqli_select_db($con,'nagrath_db');
                        $q1="select * from patient ORDER BY p_id";
                        $result=mysqli_query($con,$q1);
                        $num1= mysqli_num_rows($result);
                        mysqli_close($con);
                        ?>  
                    }
                </script>
                    <?php 
                    $count=1;
                    for($i=0;$i<$num1;$i++)
                    {
                        $row=mysqli_fetch_array($result);
                    ?>
                 <tr>
                    <td><?php echo $count++; ?></td>
                    <td><?php echo $row['p_name']; ?></td>
                    <td><?php echo $row['p_dob']; ?></td>
                    <td><?php echo $row['p_address']; ?></td>
                    <td><?php echo $row['p_state']; ?></td>
                    <td><?php echo $row['p_city']; ?></td>
                    <td><?php echo $row['p_email']; ?></td>
                    <td><?php echo $row['p_mobile']; ?></td>
                    <td><?php echo $row['p_hemoglobin']; ?></td>
                    <td><?php echo $row['p_blood_pressure']; ?></td>
                    <td><?php echo $row['p_blood_group']; ?></td>
                    <td><?php echo $row['p_heart_rate']; ?></td>
                    <td><?php echo $row['p_weight']; ?></td>
                    <td><?php echo $row['p_fasting_blood']; ?></td>
                    <td><?php echo $row['p_blood_cbc']; ?></td>
                    <td><?php echo $row['p_urin']; ?></td>
                    <td><?php echo $row['p_serum']; ?></td>
                    <td><?php echo $row['p_lipid_profit']; ?></td>
                    <td><?php echo $row['p_tsh']; ?></td>
                    <td><?php echo $row['p_sgpt']; ?></td>
                    <td><?php echo $row['p_platelet']; ?></td>
                    <td><?php echo $row['p_hiv']; ?></td>
                    <td><?php echo $row['p_chronic_disease']; ?></td>
                    <td><?php echo $row['p_gender']; ?></td>
                    
                    <?php $d_id=$row['p_id'];?>
                    <td><button style="background-color: rgb(43, 134, 43);height: 33px;"><a href="../update/updatepatient.php?updateid=<?php echo $row['p_id']; ?>" style="padding:10px; text-decoration:none;color:white; ">Update</a></button></td>
                    <td><button style="background-color:red;height: 33px;"><a href="../update/deletepatient.php?deleteid=<?php echo $row['p_id']; ?>" style="padding:10px;text-decoration:none;color:white;">Delete</a></button></td>
               </tr>
               <?php
                }
                ?>
 
            </table>
        </div>
    </div>
    
</body>
</html>
