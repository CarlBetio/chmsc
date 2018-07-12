<?php
if(ISSET($_POST['deletesubject'])){
    $subject_id = $_POST['subject_id'];
   
	
	$conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());
	
	$conn->query("DELETE FROM `tblsubjects` WHERE `subject_id` = '$subject_id'") or die(mysqli_error());


	echo "<script type='text/javascript'>alert('Successfully deleted subject!');</script>";
	echo "<script>document.location='../subjects.php'</script>";  
}

?>