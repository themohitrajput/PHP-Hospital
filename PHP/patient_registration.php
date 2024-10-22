<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Registration Form</title>
    <link rel="stylesheet" href="./css//patient_registration.css">
</head>
<body>
    <div class="container">
        <h2>Medical Registration Form</h2>
        <form id="registrationForm">
            <div class="form-group">
                <label for="organization">Organization:</label>
                <input type="text" id="organization" name="organization" required>
            </div>
            <div class="form-group">
                <label for="fieldOfficer">Field Officer:</label>
                <input type="text" id="fieldOfficer" name="fieldOfficer" required>
            </div>
            <div class="form-group">
                <label for="patient">Patient:</label>
                <input type="text" id="patient" name="patient" required>
            </div>
            <div class="form-group">
                <label for="doctor">Doctor:</label>
                <input type="text" id="doctor" name="doctor" required>
            </div>

            <!-- Medical Tests -->
            <h3>Medical Tests</h3>
            <div class="form-group">
                <label for="hemoglobin">Hemoglobin:</label>
                <input type="text" id="hemoglobin" name="hemoglobin">
            </div>
            <div class="form-group">
                <label for="bloodGroup">Blood Group:</label>
                <input type="text" id="bloodGroup" name="bloodGroup">
            </div>
            <div class="form-group">
                <label for="bloodPressure">Blood Pressure Range (B.P):</label>
                <input type="text" id="bloodPressure" name="bloodPressure">
            </div>
            <div class="form-group">
                <label for="heartRate">Heart Rate/Pulse Rate:</label>
                <input type="text" id="heartRate" name="heartRate">
            </div>
            <div class="form-group">
                <label for="weight">Weight:</label>
                <input type="text" id="weight" name="weight">
            </div>
            <div class="form-group">
                <label for="fastingBloodSugar">Fasting Blood Sugar:</label>
                <input type="text" id="fastingBloodSugar" name="fastingBloodSugar">
            </div>
            <div class="form-group">
                <label for="bloodCBC">Blood CBC:</label>
                <input type="text" id="bloodCBC" name="bloodCBC">
            </div>
            <div class="form-group">
                <label for="urine">Urine:</label>
                <input type="text" id="urine" name="urine">
            </div>
            <div class="form-group">
                <label for="serumCreatinine">Serum Creatinine:</label>
                <input type="text" id="serumCreatinine" name="serumCreatinine">
            </div>
            <div class="form-group">
                <label for="lipidProfile">Lipid Profile:</label>
                <input type="text" id="lipidProfile" name="lipidProfile">
            </div>
            <div class="form-group">
                <label for="tsh">TSH:</label>
                <input type="text" id="tsh" name="tsh">
            </div>
            <div class="form-group">
                <label for="sgpt">SGPT:</label>
                <input type="text" id="sgpt" name="sgpt">
            </div>
            <div class="form-group">
                <label for="plateletCount">Platelet Count:</label>
                <input type="text" id="plateletCount" name="plateletCount">
            </div>
            <div class="form-group">
                <label for="hiv">HIV:</label>
                <input type="text" id="hiv" name="hiv">
            </div>
            <div class="form-group">
                <label for="chronicDisease">Chronic Disease:</label>
                <input type="text" id="chronicDisease" name="chronicDisease">
            </div>

            <!-- Additional Information -->
            <h3>Additional Information</h3>
            <div class="form-group">
                <label for="previousIllnesses">History of Previous Illnesses:</label>
                <textarea id="previousIllnesses" name="previousIllnesses"></textarea>
            </div>
            <div class="form-group">
                <label for="vaccinations">Vaccinations:</label>
                <textarea id="vaccinations" name="vaccinations"></textarea>
            </div>
            <div class="form-group">
                <label for="presentMedications">Present Medications:</label>
                <textarea id="presentMedications" name="presentMedications"></textarea>
            </div>
            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>

    <script src="scripts.js"></script>
</body>
</html>
