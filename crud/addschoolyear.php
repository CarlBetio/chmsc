<?php
if(ISSET($_POST['addyear'])){
    $school_year = $_POST['school_year'];
    $conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());

    $q1 = $conn->query ("SELECT * FROM `schoolyear` WHERE BINARY `school_year` = '$school_year'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;
    if($check > 0){
        echo "<script> alert ('This school year already exist in records!')</script>";
        echo "<script>document.location='../schoolyear.php'</script>";
    }
    else {
        $conn->query("INSERT INTO `schoolyear` VALUES('', '$school_year')") or die(mysqli_error());
        $conn->close();
        echo "<script type='text/javascript'>alert('Successfully added new school year!');</script>";
        echo "<script>document.location='../schoolyear.php'</script>"; 
    }



}
?>