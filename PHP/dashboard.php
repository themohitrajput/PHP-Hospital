 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/home.css">
    <!-- <link rel="stylesheet" href="../css/dashboard.css"> -->
    <title>Document</title>
 </head>
 <body>
    <!-- <div class="dashboard-page"> -->
 <div class="box-container">
 <?php    
    include './database/db.php';
    // patient Count
    $q1 = "SELECT count(p_id) as p_id FROM `patient`";
    $result1 = mysqli_query($conn, $q1);
    $patient_count = mysqli_fetch_assoc($result1);
    ?>

<div class="box box1">
    <div class="text">
        <h2 class="topic-heading"><?php echo $patient_count['p_id'];?></h2>
        <h2 class="topic">Total Patient</h2>
    </div>

    <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210184645/Untitled-design-(31).png"
        alt="Views">
</div>

<!-- <div class="box box2">
    <div class="text">
        <h2 class="topic-heading">150</h2>
        <h2 class="topic">##</h2>
    </div>

    <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210185030/14.png" alt="likes">
</div> -->

<div class="box box3">
    <div class="text">
        <h2 class="topic-heading">1</h2>
        <h2 class="topic">User</h2>
    </div>

    <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210184645/Untitled-design-(32).png"
        alt="comments">
</div>

<!-- <div class="box box4">
    <div class="text">
        <h2 class="topic-heading">#</h2>
        <h2 class="topic">#</h2>
    </div>

    <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210185029/13.png" alt="published">
</div> -->
</div>


<!-- </div> -->
 </body>
 </html>

