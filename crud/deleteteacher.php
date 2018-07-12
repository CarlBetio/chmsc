<?php
if(ISSET($_POST['deleteteacher'])){
    $teacher_id = $_POST['teacher_id'];
   
	
	$conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());
	$query = $conn->query("SELECT * FROM `tblteacher`") or die(mysqli_error());
	$fetch = $query->fetch_array();
	

	$conn->query("DELETE FROM `tblteacher` WHERE `teacher_id` = '$teacher_id'") or die(mysqli_error());


	echo "<script type='text/javascript'>alert('Successfully deleted teacher!');</script>";
	echo "<script>document.location='../teachers.php'</script>";  
}

?>