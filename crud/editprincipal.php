<?php
if(ISSET($_POST['editprincipal'])){
    $principal_id = $_POST['principal_id'];
	$fullname = $_POST['fullname'];
    $designation = $_POST['designation'];
    $years = $_POST['years'];
    $teacher = $_POST['teacher'];

	
	$conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());
	$conn->query("UPDATE `tblprincipal` SET `principal_name` = '$fullname', `principal_designation` = '$designation', `principal_years` = '$years',
    `principal_teacher` = '$teacher' WHERE `principal_id` = '$principal_id'") or die(mysqli_error());

	echo "<script type='text/javascript'>alert('Successfully updated principal!');</script>";
	echo "<script>document.location='../principal.php'</script>";  
}

?>