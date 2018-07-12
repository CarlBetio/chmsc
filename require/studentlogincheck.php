<?php
session_start();
if(!ISSET($_SESSION['lrn']))
{
    echo "<script> alert ('Login required!')</script>";
    echo "<script>document.location='index.php'</script>";

}
?>
