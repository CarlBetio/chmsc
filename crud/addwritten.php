<?php

if(ISSET($_POST['addwritten'])){
    $highest = $_POST['highest'];
    $number = $_POST['number'];
    $teacher_id = $_POST['teacher_id'];
    $subject_name = $_POST['subject_name'];

    $conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());

    $conn->query("INSERT INTO `writtenworks` VALUES('', '$highest', '$number', '$teacher_id', '$subject_name')") or die(mysqli_error());
    $conn->close();
    echo "<script type='text/javascript'>alert('Successfully added new written works!');</script>";
    echo "<script>document.location='../addscores.php?id=$teacher_id&subject_name=$subject_name'</script>";  

}

?>