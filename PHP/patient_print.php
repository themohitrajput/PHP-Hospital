<?php
include './database/db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./css/patient_information.css"> -->
     <link rel="stylesheet" href="patient_print.css">
    <title></title>

</head>

<body>
    <div class="alert-box">
        <h1>Patient Information</h1>
        <div class="alert-main-box">
            <div class="test_report">TEST REPORTS</div>


            <div class="alert-add">
                <section class="field">
                    <table>
                        <tbody>
                            <script>
                                function Patient() {
                                    <?php
                                    $con = mysqli_connect('localhost', 'root', '');
                                    mysqli_select_db($con, 'nagrath_db');
                                    $q1 = "select * from patient ORDER BY p_id";
                                    $result = mysqli_query($con, $q1);
                                    $num1 = mysqli_num_rows($result);
                                    mysqli_close($con);
                                    ?>
                                }
                            </script>
                            <?php
                               $row = mysqli_fetch_array($result);
                            ?>
                            
                            <div class="personal_info">
                                    <div class="personal_info_1">
                                      <ul>
                                        <li>Patient Name    : <?php echo $row['p_name']; ?></li>
                                        <li>Mobile No.   : <?php echo $row['p_mobile']; ?></li>
                                        <li>Ref. By Dr.</li>
                                        <li>Reg. No.</li>
                                      </ul>
                                    </div>
                                    <div class="personal_info_2">
                                    <ul>
                                        <li>Aadhar No.   : <?php echo $row['p_aadhar']; ?></li>
                                        <li>Age/Sex  :   /<?php echo $row['p_gender']; ?></li>
                                        <li>Collected on</li>
                                        <li>Reported on</li>
                                      </ul>
                                    </div>
                                </div>
                                <div class="patient_details">
                                    <li>NAME OF TEST</li>
                                    <li>RESULT VALUE</li>
                                    <li>REFERENCE RANGE</li>
                                </div>
                                <h3>HAEMOGRAM</h3>
                                <div class="haemogram">
                                    <div class="haemogram_name">
                                        
                                    </div>
                                    <div class="haemogram_unit">
                                        
                                    </div>
                                    <div class="haemogram_range">
                                        
                                    </div>
                                </div>
                            <?php
    
                            for ($i = 0; $i < $num1; $i++) {
                                $row = mysqli_fetch_array($result);
                            ?>
                                <tr>
                                    <td><?php echo $row['p_aadhar']; ?></td>
                                    <td><?php echo $row['p_name']; ?></td>
                                    <td><?php echo $row['p_dob']; ?></td>
                                    <td><?php echo $row['p_address']; ?></td>
                                    <td><?php echo $row['p_state']; ?></td>
                                    <td><?php echo $row['p_city']; ?></td>
                                    <td><?php echo $row['p_email']; ?></td>
                                    <td><?php echo $row['p_mobile']; ?></td>
                                    <td><?php echo $row['p_gender']; ?></td>

                                    <td><?php echo $row['p_hemoglobin_value'];?> <?php echo $row['p_hemoglobin_unit'];?> </td>
                                    <td><?php echo $row['p_blood_pressure_value']; ?> <?php echo $row['p_blood_pressure_unit']; ?></td>
                                    <td><?php echo $row['p_blood_group_value']; ?> <?php echo $row['p_blood_group_unit']; ?></td>
                                    <td><?php echo $row['p_heart_rate_value']; ?> <?php echo $row['p_heart_rate_unit']; ?></td>
                                    <td><?php echo $row['p_weight_value']; ?> <?php echo $row['p_weight_unit']; ?></td>
                                    <td><?php echo $row['p_fasting_blood_value']; ?> <?php echo $row['p_fasting_blood_unit']; ?></td>
                                    <td><?php echo $row['p_blood_cbc_value']; ?> <?php echo $row['p_blood_cbc_unit']; ?></td>
                                    <td><?php echo $row['p_urin_value']; ?> <?php echo $row['p_urin_unit']; ?></td>
                                    <td><?php echo $row['p_serum_value']; ?> <?php echo $row['p_serum_unit']; ?></td>
                                    <td><?php echo $row['p_lipid_profit_value']; ?> <?php echo $row['p_lipid_profit_unit']; ?></td>
                                    <td><?php echo $row['p_tsh_value']; ?> <?php echo $row['p_tsh_unit']; ?></td>
                                    <td><?php echo $row['p_sgpt_value']; ?> <?php echo $row['p_sgpt_unit']; ?></td>
                                    <td><?php echo $row['p_platelet_value']; ?> <?php echo $row['p_platelet_unit']; ?></td>
                                    <td><?php echo $row['p_hiv_value']; ?> <?php echo $row['p_hiv_unit']; ?></td>
                                    <td><?php echo $row['p_chronic_disease_value']; ?> <?php echo $row['p_chronic_disease_unit']; ?></td>
                                    <td><?php echo $row['p_history_previous_value']; ?> <?php echo $row['p_history_previous_unit']; ?></td>
                                    <td><?php echo $row['p_vaccination_value']; ?> <?php echo $row['p_vaccination_unit']; ?></td>
                                    <td><?php echo $row['p_present_medication_value']; ?> <?php echo $row['p_present_medication_unit']; ?></td>
                                    

                                    <!-- <?php $d_id = $row['p_id']; ?>
                                    <td><button style="background-color: rgb(43, 134, 43);height: 33px;"><a href="../update/updatepatient.php?updateid=<?php echo $row['p_id']; ?>" style="padding:10px; text-decoration:none;color:white; ">Update</a></button></td>
                                    <td><button style="background-color:red;height: 33px;"><a href="patient_delete.php?deleteid=<?php echo $row['p_id']; ?>" style="padding:10px;text-decoration:none;color:white;">Delete</a></button></td>
                                    <td><button style="background-color:blue;height: 33px;"><a href="patient_delete.php?deleteid=<?php echo $row['p_id']; ?>" style="padding:10px;text-decoration:none;color:white;">Print</a></button></td> -->
                                </tr>
                            <?php

                            }
                            ?>
                        </tbody>
                    </table>
                    <div class="bottom-field">
                        <div class="left">Showing 1 to 1 of 1 entries</div>
                        <div class="right">
                            <ul class="pagination">
                                <li class="prev"><a href="#" id="prev">Previous</a></li>
                                <!-- page number here -->
                                <li class="next"><a href="#" id="next">Next</a></li>
                            </ul>
                        </div>
                    </div>
            </div>
            </section>
            <!-- <div class="main">
			<iframe id="iframe-content" width="100%" height="100%" frameborder="0">
        </iframe>
		</div> -->
            <script type="text/javascript" src="./js/important_alerts.js"></script>
</body>

</html>