<?php
session_start();
?>
<html>
	<head>
		<title>Alijis Elementary School</title>
		<link rel="icon" type="image/png" sizes="96x96" href="img/alijis/logo.png">
		<link href="css/loading.css" rel="stylesheet" type="text/css" />
        <style>
#loading{
	background-color: #374140;
	height: 100%;
	width: 100%;
	position: fixed;
	z-index: 1;
	margin-top: 0px;
	top: 0px;
}
#loading-center{
	width: 100%;
	height: 100%;
	position: relative;
}
#loading-center-absolute {
	position: absolute;
	left: 50%;
	top: 50%;
	height: 150px;
	width: 150px;
	margin-top: -75px;
	margin-left: -75px;
}
.object{
	width: 20px;
	height: 20px;
	background-color: #FFF;
	float: left;
	margin-right: 20px;
	margin-top: 65px;
	-moz-border-radius: 50% 50% 50% 50%;
	-webkit-border-radius: 50% 50% 50% 50%;
	border-radius: 50% 50% 50% 50%;
}

#object_one {	
	-webkit-animation: object_one 1.5s infinite;
	animation: object_one 1.5s infinite;
	}
#object_two {
	-webkit-animation: object_two 1.5s infinite;
	animation: object_two 1.5s infinite;
	-webkit-animation-delay: 0.25s; 
    animation-delay: 0.25s;
	}
#object_three {
    -webkit-animation: object_three 1.5s infinite;
	animation: object_three 1.5s infinite;
	-webkit-animation-delay: 0.5s;
    animation-delay: 0.5s;
	
	}

	






@-webkit-keyframes object_one {
75% { -webkit-transform: scale(0); }
}

@keyframes object_one {

  75% { 
    transform: scale(0);
    -webkit-transform: scale(0);
  }

}





@-webkit-keyframes object_two {
 

  75% { -webkit-transform: scale(0); }


}

@keyframes object_two {
  75% { 
    transform: scale(0);
    -webkit-transform:  scale(0);
  }

}

@-webkit-keyframes object_three {

  75% { -webkit-transform: scale(0); }

}

@keyframes object_three {

  75% { 
    transform: scale(0);
    -webkit-transform: scale(0);
  }
  
}





</style>

	</head>
	<body>
    <div id="loading">
    <div id="loading-center">
    <div id="loading-center-absolute">
    <div class="object" id="object_one"></div>
    <div class="object" id="object_two"></div>
    <div class="object" id="object_three"></div>
    
    </div>
    </div>
     
    </div>
	</body>
</html>


<?php
require ('connection.php');
if(ISSET($_POST['login'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());
	$query = $conn->query("SELECT * FROM `tbluser` WHERE BINARY `user_username` = '$username' && BINARY `user_password` = '$password'") or die(mysqli_error());
	$fetch = $query->fetch_array();
	$valid = $query->num_rows;
	$user_role = $fetch['user_role'];
	$user_id = $fetch['user_id'];


	if($valid > 0){
		if ($user_role == 'Principal') {
			$_SESSION['user_id'] = $fetch['user_id'];
			echo '<meta http-equiv="refresh" content="2;url=home.php">';
		}
		if ($user_role == 'Teacher') {
			$_SESSION['user_id'] = $fetch['user_id'];
			echo '<meta http-equiv="refresh" content="2;url=hometeacher.php">';
        }
        
    }
    else{
        echo "<script>alert('Invalid account. Please check your username and password.')</script>";
        echo "<script>window.location = 'index.php'</script>";
    }
	

	$conn->close();
}	
?>
