<?php
include './database/db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/patient_information.css">
    <title></title>

</head>

<body>
    <div class="alert-box">
        <h1>Patient Information</h1>
        <div class="alert-main-box">
            <div class="alert-add">
                <h3 class="box-title">Select criteria for Filter</h3>

                <section class="header">

                    <div class="items-controller">
                        <h5>Show</h5>
                        <select name="" id="itemperpage">
                            <option value="10" selected>10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                        <h5>Per Page</h5>
                    </div>
                    <div class="search">
                    <h5>Search</h5>
                    <input type="text" name="" id="search" placeholder="search">
                </div>
                </section>
                <section class="field">
                    <table >
                        <thead>
                            <tr>
                                <!-- <th><input type="checkbox" name="" id="selectAll"></th> -->
                                <th>S. No.</th>
                                <th>Aadhar Number</th>
                                <th>Name</th>
                                <th>DOB</th>
                                <th>Address</th>
                                <th>State</th>
                                <th>City</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Gender</th>
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
                                <th>History previous</th>
                                <th>Vaccination</th>
                                <th>Present medication</th>
                                <th>QR Code</th>
                                <th colspan="3">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <script>
                                function Patient() {
                                    <?php
                                    $con = mysqli_connect('localhost', 'root', '');
                                    mysqli_select_db($conn, 'nagrath_db');
                                    $q1 = "select * from patient ORDER BY p_id";
                                    $result = mysqli_query($conn, $q1);
                                    $num1 = mysqli_num_rows($result);
                                    mysqli_close($conn);
                                    ?>
                                }
                            </script>
                            <?php
                            $count = 1;
                            for ($i = 0; $i < $num1; $i++) {
                                $row = mysqli_fetch_array($result);
                            ?>
                                <tr>
                                    <td><?php echo $count++; ?></td>
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
                                    <td><?php  echo '<img src="' . $row['d_file'] . '" alt="QR Code">'; ?></td>
                                    
                                    <td><a href="patient_update.php?updateid=<?php echo $row['p_id'];?>" class="text-light"><img src="./icon/pen.png" alt="" style=" width : 30px; height : 30px;"></a>
                                        <a href="patient_delete.php?deleteid=<?php echo $row['p_id'];?>" class="text-light"><img src="./icon/bin.png" alt="" style=" width : 30px; height : 30px;"></a>
                                        <a href="patient_pdf.php?pdfid=<?php echo $row['p_id'];?>" class="text-light"><img src="./icon/pdf.png" alt="" style=" width : 30px; height : 30px;"></a>
                                        <a href="patient_print.php?printid=<?php echo $row['p_id'];?>" class="text-light"><img src="./icon/printer.png" alt="" style=" width : 30px; height : 30px;"></a>
                                    </td>
                                    <!-- <td><button style="background-color: rgb(43, 134, 43);height: 33px;"><a href="../update/updatepatient.php?updateid=<?php echo $row['p_id'];?>" style="padding:10px; text-decoration:none;color:white; ">Update</a></button></td> -->
                                    <!-- <td><button style="background-color:red;height: 33px;"><a href="patient_delete.php?deleteid=<?php echo $row['p_id'];?>" style="padding:10px;text-decoration:none;color:white;">Delete</a></button></td> -->
                                    <!-- <td><button style="background-color:blue;height: 33px;"><a href="patient_print.php<?php echo $row['p_id']; ?>" style="padding:10px;text-decoration:none;color:white;">Print</a></button></td> -->
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
       <script>
        // search content 
		var search = document.getElementById("search");
		search.onkeyup = e=>{
			const text = e.target.value;
			for(let i=0; i<tr.length; i++){
				const matchText = tr[i].querySelectorAll("td")[2].innerText;
				if(matchText.toLowerCase().indexOf(text.toLowerCase()) > -1){
					tr[i].style.visibility = "visible";
				}else{
					tr[i].style.visibility= "collapse";
				}	
			}
		}
       </script>      
</body>

</html>