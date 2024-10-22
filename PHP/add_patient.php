<?php
include_once './database/db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $p_aadhar = $_POST["p_aadhar"];
    $p_name = $_POST["p_name"];
    $p_dob = $_POST["p_dob"];
    $p_address = $_POST['p_address'];
    $p_state = $_POST['p_state'];
    $p_city = $_POST['p_city'];
    $p_email = $_POST['p_email'];
    $p_mobile = $_POST['p_mobile'];
    $p_gender = $_POST['p_gender'];

    
    $p_hemoglobin_value = $_POST['p_hemoglobin_value'];
    $p_hemoglobin_unit = $_POST['p_hemoglobin_unit'];
    $p_hemoglobin_range = $_POST['p_hemoglobin_range'];

    $p_blood_group_value = $_POST['p_blood_group_value'];
    $p_blood_group_unit = $_POST['p_blood_group_unit'];
    $p_blood_group_range = $_POST['p_blood_group_range'];
    
    $p_blood_pressure_value = $_POST['p_blood_pressure_value'];
    $p_blood_pressure_unit = $_POST['p_blood_pressure_unit'];
    $p_blood_pressure_range = $_POST['p_blood_pressure_range'];
    
    $p_heart_rate_value = $_POST['p_heart_rate_value'];
    $p_heart_rate_unit = $_POST['p_heart_rate_unit'];
    $p_heart_rate_range = $_POST['p_heart_rate_range'];
    
    $p_weight_value = $_POST['p_weight_value'];
    $p_weight_unit = $_POST['p_weight_unit'];
    $p_weight_range = $_POST['p_weight_range'];
    
    $p_fasting_blood_value = $_POST['p_fasting_blood_value'];
    $p_fasting_blood_unit = $_POST['p_fasting_blood_unit'];
    $p_fasting_blood_range = $_POST['p_fasting_blood_range'];
    
    $p_blood_cbc_value = $_POST['p_blood_cbc_value'];
    $p_blood_cbc_unit = $_POST['p_blood_cbc_unit'];
    $p_blood_cbc_range = $_POST['p_blood_cbc_range'];
    
    $p_urin_value = $_POST['p_urin_value'];
    $p_urin_unit = $_POST['p_urin_unit'];
    $p_urin_range = $_POST['p_urin_range'];
    
    $p_serum_value = $_POST['p_serum_value'];
    $p_serum_unit = $_POST['p_serum_unit'];
    $p_serum_range = $_POST['p_serum_range'];
    
    $p_lipid_profit_value = $_POST['p_lipid_profit_value'];
    $p_lipid_profit_unit = $_POST['p_lipid_profit_unit'];
    $p_lipid_profit_range = $_POST['p_lipid_profit_range'];
    
    $p_tsh_value = $_POST['p_tsh_value'];
    $p_tsh_unit = $_POST['p_tsh_unit'];
    $p_tsh_range = $_POST['p_tsh_range'];
    
    $p_sgpt_value = $_POST['p_sgpt_value'];
    $p_sgpt_unit = $_POST['p_sgpt_unit'];
    $p_sgpt_range = $_POST['p_sgpt_range'];
    
    $p_platelet_value = $_POST['p_platelet_value'];
    $p_platelet_unit = $_POST['p_platelet_unit'];
    $p_platelet_range = $_POST['p_platelet_range'];
    
    $p_hiv_value = $_POST['p_hiv_value'];
    $p_hiv_unit = $_POST['p_hiv_unit'];
    $p_hiv_range = $_POST['p_hiv_range'];
    
    $p_chronic_disease_value = $_POST['p_chronic_disease_value'];
    $p_chronic_disease_unit = $_POST['p_chronic_disease_unit'];
    $p_chronic_disease_range = $_POST['p_chronic_disease_range'];

    $p_history_previous_value = $_POST['p_history_previous_value'];
    $p_history_previous_unit = $_POST['p_history_previous_unit'];
    $p_history_previous_range = $_POST['p_history_previous_range'];

    $p_vaccination_value = $_POST['p_vaccination_value'];
    $p_vaccination_unit = $_POST['p_vaccination_unit'];
    $p_vaccination_range = $_POST['p_vaccination_range'];

    $p_present_medication_value = $_POST['p_present_medication_value'];
    $p_present_medication_unit = $_POST['p_present_medication_unit'];
    $p_present_medication_range = $_POST['p_present_medication_range'];

    //error to upload file
    // $filename = $_FILES['d_file']['name'];
    // $temp_name = $_FILES['d_file']['tmp_name'];
    // $path = "./uploads/".$filename;
    
    // move_uploaded_file($temp_name, $path);
    
    include "phpqrcode/qrlib.php";
        $PNG_TEMP_DIR = 'uploads/qrcode/';
        if (!file_exists($PNG_TEMP_DIR)) {
            mkdir($PNG_TEMP_DIR, 0777, true); // Ensure the directory is created with the correct permissions
        }

        // Ensure to sanitize the name for filename
        $p_name = preg_replace("/[^a-zA-Z0-9]+/", "_", $_POST["p_name"]); // Clean the name for use in filename
        $qr_filename = $PNG_TEMP_DIR . $p_name . '.png';

        // Create the string for the QR code
        $codeString = $_POST["p_aadhar"] . "\n" .
                      $_POST["p_name"] . "\n" .
                      $_POST["p_dob"] . "\n" .
                      $_POST["p_address"] . "\n" .
                      $_POST["p_state"] . "\n" .
                      $_POST["p_city"] . "\n" .
                      $_POST["p_email"] . "\n" .
                      $_POST["p_mobile"] . "\n" .
                      $_POST["p_gender"] . "\n" .
                      $_POST["p_hemoglobin_value"] . "\n" .
                      $_POST["p_hemoglobin_unit"] . "\n" .
                      $_POST["p_blood_group_value"] . "\n" .
                      $_POST["p_blood_pressure_value"] . "\n" .
                      $_POST["p_heart_rate_value"] . "\n" .
                      $_POST["p_weight_value"] . "\n" .
                      $_POST["p_fasting_blood_value"] . "\n" .
                      $_POST["p_blood_cbc_value"] . "\n" .
                      $_POST["p_urin_value"] . "\n" .
                      $_POST["p_serum_value"] . "\n" .
                      $_POST["p_lipid_profit_value"] . "\n" .
                      $_POST["p_tsh_value"] . "\n" .
                      $_POST["p_sgpt_value"] . "\n" .
                      $_POST["p_platelet_value"] . "\n" .
                      $_POST["p_hiv_value"] . "\n" .
                      $_POST["p_chronic_disease_value"] . "\n" .
                      $_POST["p_history_previous_value"] . "\n" .
                      $_POST["p_vaccination_value"] . "\n" .
                      $_POST["p_present_medication_value"];

        // Generate the QR code
        QRcode::png($codeString, $qr_filename);

        // Optionally, display the generated QR code
        echo '<img src="' . $qr_filename . '" /><hr/>';

    $sql = "INSERT INTO patient (p_aadhar,p_name, p_dob, p_address, p_state, p_city, p_email, p_mobile,p_gender,p_hemoglobin_value,p_hemoglobin_unit,p_hemoglobin_range,p_blood_group_value,p_blood_group_unit,p_blood_group_range,p_blood_pressure_value,p_blood_pressure_unit,p_blood_pressure_range,
    p_heart_rate_value, p_heart_rate_unit, p_heart_rate_range, p_weight_value, p_weight_unit, p_weight_range,p_fasting_blood_value,p_fasting_blood_unit,p_fasting_blood_range, p_blood_cbc_value,p_blood_cbc_unit,p_blood_cbc_range, p_urin_value,p_urin_unit,p_urin_range, p_serum_value,p_serum_unit,p_serum_range,
    p_lipid_profit_value,p_lipid_profit_unit,p_lipid_profit_range, p_tsh_value,p_tsh_unit,p_tsh_range, p_sgpt_value,p_sgpt_unit,p_sgpt_range, p_platelet_value,p_platelet_unit,p_platelet_range, p_hiv_value,p_hiv_unit,p_hiv_range, p_chronic_disease_value,p_chronic_disease_unit,p_chronic_disease_range,
    p_history_previous_value,p_history_previous_unit,p_history_previous_range, p_vaccination_value,p_vaccination_unit,p_vaccination_range, p_present_medication_value,p_present_medication_unit,p_present_medication_range, d_file)

           VALUES ('$p_aadhar','$p_name', '$p_dob', '$p_address', '$p_state', '$p_city', '$p_email', '$p_mobile','$p_gender','$p_hemoglobin_value','$p_hemoglobin_unit','$p_hemoglobin_range','$p_blood_group_value','$p_blood_group_unit',' $p_blood_group_range','$p_blood_pressure_value','$p_blood_pressure_unit','$p_blood_pressure_range',
           '$p_heart_rate_value', '$p_heart_rate_unit', '$p_heart_rate_range', '$p_weight_value', '$p_weight_unit', '$p_weight_range','$p_fasting_blood_value','$p_fasting_blood_unit','$p_fasting_blood_range','$p_blood_cbc_value','$p_blood_cbc_unit','$p_blood_cbc_range','$p_urin_value','$p_urin_unit','$p_urin_range','$p_serum_value','$p_serum_unit','$p_serum_range',
           '$p_lipid_profit_value','$p_lipid_profit_unit','$p_lipid_profit_range','$p_tsh_value','$p_tsh_unit','$p_tsh_range','$p_sgpt_value','$p_sgpt_unit','$p_sgpt_range','$p_platelet_value','$p_platelet_unit','$p_platelet_range','$p_hiv_value','$p_hiv_unit','$p_hiv_range','$p_chronic_disease_value','$p_chronic_disease_unit','$p_chronic_disease_range',
           '$p_history_previous_value','$p_history_previous_unit','$p_history_previous_range','$p_vaccination_value','$p_vaccination_unit','$p_vaccination_range','$p_present_medication_value','$p_present_medication_unit','$p_present_medication_range','$qr_filename')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // echo "the record has been inserted successfully successfully!<br>";
        $insert = true;

        echo '<script>alert("Data inserted successfully")</script>';
    } else {
        echo "the record was not inserted syccessfully because of this error ---> " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/add_patient.css">
</head>

<body>
    <div class="patient_body">

        <div class="patient_container" style="margin-top:50%">

            <div class="patient_title">Patient Registration </div>

            <form action="add_patient.php" method="post">

                <div class="patient_user_details">
                <div class="patient_input_box">
                        <span class="details">Aadhar Number <span style="color: red; margin:2px;">*</span></span>
                        <input type="text" placeholder="Enter Your Aadhar Number" name="p_aadhar" required>
                    </div>
                    <div class="patient_input_box">
                        <span class="details" pattern="^\S+$">Full Name<span style="color: red; margin:2px;">*</span></span>
                        <input type="text" placeholder="Enter Patient Full Name" name="p_name" required>
                    </div>
                    <div class="patient_input_box">
                        <span class="details">Date Of Birth <span style="color: red; margin:2px;">*</span></span>
                        <input type="date" placeholder="DOB" name="p_dob" required>
                    </div>
                    <div class="patient_input_box">
                        <span class="details">Address<span style="color: red; margin:2px;">*</span></span>
                        <input type="text" placeholder="Enter Your Address" name="p_address" required>
                    </div>
                    <div class="patient_input_box">
                        <span class="details">State<span style="color: red; margin:2px;">*</span></span>
                        <input type="text" placeholder="Enter Your State" name="p_state" required>
                    </div>
                    <div class="patient_input_box">
                        <span class="details">City<span style="color: red; margin:2px;">*</span></span>
                        <input type="text" placeholder="Enter Your City" name="p_city" required>
                    </div>
                    <div class="patient_input_box">
                        <span class="details">Email<span style="color: red; margin:2px;">*</span></span>
                        <input type="email" placeholder="Enter Your Email" name="p_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                    </div>
                    <div class="patient_input_box">
                        <span class="details">Mobile Number<span style="color: red; margin:2px;">*</span></span>
                        <input type="text" placeholder="Enter Your Mobile number" name="p_mobile" required>
                    </div>
                    <div class="patient_input_box patient_input_box1">
                        <div class="patient_gender">
                            <span class="details">Gender<span style="color: red; margin:2px;">*</span></span>
                            <div class="option">
                                <input class="xyz" type="radio" name="p_gender" value="Male">
                                <span class="details1">Male</span>
                                <input type="radio" name="p_gender" value="Female">
                                <span class="details1">Female</span>
                                <input type="radio" name="p_gender" value="Other">
                                <span class="details1">Other</span>
                            </div>
                        </div>
                        
                       
                    </div>
                    <div class="patient_input_box">
                    <span class="details">Upload Photo<span style="color: red; margin:2px;">*</span></span>
                                    <input class="" type="file" style="border: none;" name="file" id="fileInput" placeholder="Upload Digital Initiatives  ..">
                                    <div id="preview"></div>
                    </div>
                     
                </div>
                <hr class="horizontal-line">
                <!-- ------------------------------------------------------------>
                <div class="patient_user_details">

                    <table>
                        <tr>
                            <th>NAME OF TEST </th>
                            <th>OBSERVED VALUES</th>
                            <th>UNIT</th>
                            <th>NORMAL RANGE</th>
                        </tr>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tr>
                            <th>Hemoglobin <span style="color: red; margin:2px;">*</span></th>
                            <td><input class="input" type="number" placeholder="Enter Hemoglobin" name="p_hemoglobin_value"></td>
                            <!-- <td><input class="input" type="text" placeholder="Enter Unit " name="p_hemoglobin_unit"></td> -->
                            <td><select class="input" name="p_hemoglobin_unit">
                            <option value=" " disabled selected hidden>--Select--</option>
                            <option value="g/dl">g/dl</option>
                            <option value="milli./cu.mm">milli./cu.mm</option>
                            <option value="%">%</option>
                            <option value="fl">fl</option>
                            <option value="pg">pg</option>
                            <option value="c/mm">/cumm</option>
                            </select></td>
                            <!-- <td><input class="input" type="number" placeholder="Enter Normal Range" name="p_hemoglobin_range"></td> -->
                            <td><select class="input" name="p_hemoglobin_range">
                            <option value=" " disabled selected hidden>--Select--</option>
                            <option value="12-16">12-16</option>
                            <option value="4.5-5.9">4.5-5.9</option>
                            <option value="33-51">33-51</option>
                            <option value="80-100">80-100</option>
                            <option value="26-34">26-34</option>
                            <option value="32-36">32-36</option>
                            <option value="11-16">11-16</option>
                            <option value="35-56">35-56</option>
                            <option value="4500-11000">4500-11000</option>
                            </select></td> 
                        </tr>
                        <tr>
                            <th>Blood Group<span style="color: red; margin:2px;">*</span></th>
                            <td><select class="input" name="p_blood_group_value">
                            <option value=" " disabled selected hidden>--Select--</option>
                            <option value="O +ve">O +ve</option>
                            <option value="O -ve">O -ve</option>
                            <option value="A +ve">A +ve</option>
                            <option value="A -ve">A - ve</option>
                            <option value="B +ve">B +ve</option>
                            <option value="B -ve">B -ve</option>
                            <option value="AB +ve">AB +ve</option>
                            <option value="AB -ve">AB -ve</option>
                            </select></td>
                            <td><input class="input" type="number" placeholder="Enter Unit " name="p_blood_group_unit"></td>
                            <td><input class="input" type="number" placeholder="Enter Normal Range" name="p_blood_group_range"></td>
                        
                        </tr>
                        <tr>
                            <th>Blood Pressure Range (B.P)<span style="color: red; margin:2px;">*</span></th>
                            <td><input class="input" type="number" placeholder="Enter Blood Pressure Range (B.P)" name="p_blood_pressure_value"></td>
                            <!-- <td><input class="input" type="number" placeholder="Enter Unit " name="p_blood_pressure_unit"></td> -->
                            <td><select class="input" name="p_blood_pressure_unit">
                            <option value=" " disabled selected hidden>--Select--</option>
                            <option value="mmHg">mmHg</option>
                            </select></td>
                            <td><input class="input" type="number" placeholder="Enter Normal Range" name="p_blood_pressure_range"></td>
        
                        </tr>
                        <tr>
                            <th>Heart rates/Puls Rate<span style="color: red; margin:2px;">*</span></th>
                            <td><input class="input" type="number" placeholder="Enter Heart rates/Puls Rate" name="p_heart_rate_value"></td>
                            <!-- <td><input class="input" type="number" placeholder="Enter Unit " name="p_heart_rate_unit"></td> -->
                            <td><select class="input" name="p_heart_rate_unit">
                            <option value=" " disabled selected hidden>--Select--</option>
                            <option value="BPM">BPM</option>
                            </select></td>
                            <td><input class="input" type="number" placeholder="Enter Normal Range" name="p_heart_rate_range"></td>
                            
                        </tr>
                        <tr>
                            <th>Weight<span style="color: red; margin:2px;">*</span></th>
                            <td><input class="input" type="number" placeholder="Enter Weight" name="p_weight_value"></td>
                            <!-- <td><input class="input" type="number" placeholder="Enter Unit " name="p_weight_unit"></td> -->
                            <td><select class="input" name="p_weight_unit">
                            <option value=" " disabled selected hidden>--Select--</option>
                            <option value="kg">kg</option>
                            </select></td>
                            <td><input class="input" type="number" placeholder="Enter Normal Range" name="p_weight_range"></td>
                            
                        </tr>
                        <tr>
                            <th>Fasting Blood Sugar<span style="color: red; margin:2px;">*</span></th>
                            <td><input class="input" type="number" placeholder="Enter Fasting Blood Sugar" name="p_fasting_blood_value"></td>
                            <!-- <td><input class="input" type="number" placeholder="Enter Unit " name="p_fasting_blood_unit"></td> -->
                            <td><select class="input" name="p_fasting_blood_unit">
                            <option value=" " disabled selected hidden>--Select--</option>
                            <option value="mg/dL">mg/dL</option>
                            <option value=" mmol/L"> mmol/L</option>
                            </select></td>
                            <td><input class="input" type="number" placeholder="Enter Normal Range" name="p_fasting_blood_range"></td>
                            
                        </tr>
                        <tr>
                            <th>Blood CBC<span style="color: red; margin:2px;">*</span></th>
                            <td><input class="input" type="number" placeholder="Enter Blood CBC" name="p_blood_cbc_value"></td>
                            <!-- <td><input class="input" type="number" placeholder="Enter Unit " name="p_blood_cbc_unit"></td> -->
                            <td><select class="input" name="p_blood_cbc_unit">
                            <option value=" " disabled selected hidden>--Select--</option>
                            <option value="mm3">mm3</option>
                            <option value="fL">fL</option>
                            </select></td>
                            <td><input class="input" type="number" placeholder="Enter Normal Range" name="p_blood_cbc_range"></td>
                            
                        </tr>
                        <tr>
                            <th>Urine<span style="color: red; margin:2px;">*</span></th>
                            <td><input class="input" type="number" placeholder="Enter Urine" name="p_urin_value"></td>
                            <!-- <td><input class="input" type="number" placeholder="Enter Unit " name="p_urin_unit"></td> -->
                            <td><select class="input" name="p_urin_unit">
                            <option value=" " disabled selected hidden>--Select--</option>
                            <option value="mg/day">mg/day</option>
                            <option value="mg/g">mg/g</option>
                            <option value="ml/s">ml/s</option>
                            <option value="mOsm/kg">mOsm/kg</option>
                            </select></td>
                            <td><input class="input" type="number" placeholder="Enter Normal Range" name="p_urin_range"></td>
                            
                        </tr>
                        <tr>
                            <th>Serum Creatinine<span style="color: red; margin:2px;">*</span></th>
                            <td><input class="input" type="number" placeholder="Enter Serum Creatinine" name="p_serum_value"></td>
                            <!-- <td><input class="input" type="number" placeholder="Enter Unit " name="p_serum_unit"></td> -->
                            <td><select class="input" name="p_serum_unit">
                            <option value=" " disabled selected hidden>--Select--</option>
                            <option value="mg/dL">mg/dL</option>
                            <option value="micromoles/L">micromoles/L</option>
                            </select></td>
                            <td><input class="input" type="number" placeholder="Enter Normal Range" name="p_serum_range"></td>
                            
                        </tr>
                        <tr>
                            <th>Lepid Profile<span style="color: red; margin:2px;">*</span></th>
                            <td><input class="input" type="number" placeholder="Enter Lepid Profile" name="p_lipid_profit_value"></td>
                            <!-- <td><input class="input" type="number" placeholder="Enter Unit " name="p_lipid_profit_unit"></td> -->
                            <td><select class="input" name="p_lipid_profit_unit">
                            <option value=" " disabled selected hidden>--Select--</option>
                            <option value="mg/dL">mg/dL</option>
                            </select></td>
                            <td><input class="input" type="number" placeholder="Enter Normal Range" name="p_lipid_profit_range"></td>
                            
                        </tr>
                        <tr>
                            <th>Tsh<span style="color: red; margin:2px;">*</span></th>
                            <td><input class="input" type="number" placeholder="Enter Tsh" name="p_tsh_value"></td>
                            <!-- <td><input class="input" type="number" placeholder="Enter Unit " name="p_tsh_unit"></td> -->
                            <td><select class="input" name="p_tsh_unit">
                            <option value=" " disabled selected hidden>--Select--</option>
                            <option value="mg/dL">mIU/L</option>
                            </select></td>
                            <td><input class="input" type="number" placeholder="Enter Normal Range" name="p_tsh_range"></td>
                            
                        </tr>
                        <tr>
                            <th>Sgpt<span style="color: red; margin:2px;">*</span></th>
                            <td><input class="input" type="number" placeholder="Enter Sgpt" name="p_sgpt_value"></td>
                            <!-- <td><input class="input" type="number" placeholder="Enter Unit " name="p_sgpt_unit"></td> -->
                            <td><select class="input" name="p_sgpt_unit">
                            <option value=" " disabled selected hidden>--Select--</option>
                            <option value="U/L">U/L</option>
                            </select></td>
                            <td><input class="input" type="number" placeholder="Enter Normal Range" name="p_sgpt_range"></td>
                            
                        </tr>
                        <tr>
                            <th>Platelet Count<span style="color: red; margin:2px;">*</span></th>
                            <td><input class="input" type="number" placeholder="Enter Platelet Count" name="p_platelet_value"></td>
                            <!-- <td><input class="input" type="number" placeholder="Enter Unit " name="p_platelet_unit"></td> -->
                            <td><select class="input" name="p_platelet_unit">
                            <option value=" " disabled selected hidden>--Select--</option>
                            <option value="Lakh/cumm">Lakh/cumm</option>
                            <option value="fl">fl</option>
                            </select></td> 
                            <!-- <td><input class="input" type="number" placeholder="Enter Normal Range" name="p_platelet_range"></td> -->
                            <td><select class="input" name="p_platelet_range">
                            <option value=" " disabled selected hidden>--Select--</option>
                            <option value="1.5-4.5">1.5-4.5</option>
                            <option value="6.5-12.0">6.5-12.0</option>
                            <option value="15-17">15-17</option>
                            </select></td> 
                            
                        </tr>
                        <tr>
                            <th>HIV<span style="color: red; margin:2px;">*</span></th>
                            <td><input class="input" type="number" placeholder="Enter HIV" name="p_hiv_value"></td>
                            <!-- <td><input class="input" type="number" placeholder="Enter Unit " name="p_hiv_unit"></td> -->
                            <td><select class="input" name="p_hiv_unit">
                            <option value=" " disabled selected hidden>--Select--</option>
                            <option value="copies/mL">copies/mL</option>
                            </select></td>
                            <td><input class="input" type="number" placeholder="Enter Normal Range" name="p_hiv_range"></td>
                            
                        </tr>
                        <tr>
                            <th>Chronic Disease<span style="color: red; margin:2px;">*</span></th>
                            <!-- i don't know chronic disease units -->
                            <td><input class="input" type="number" placeholder="Enter Chronic Disease" name="p_chronic_disease_value"></td>
                            <td><input class="input" type="number" placeholder="Enter Unit " name="p_chronic_disease_unit"></td>
                            <td><input class="input" type="number" placeholder="Enter Normal Range" name="p_chronic_disease_range"></td>
                            
                        </tr>
                        <tr>
                            <th>History of previous illnesses<span style="color: red; margin:2px;">*</span></th>
                            <td><input class="input" type="number" placeholder="Enter History of previous illnesses" name="p_history_previous_value"></td>
                            <!-- i don't know History of previous illnesses units -->
                            <td><input class="input" type="number" placeholder="Enter Unit " name="p_history_previous_unit"></td>
                            <td><input class="input" type="number" placeholder="Enter Normal Range" name="p_history_previous_range"></td>
                            
                        </tr>
                        <tr>
                            <th>Vaccinations<span style="color: red; margin:2px;">*</span></th>
                            <td><input class="input" type="number" placeholder="Enter Vaccinations" name="p_vaccination_value"></td>
                             <!-- i don't know Vaccinations units -->
                            <td><input class="input" type="number" placeholder="Enter Unit " name="p_vaccination_unit"></td>
                            <td><input class="input" type="number" placeholder="Enter Normal Range" name="p_vaccination_range"></td>
                            
                        </tr>
                        <tr>
                            <th>Present Medications<span style="color: red; margin:2px;">*</span></th>
                            <td><input class="input" type="number" placeholder="Enter Present Medications" name="p_present_medication_value"></td>
                            <!-- <td><input class="input" type="number" placeholder="Enter Unit " name="p_present_medication_unit"></td> -->
                            <td><select class="input" name="p_present_medication_unit">
                            <option value=" " disabled selected hidden>--Select--</option>
                            <option value="kg">kg</option>
                            <option value="g">g</option>
                            <option value="mg">mg</option>
                            <option value="L">L</option>
                            <option value="ml">ml</option>
                            <option value="cc">cc</option>
                            <option value="mol">mol</option>
                            </select></td>
                            <td><input class="input" type="number" placeholder="Enter Normal Range" name="p_present_medication_range"></td>
                        </tr>
                    </table>
                    <div class="patient_input_box">
                        <span class="details">Uplod Document</span>
                        <input type="file" style="border: none;" placeholder="" name="d_file" >
                    </div>






                    <!-- <div class="patient_input_box">
                        <span class="details">Haemoglobin</span>
                        <input type="number" placeholder="Enter Your Hemoglobin" name="p_hemoglobin" required>
                    </div>
                    <div class="patient_input_box">
                        <span class="details">Blood Pressure Range</span>
                        <input type="text" placeholder="Enter Blood Pressure Range " name="p_blood_pressure" required>
                    </div>
                    <div class="patient_input_box">
                        <span class="details">Blood Group</span>
                        <select name="p_blood_group">
                            <option value=" " disabled selected hidden>--Select--</option>
                            <option value="O +ve">O +ve</option>
                            <option value="O -ve">O -ve</option>
                            <option value="A +ve">A +ve</option>
                            <option value="A -ve">A - ve</option>
                            <option value="B +ve">B +ve</option>
                            <option value="B -ve">B -ve</option>
                            <option value="AB +ve">AB +ve</option>
                            <option value="AB -ve">AB -ve</option>
                        </select>
                    </div>
                    <div class="patient_input_box">
                        <span class="details">Heart rates</span>
                        <input type="text" placeholder="Enter Your Heart rates" name="p_heart_rate" required>
                    </div>
                    <div class="patient_input_box">
                        <span class="details">Weight</span>
                        <input type="text" placeholder="Enter Your Weight" name="p_weight" required>
                    </div>
                    <div class="patient_input_box">
                        <span class="details">Fasting Blood Sugar</span>
                        <input type="text" placeholder="Enter Your Fasting Blood Sugar" name="p_fasting_blood" required>
                    </div>
                    <div class="patient_input_box">
                        <span class="details">Blood CBC</span>
                        <input type="text" placeholder="Enter Your Blood CBC" name="p_blood_cbc" required>
                    </div>
                    <div class="patient_input_box">
                        <span class="details">Urin</span>
                        <input type="text" placeholder="Enter Your Urin" name="p_u rin" required>
                    </div>
                    <div class="patient_input_box">
                        <span class="details">Serum Creatinine</span>
                        <input type="text" placeholder="Enter Your Serum Creatinine" name="p_serum" required>
                    </div>
                    <div class="patient_input_box">
                        <span class="details">Lipid Profit</span>
                        <input type="text" placeholder="Enter Your Lipid Profit" name="p_lipid_profit" required>
                    </div>
                    <div class="patient_input_box">
                        <span class="details">TSH</span>
                        <input type="text" placeholder="Enter Your TSH" name="p_tsh" required>
                    </div>
                    <div class="patient_input_box">
                        <span class="details">SGPT</span>
                        <input type="text" placeholder="Enter Your SGPT" name="p_sgpt" required>
                    </div>
                    <div class="patient_input_box">
                        <span class="details">Platelet Count</span>
                        <input type="text" placeholder="Enter Your Platelet Count" name="p_platelet" required>
                    </div>
                    <div class="patient_input_box">
                        <span class="details">HIV</span>
                        <input type="text" placeholder="Enter Your HIV" name="p_hiv" required>
                    </div>
                    <div class="patient_input_box">
                        <span class="details">Chronic disease</span>
                        <input type="text" placeholder="Enter Your Chroinc disease" name="p_chronic_disease" required>
                    </div> -->
                    <div class="btnPatient">
                        <button type="submit">Add Patient</button>
                        <input type="Reset" style="background-color: #EDE8DC; color:black;" value="Reset">
                        <input type="submit" style="background-color: red;" value="Cancel" onclick="window.location='Dashboard1.php'">
                    </div>
                    
                </div>

        </div>
        </form>
    </div>
    </div>
    </div>
</body>
<script src="./js/add_patient.js"></script>


</html>