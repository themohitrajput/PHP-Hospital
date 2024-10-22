<?php 
$insert = false;
$servername = "localhost";
$username = "root";
$password = "";
$database = "nagrath_db";

$con = mysqli_connect($servername, $username, $password, $database);

if(!$con){
  die("sorry we failed to connect: ".mysql_connect_error());
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $p_name = $_POST["p_name"];
  $p_dob = $_POST["p_dob"];
  $p_address=$_POST['p_address'];
  $p_state=$_POST['p_state'];
  $p_city=$_POST['p_city'];
  $p_email=$_POST['p_email'];
  $p_mobile=$_POST['p_mobile'];
  $p_hemoglobin=$_POST['p_hemoglobin'];
  $p_blood_pressure=$_POST['p_blood_pressure'];
  $p_blood_group = $_POST['p_blood_group'];
  $p_heart_rate = $_POST['p_heart_rate'];
  $p_weight = $_POST['p_weight'];
  $p_fasting_blood = $_POST['p_fasting_blood'];
  $p_blood_cbc = $_POST['p_blood_cbc'];
//   $p_urin = $_POST['p_urin'];
  $p_serum = $_POST['p_serum'];
  $p_lipid_profit = $_POST['p_lipid_profit'];
  $p_tsh = $_POST['p_tsh'];
  $p_sgpt = $_POST['p_sgpt'];
  $p_platelet = $_POST['p_platelet'];
  $p_hiv = $_POST['p_hiv'];
  $p_chronic_disease = $_POST['p_chronic_disease'];
  $p_gender = $_POST['p_gender'];

  $sql = "INSERT INTO patient (p_name, p_dob, p_address, p_state, p_city, p_email, p_mobile, p_hemoglobin, 
                    p_blood_pressure, p_blood_group, p_heart_rate, p_weight, p_fasting_blood, p_blood_cbc, 
                    p_serum, p_lipid_profit, p_tsh, p_sgpt, p_platelet, p_hiv, p_chronic_disease, p_gender)
           VALUES ('$p_name', '$p_dob', '$p_address', '$p_state', '$p_city', '$p_email', '$p_mobile', ' $p_hemoglobin',
                  '$p_blood_pressure', '$p_blood_group', '$p_heart_rate', '$p_weight', '$p_fasting_blood','$p_blood_cbc',
                  '$p_serum', '$p_lipid_profit', '$p_tsh', '$p_sgpt', '$p_platelet', '$p_hiv', '$p_chronic_disease', '$p_gender')";
$result = mysqli_query($con, $sql);

  if($result){
    // echo "the record has been inserted successfully successfully!<br>";
    $insert = true;
  }
  else{
    echo "the record was not inserted syccessfully because of this error ---> ". mysqli_error($con);
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="add_patient.css">
</head>
<body>
    <div class="patient_body">
         <div class="patient_container">
            <div class="patient_title">Patient Registration </div>

            <form action="add_patient.php" method="post">

                <div class="patient_user_details">
                    <div class="patient_input_box">
                        <span class="details" pattern="^\S+$">Full Name</span>
                        <input type="text" placeholder="Enter Patient Full Name" name="p_name" required>
                    </div>
                    <div class="patient_input_box">
                        <span class="details">Date Of Birth</span>
                        <input type="date" placeholder="DOB" name="p_dob" required>
                    </div>
                    <div class="patient_input_box">
                        <span class="details">Address</span>
                        <input type="text" placeholder="Enter Your Address" name="p_address" required>
                    </div>
                    <div class="patient_input_box">
                        <span class="details">State</span>
                        <input type="text" placeholder="Enter Your State" name="p_state" required>
                    </div>
                    <div class="patient_input_box">
                        <span class="details">City</span>
                        <input type="text" placeholder="Enter Your City" name="p_city" required>
                    </div>
                     <div class="patient_input_box">
                        <span class="details" >Email</span>
                        <input type="text" placeholder="Enter Your Email" name="p_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                    </div>
                     <div class="patient_input_box">
                        <span class="details" >Mobile Number</span>
                        <input type="text" placeholder="Enter Your Mobile number" name="p_mobile" pattern="[0-9].{10,}" required>
                    </div>
                    <div class="patient_input_box">
                        <span class="details">Hemoglobin</span>
                        <input type="text" placeholder="Enter Your Hemoglobin" name="p_hemoglobin" required>
                    </div>
                    <div class="patient_input_box">
                        <span class="details">Blood Pressure Range</span>
                        <input type="text" placeholder="Enter Blood Pressure Range " name="p_blood_pressure" required>
                    </div>
                    <div class="patient_input_box">
                        <span class="details">Blood Group</span>
                        <select name="p_blood_group"><option value=" " disabled selected hidden>--Select--</option><option value="O +ve">O +ve</option><option value="O -ve">O -ve</option><option value="A +ve">A +ve</option><option value="A -ve">A - ve</option><option value="B +ve">B +ve</option><option value="B -ve">B -ve</option><option value="AB +ve">AB +ve</option><option value="AB -ve">AB -ve</option></select>
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
                        <input type="text" placeholder="Enter Your Urin" name="p_urin" required>
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
                    </div>
                    <div class="patient_gender">
                        <span  class="gender-title">Gender</span>
                        <input type="radio" name="p_gender" value="male">Male
                        <input type="radio" name="p_gender" value="female">Female
                    </div>
                    <div class="btnPatient">
                        <button type="submit" >Add Patient</button>
                        <input type="Reset" value="Clear Details">
                        <input type="submit" value="Cancel" onclick="window.location='Dashboard1.php'">
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>        
</body>
</html>