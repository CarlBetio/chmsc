
<?php


    function getW($schoolyear, $teacherid, $subject, $gender, $writtennum){
   
    $nameArray = array();
    $conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());    
    $scores = $conn->query ("SELECT * FROM `enrollstudent` INNER JOIN `test` ON `enrollstudent`.`name` = `test`.`name` where `enrollstudent`.`teacher_id` = '$teacherid' && `enrollstudent`.`subject_name` = '$subject' && `enrollstudent`.`gender` = '$gender' && `test`.`school_year` = '$schoolyear' && `written_num` = '$writtennum'") or die(mysqli_error());
     
        while($fetch1 = $scores->fetch_array()){
            $nameArray[] = $fetch1['score'];
        }
       
        $columnCount = count($nameArray);
        if($columnCount != 0){
            return $nameArray;
        }
          
    }
    function gettotal($schoolyear, $teacherid, $subject, $gender){
   //kung may unod e return ya
    $nameArray = array();
    $conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());    
    $scores = $conn->query ("SELECT * FROM `enrollstudent` INNER JOIN `test` ON `enrollstudent`.`name` = `test`.`name` where `enrollstudent`.`teacher_id` = '$teacherid' && `enrollstudent`.`subject_name` = '$subject' && `enrollstudent`.`gender` = '$gender' && `test`.`school_year` = '$schoolyear'") or die(mysqli_error());
     
        while($fetch1 = $scores->fetch_array()){
            $nameArray[] = $fetch1['name'];
        }
       
        $columnCount = count($nameArray);
        if($columnCount != 0){
            return $columnCount;
        } 
          
    }
    function countmale(){
   
    $nameArray = array();
    $conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());    
    $scores = $conn->query ("SELECT * FROM `enrollstudent` where `teacher_id` = '$_GET[id]' && `subject_name` = '$_GET[subject_name]' && `gender` = 'Male'") or die(mysqli_error());
     
        while($fetch1 = $scores->fetch_array()){
            $nameArray[] = $fetch1['name'];
        }
       
        $totalmale = count($nameArray);
        if($totalmale != 0){
            return $totalmale;
        }
          
    }
      
    function gethps($schoolyear, $teacherid, $subject){

    $conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());    
    $scores = $conn->query ("SELECT * FROM `highestpossiblescores` WHERE `teacher_id` = '$teacherid' && `subject_name` = '$subject' && `school_year` = '$schoolyear'") or die(mysqli_error());
     $hps = $scores ->fetch_array();
    return $hps;
    }
   


   

      

?>