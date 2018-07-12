<?php
if(ISSET($_POST['deletestudent'])){
    $enroll_id = $_POST['enroll_id'];
    $teacher_id = $_POST['teacher_id'];
    $subject_name = $_POST['subject_name'];
    $school_year = $_POST['school_year'];
   
	
	$conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());
	
	$conn->query("DELETE FROM `enrollstudent` WHERE `enroll_id` = '$enroll_id'") or die(mysqli_error());


	echo "<script type='text/javascript'>alert('Successfully deleted student!');</script>";
	echo "<script>document.location='../studentslist.php?id=$teacher_id&subject_name=$subject_name&school_year=$school_year'</script>";  
}

?>