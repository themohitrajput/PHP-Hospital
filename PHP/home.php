<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,
				initial-scale=1.0">
	<title>Nagrath Charitable Trust</title>
	<link rel="shortcut icon" href="#" type="logo/x-icon">
	<link rel="stylesheet" href="./css/home.css">
</head>

<body onload="triggerBtnClick()">

	<!------------------------- for header part ---------------------------->
	<header>

		<div class="logosec">
			<div class="logo"><a href="#"><img src="./logo/logo.png"></a></div>
			<img src="./icon/burger-bar.png" class="icn menuicn" id="menuicn" alt="menu-icon">
		</div>

		<!-- <div class="searchbar">
			<input type="text" placeholder="Search">
			<div class="searchbtn">
				<img src="./icon/search.png" class="icn srchicn" alt="search-icon">
			</div>
		</div> -->

		<!-- <div class="message" onclick="loadPage('important_alerts.php')">
			<div class="circle"></div>
			<img src="./icon/bell.png" class="icn" alt="">
		</div> -->

		<div class="message dropdown">
			<button onclick="myFunction()"><img src="./icon/profile-user.png" class="dropbtn" alt="dp"></button>
			<div id="myDropdown" class="dropdown-content">
				<!-- <a href="#add_user">Add User</a> -->
				<!-- <a href="#">Preferences</a> -->
				<a href="./controller/logout.php"><img src="./icon/logout.png" style="width: 20px; height: 20px; " alt="" srcset=""> Log out</a>
			</div>
		</div>
		</div>


	</header>
	<!------------------------- for header part End ---------------------------->

	<div class="main-container">
		<div class="navcontainer" id="nav">
			<nav class="nav">
				<div class="nav-upper-options">
					<div class="nav-option option1 active" id="btn" onclick="loadPage('dashboard.php')">
						<img src="./icon/dashboard.png" class="nav-img" alt="dashboard">
						<h4>Dashboard</h4>
					</div>

					<div class="option1 nav-option" onclick="loadPage('add_patient.php')">
						<img src="./icon/categorization.png" class="nav-img" alt="articles">
						<h4>Add Patient</h4>
					</div>
					<div class="option1 nav-option" onclick="loadPage('patient_info.php')">
						<img src="./icon/categorization.png" class="nav-img" alt="articles">
						<h4>Patient Info</h4>
					</div>

				</div>
			</nav>
		</div>


		<!------------------------------------------------ Main-start ------------------------------------>
		<div class="main">
			<iframe id="iframe-content" width="100%" height="100%" frameborder="0">
			</iframe>
		</div>

		<!-------------------------------------- java script ------------------------------->
		<script src="./js/index.js">


		</script>
</body>

</html>