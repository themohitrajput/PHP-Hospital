<?php
    include './database/db.php';

    if(isset($_GET['deleteid'])){
        $id =$_GET['deleteid'];

        $sql= " delete from `patient` where p_id = $id";
        $result=mysqli_query($conn,$sql);

        if($result){
            echo '<script>alert("Data Deleted Successfully")</script>';
            header('location:patient_info.php');
        }
        else{
            die(mysqli_errno($conn));
        }
    }
    ?>