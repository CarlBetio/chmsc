<style>
    .body{
        -moz-transform: scale(0.9);
    }
</style>
<?php 


require('require/grades_query.php');
$subject = $_GET['subject_name'];
$teacherid = $_GET['id'];
$schoolyear = $_GET['school_year'];


$gender = 'Male';
$gender2 = 'Female';

$W1 = getW($schoolyear, $teacherid, $subject,$gender,'w1');
$W2 = getW($schoolyear, $teacherid, $subject,$gender,'w2');
$W3 = getW($schoolyear, $teacherid, $subject,$gender,'w3');
$W4 = getW($schoolyear, $teacherid, $subject,$gender,'w4');
$W5 = getW($schoolyear, $teacherid, $subject,$gender,'w5');
$W6 = getW($schoolyear, $teacherid, $subject,$gender,'w6');
$W7 = getW($schoolyear, $teacherid, $subject,$gender,'w7');
$W8 = getW($schoolyear, $teacherid, $subject,$gender,'w8');
$W9 = getW($schoolyear, $teacherid, $subject,$gender,'w9');
$W10 = getW($schoolyear, $teacherid, $subject,$gender,'w10');

$GW1 = getW($schoolyear, $teacherid, $subject,$gender2,'gw1');
$GW2 = getW($schoolyear, $teacherid, $subject,$gender2,'gw2');
$GW3 = getW($schoolyear, $teacherid, $subject,$gender2,'gw3');
$GW4 = getW($schoolyear, $teacherid, $subject,$gender2,'gw4');
$GW5 = getW($schoolyear, $teacherid, $subject,$gender2,'gw5');
$GW6 = getW($schoolyear, $teacherid, $subject,$gender2,'gw6');
$GW7 = getW($schoolyear, $teacherid, $subject,$gender2,'gw7');
$GW8 = getW($schoolyear, $teacherid, $subject,$gender2,'gw8');
$GW9 = getW($schoolyear, $teacherid, $subject,$gender2,'gw9');
$GW10 = getW($schoolyear, $teacherid, $subject,$gender2,'gw10');

$PT1 = getW($schoolyear, $teacherid, $subject,$gender,'pt1');
$PT2 = getW($schoolyear, $teacherid, $subject,$gender,'pt2');
$PT3 = getW($schoolyear, $teacherid, $subject,$gender,'pt3');
$PT4 = getW($schoolyear, $teacherid, $subject,$gender,'pt4');
$PT5 = getW($schoolyear, $teacherid, $subject,$gender,'pt5');
$PT6 = getW($schoolyear, $teacherid, $subject,$gender,'pt6');
$PT7 = getW($schoolyear, $teacherid, $subject,$gender,'pt7');
$PT8 = getW($schoolyear, $teacherid, $subject,$gender,'pt8');
$PT9 = getW($schoolyear, $teacherid, $subject,$gender,'pt9');
$PT10 = getW($schoolyear, $teacherid, $subject,$gender,'pt10');
$PSQA1 = getW($schoolyear, $teacherid, $subject,$gender,'qa1');

$GPT1 = getW($schoolyear, $teacherid, $subject,$gender2,'gpt1');
$GPT2 = getW($schoolyear, $teacherid, $subject,$gender2,'gpt2');
$GPT3 = getW($schoolyear, $teacherid, $subject,$gender2,'gpt3');
$GPT4 = getW($schoolyear, $teacherid, $subject,$gender2,'gpt4');
$GPT5 = getW($schoolyear, $teacherid, $subject,$gender2,'gpt5');
$GPT6 = getW($schoolyear, $teacherid, $subject,$gender2,'gpt6');
$GPT7 = getW($schoolyear, $teacherid, $subject,$gender2,'gpt7');
$GPT8 = getW($schoolyear, $teacherid, $subject,$gender2,'gpt8');
$GPT9 = getW($schoolyear, $teacherid, $subject,$gender2,'gpt9');
$GPT10 = getW($schoolyear, $teacherid, $subject,$gender2,'gpt10');
$GPSQA1 = getW($schoolyear, $teacherid, $subject,$gender2,'gqa1');

$HPS = gethps($schoolyear, $teacherid, $subject);
?>

<html>
    <head>
        <title></title>
        <style type="text/css">
            @media print {
                .print {
                    display:none !important;
                }
            }
        </style>
    </head>
    <body>
        <center><h1>Class Record</h1></center>
        <h3> <img src="img/alijis/logo2.png" style="width:80px;height:80px;"/> REGION VI &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; DIVISION - NEGROS OCCIDENTAL&nbsp; &nbsp; &nbsp; &nbsp; 
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; DISCTRICT - VALLADOLID <img src="img/alijis/deped.jpg" style="width:100px;height:100px;"/></h3>
        <h3>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;SCHOOL NAME - ALIJIS ELEMENTARY SCHOOL &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; SCHOOL ID - 117422 &nbsp; &nbsp; &nbsp; &nbsp; SCHOOL YEAR - <?php echo $schoolyear?></h3>
        <h3></h3>
        <button class="print" onclick="javascript:window.print()">Print</button> <hr>
        <form name="submit" action="crud/saveclassrecord.php?id=<?php echo $teacherid?>&subject_name=<?php echo $subject?>&school_year=<?php echo $schoolyear?>" method="POST">
            <input type="submit" name="submit" value="Submit">
            <hr />
            <table border="1">
                <tr>

                    <td width="5%" colspan="2" style="text-align:center;"><b>FIRST QUARTER</b></td>
                    <td style="border-right:none;padding-left:2px;" width="25%" colspan="5" style="text-align:right;"><b>GRADE &SEC:</b></td>
                    <td style="border-left:none;color:#000000;padding-left:10px;" colspan="6"><?php echo $_GET['subject_name']?></td>
                    <td style="border-right:none;padding-left:2px;" width="10%" colspan="2" style="text-align:right;"><b>TEACHER:</b></td>
                    <td width="10%"  style="border-left:none;color:#000000;padding-left:10px;" width="20%" colspan="10"><?php echo $_GET['id']?></td>
                    <td style="border-right:none;padding-left:100px;" width="5%" colspan="6" style="text-align:right;"><b>SUBJECT </b></td>
                    <td style="border-left:none;color:#000000;" colspan="2"><?php echo $_GET['subject_name']?></td>
                </tr>
                <tr>
                    <td width="2%"></td>
                    <td width="100%" style="text-align:center;"><h5><b>LEARNER'S NAMES</b></h5></td>
                    <td width="10%" style="text-align:center;" colspan="13"><h5><b>WRITTEN WORKS (20%)</b></h5></td>
                    <td width="10%" style="text-align:center;" colspan="13"><h5><b>PERFORMANCE TASK (60%)</b></h5></td>
                    <td style="text-align:center;padding:0px 1px 0px 1px;" colspan="3"><h5><b>QUARTERLY ASSESSMENT (20%)</b></h5></td>
                    <td width="1%" style="text-align:center;" rowspan="3"><h6><b>INITIAL GRADE</b></h6></td>
                    <td width="1%" style="text-align:center;" rowspan="3"><h6><b>QUARTERLY GRADE</b></h6></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>

                    <td width="3%" style="text-align:center;">1</td>
                    <td width="3%" style="text-align:center;">2</td>
                    <td width="3%" style="text-align:center;">3</td>
                    <td width="3%" style="text-align:center;">4</td>
                    <td width="3%" style="text-align:center;">5</td>
                    <td width="3%" style="text-align:center;">6</td>
                    <td width="3%" style="text-align:center;">7</td>
                    <td width="3%" style="text-align:center;">8</td>
                    <td width="3%" style="text-align:center;">9</td>
                    <td width="3%"style="text-align:center;">10</td>
                    <td width="1%" style="text-align:center;">Total</td>
                    <td width="5%" style="text-align:center;">PS</td>
                    <td width="4%" style="text-align:center;">WS</td>


                    <td width="3%" style="text-align:center;">1</td>
                    <td width="3%" style="text-align:center;">2</td>
                    <td width="3%" style="text-align:center;">3</td>
                    <td width="3%" style="text-align:center;">4</td>
                    <td width="3%" style="text-align:center;">5</td>
                    <td width="3%" style="text-align:center;">6</td>
                    <td width="3%" style="text-align:center;">7</td>
                    <td width="3%" style="text-align:center;">8</td>
                    <td width="3%" style="text-align:center;">9</td>
                    <td width="3%"style="text-align:center;">10</td>
                    <td width="1%" style="text-align:center;">Total</td>
                    <td width="5%" style="text-align:center;">PS</td>
                    <td width="4%" style="text-align:center;">WS</td>

                    <td width="1%" style="text-align:center;">1</td>
                    <td width="4%" style="text-align:center;">PS</td>
                    <td width="4%" style="text-align:center;">WS</td>



                </tr>
                <tr>
                    <td></td>
                    <td><div style="font-size: 75%;"><b>HIGHEST POSSIBLE SCORE</b></div></td>

                    <td><?php echo "<input style='border:none' type='text' size='1' name='hpsw1' value='$HPS[hpsw1]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='hpsw2' value='$HPS[hpsw2]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='hpsw3' value='$HPS[hpsw3]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='hpsw4' value='$HPS[hpsw4]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='hpsw5' value='$HPS[hpsw5]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='hpsw6' value='$HPS[hpsw6]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='hpsw7' value='$HPS[hpsw7]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='hpsw8' value='$HPS[hpsw8]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='hpsw9' value='$HPS[hpsw9]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='hpsw10' value='$HPS[hpsw10]'/>"?></td>
                    <td><?php echo $HPS['hpsw1']+$HPS['hpsw2']+$HPS['hpsw3']+$HPS['hpsw4']+$HPS['hpsw5']+$HPS['hpsw6']+$HPS['hpsw7']+$HPS['hpsw8']+$HPS['hpsw9']+$HPS['hpsw10']?></td>
                    <td><?php echo "100.00"?></td>
                    <td><?php echo "20%"?></td>


                    <td><?php echo "<input style='border:none' type='text' size='1' name='hpsp1' value='$HPS[hpsp1]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='hpsp2' value='$HPS[hpsp2]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='hpsp3' value='$HPS[hpsp3]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='hpsp4' value='$HPS[hpsp4]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='hpsp5' value='$HPS[hpsp5]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='hpsp6' value='$HPS[hpsp6]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='hpsp7' value='$HPS[hpsp7]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='hpsp8' value='$HPS[hpsp8]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='hpsp9' value='$HPS[hpsp9]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='hpsp10' value='$HPS[hpsp10]'/>"?></td>
                    <td><?php echo $HPS['hpsp1']+$HPS['hpsp2']+$HPS['hpsp3']+$HPS['hpsp4']+$HPS['hpsp5']+$HPS['hpsp6']+$HPS['hpsp7']+$HPS['hpsp8']+$HPS['hpsp9']+$HPS['hpsp10']?></td>
                    <td><?php echo "100.00"?></td>
                    <td><?php echo "60%"?></td>

                    <td><?php echo "<input style='border:none' type='text' size='1' name='psqa' value='$HPS[psqa]'/>"?></td>
                    <td><?php echo "100.00"?></td>
                    <td><?php echo "20%"?></td>





                </tr>

                <tr>
                    <td style="background-color:#e6e6e6;"></td>
                    <td colspan="40" style="background-color:#e6e6e6;color:#000000;padding-left:2px;">Male</td>
                </tr>
                <input type="hidden" value="<?php echo $_GET['school_year']?>" name="school_year">
                <?php
    require 'connection.php';

            $query = $conn->query("SELECT * FROM `enrollstudent` where `teacher_id` = '$_GET[id]' && `subject_name` = '$_GET[subject_name]' && `gender` = 'Male'") or die(mysqli_error());
            $i = 1;
            $a = 0;        

            while($fetch = $query->fetch_array()){
                ?>                                      
                <tr>          




                    <input type="hidden" value="<?php echo $fetch['teacher_id']?>" name="teacher_id">
                    <input type="hidden" value="<?php echo $fetch['name']?>" name="name[]">
                    <input type="hidden" value="<?php echo $fetch['subject_name']?>" name="subject_name">
                    <td><?php echo $i; $i++;?></td>
                    <td><?php echo $fetch['name']?></td>

                    <td><?php echo "<input style='border:none' type='text' size='1' name='w1[]' value='$W1[$a]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='w2[]' value='$W2[$a]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='w3[]' value='$W3[$a]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='w4[]' value='$W4[$a]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='w5[]' value='$W5[$a]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='w6[]' value='$W6[$a]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='w7[]' value='$W7[$a]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='w8[]' value='$W8[$a]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='w9[]' value='$W9[$a]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='w10[]'value='$W10[$a]'/>"?></td>
                    <td><?php echo intval($W1[$a])+intval($W2[$a])+intval($W3[$a])+intval($W4[$a])+intval($W5[$a])+intval($W6[$a])+intval($W7[$a])+intval($W8[$a])+intval($W9[$a])+intval($W10[$a]) ?></td>
                    <td><?php echo number_format(((intval($W1[$a])+intval($W2[$a])+intval($W3[$a])+intval($W4[$a])+intval($W5[$a])+intval($W6[$a])+intval($W7[$a])+intval($W8[$a])+intval($W9[$a])+intval($W10[$a]))/30*100),2) ?></td>
                    <td><?php echo  number_format((((intval($W1[$a])+intval($W2[$a])+intval($W3[$a])+intval($W4[$a])+intval($W5[$a])+intval($W6[$a])+intval($W7[$a])+intval($W8[$a])+intval($W9[$a])+intval($W10[$a]))/30*100)/100*20),2) ?> 
                    </td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='pt1[]' value='$PT1[$a]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='pt2[]' value='$PT2[$a]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='pt3[]' value='$PT3[$a]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='pt4[]' value='$PT4[$a]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='pt5[]' value='$PT5[$a]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='pt6[]' value='$PT6[$a]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='pt7[]' value='$PT7[$a]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='pt8[]' value='$PT8[$a]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='pt9[]' value='$PT9[$a]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='pt10[]'value='$PT10[$a]'/>"?></td>
                    <td><?php echo intval($PT1[$a])+intval($PT2[$a])+intval($PT3[$a])+intval($PT4[$a])+intval($PT5[$a])+intval($PT6[$a])+intval($PT7[$a])+intval($PT8[$a])+intval($PT9[$a])+intval($PT10[$a]) ?></td>
                    <td><?php echo number_format(((intval($PT1[$a])+intval($PT2[$a])+intval($PT3[$a])+intval($PT4[$a])+intval($PT5[$a])+intval($PT6[$a])+intval($PT7[$a])+intval($PT8[$a])+intval($PT9[$a])+intval($PT10[$a]))/30*100),2) ?></td>
                    <td><?php echo  number_format((((intval($PT1[$a])+intval($PT2[$a])+intval($PT3[$a])+intval($PT4[$a])+intval($PT5[$a])+intval($PT6[$a])+intval($PT7[$a])+intval($PT8[$a])+intval($PT9[$a])+intval($PT10[$a]))/30*100)/100*60),2) ?> 
                    </td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='qa1[]' value='$PSQA1[$a]'/>"?></td>
                    <td><?php echo number_format((intval($PSQA1[$a])/$HPS['psqa']*100),2) ?></td>
                    <td><?php echo number_format(((intval($PSQA1[$a])/$HPS['psqa']*100)/100*20),2) ?></td>
                    <td><?php echo number_format((((intval($W1[$a])+intval($W2[$a])+intval($W3[$a])+intval($W4[$a])+intval($W5[$a])+intval($W6[$a])+intval($W7[$a])+intval($W8[$a])+intval($W9[$a])+intval($W10[$a]))/30*100)/100*20),2)+ number_format((((intval($PT1[$a])+intval($PT2[$a])+intval($PT3[$a])+intval($PT4[$a])+intval($PT5[$a])+intval($PT6[$a])+intval($PT7[$a])+intval($PT8[$a])+intval($PT9[$a])+intval($PT10[$a]))/30*100)/100*60),2)+
                    number_format(((intval($PSQA1[$a])/$HPS['psqa']*100)/100*20),2)
                        ?></td>
                    <td><?php 
                    echo number_format(number_format((((intval($W1[$a])+intval($W2[$a])+intval($W3[$a])+intval($W4[$a])+intval($W5[$a])+intval($W6[$a])+intval($W7[$a])+intval($W8[$a])+intval($W9[$a])+intval($W10[$a]))/30*100)/100*20),2)+ number_format((((intval($PT1[$a])+intval($PT2[$a])+intval($PT3[$a])+intval($PT4[$a])+intval($PT5[$a])+intval($PT6[$a])+intval($PT7[$a])+intval($PT8[$a])+intval($PT9[$a])+intval($PT10[$a]))/30*100)/100*60),2)+
                                       number_format(((intval($PSQA1[$a])/$HPS['psqa']*100)/100*20),2),0)+4
                        ?>
                    </td>

                </tr>

                <?php
                    $a++;

            }
            $conn->close();
                ?>




                <tr>
                    <td style="background-color:#e6e6e6;"></td>
                    <td colspan="40" style="background-color:#e6e6e6;color:#000000;padding-left:2px;">Female</td>


                </tr>
                <?php
                require 'connection.php';
                $query = $conn->query("SELECT * FROM `enrollstudent` where `teacher_id` = '$_GET[id]' && `subject_name` = '$_GET[subject_name]' && `gender` = 'Female'") or die(mysqli_error());
                $i = 1;
                $b = 0;  
                while($fetch = $query->fetch_array()){

                ?>                                      
                <tr>
                    <td><?php echo $i; $i++;?></td>
                    <input type="hidden" value="<?php echo $fetch['name']?>" name="gname[]">
                    <td><?php echo $fetch['name']?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='gw1[]' value='$GW1[$b]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='gw2[]' value='$GW2[$b]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='gw3[]' value='$GW3[$b]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='gw4[]' value='$GW4[$b]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='gw5[]' value='$GW5[$b]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='gw6[]' value='$GW6[$b]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='gw7[]' value='$GW7[$b]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='gw8[]' value='$GW8[$b]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='gw9[]' value='$GW9[$b]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='gw10[]' value='$GW10[$b]'/>"?></td>
                    <td><?php echo intval($GW1[$b])+intval($GW2[$b])+intval($GW3[$b])+intval($GW4[$b])+intval($GW5[$b])+intval($GW6[$b])+intval($GW7[$b])+intval($GW8[$b])+intval($GW9[$b])+intval($GW10[$b]) ?></td>
                    <td><?php echo number_format(((intval($GW1[$b])+intval($GW2[$b])+intval($GW3[$b])+intval($GW4[$b])+intval($GW5[$b])+intval($GW6[$b])+intval($GW7[$b])+intval($GW8[$b])+intval($GW9[$b])+intval($GW10[$b]))/30*100),2) ?></td>
                    <td><?php echo number_format((((intval($GW1[$b])+intval($GW2[$b])+intval($GW3[$b])+intval($GW4[$b])+intval($GW5[$b])+intval($GW6[$b])+intval($GW7[$b])+intval($GW8[$b])+intval($GW9[$b])+intval($GW10[$b]))/30*100)/100*20),2) ?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='gpt1[]' value='$GPT1[$b]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='gpt2[]' value='$GPT2[$b]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='gpt3[]' value='$GPT3[$b]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='gpt4[]' value='$GPT4[$b]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='gpt5[]' value='$GPT5[$b]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='gpt6[]' value='$GPT6[$b]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='gpt7[]' value='$GPT7[$b]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='gpt8[]' value='$GPT8[$b]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='gpt9[]' value='$GPT9[$b]'/>"?></td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='gpt10[]'value='$GPT10[$b]'/>"?></td>
                    <td><?php echo intval($GPT1[$b])+intval($GPT2[$b])+intval($GPT3[$b])+intval($GPT4[$b])+intval($GPT5[$b])+intval($GPT6[$b])+intval($GPT7[$b])+intval($GPT8[$b])+intval($GPT9[$b])+intval($GPT10[$b]) ?></td>
                    <td><?php echo number_format(((intval($GPT1[$b])+intval($GPT2[$b])+intval($GPT3[$b])+intval($GPT4[$b])+intval($GPT5[$b])+intval($GPT6[$b])+intval($GPT7[$b])+intval($GPT8[$b])+intval($GPT9[$b])+intval($GPT10[$b]))/30*100),2) ?></td>
                    <td><?php echo  number_format((((intval($GPT1[$b])+intval($GPT2[$b])+intval($GPT3[$b])+intval($GPT4[$b])+intval($GPT5[$b])+intval($GPT6[$b])+intval($GPT7[$b])+intval($GPT8[$b])+intval($GPT9[$b])+intval($GPT10[$b]))/30*100)/100*60),2) ?> 
                    </td>
                    <td><?php echo "<input style='border:none' type='text' size='1' name='gqa1[]' value='$GPSQA1[$b]'/>"?></td>
                    <td><?php echo number_format((intval($GPSQA1[$b])/$HPS['psqa']*100),2) ?></td>
                    <td><?php echo number_format(((intval($GPSQA1[$b])/$HPS['psqa']*100)/100*20),2) ?></td>
                    <td><?php echo number_format((((intval($GW1[$b])+intval($GW2[$b])+intval($GW3[$b])+intval($GW4[$b])+intval($GW5[$b])+intval($GW6[$b])+intval($GW7[$b])+intval($GW8[$b])+intval($GW9[$b])+intval($GW10[$b]))/30*100)/100*20),2)+ number_format((((intval($GPT1[$b])+intval($GPT2[$b])+intval($GPT3[$b])+intval($GPT4[$b])+intval($GPT5[$b])+intval($GPT6[$b])+intval($GPT7[$b])+intval($GPT8[$b])+intval($GPT9[$b])+intval($GPT10[$b]))/30*100)/100*60),2)+
                    number_format(((intval($GPSQA1[$b])/$HPS['psqa']*100)/100*20),2)
                        ?></td>
                    <td><?php echo number_format(number_format((((intval($GW1[$b])+intval($GW2[$b])+intval($GW3[$b])+intval($GW4[$b])+intval($GW5[$b])+intval($GW6[$b])+intval($GW7[$b])+intval($GW8[$b])+intval($GW9[$b])+intval($GW10[$b]))/30*100)/100*20),2)+ number_format((((intval($GPT1[$b])+intval($GPT2[$b])+intval($GPT3[$b])+intval($GPT4[$b])+intval($GPT5[$b])+intval($GPT6[$b])+intval($GPT7[$b])+intval($GPT8[$b])+intval($GPT9[$b])+intval($GPT10[$b]))/30*100)/100*60),2)+
                                                 number_format(((intval($GPSQA1[$b])/$HPS['psqa']*100)/100*20),2),0)+4
                        ?></td>

                </tr>

                <?php
                    $b++;
                }
                $conn->close();
                ?>

            </table>
        </form>

        <?php 
        function convert($array){
            foreach ($array as $key => $var) {
                $array[$key] = (int)$var;
            }
            return $array;
        }

        ?>
        <input type="hidden" name="numberM" value="<?php echo $count_male?>">
        <input type="hidden" name="numberF" value="<?php echo $count_female?>">
        <input type="hidden" name="sy" value="<?php echo $sy?>">
        <input type="hidden" name="grade" value="<?php echo $grade?>">
        <input type="hidden" name="sec" value="<?php echo $sec?>">
        <input type="hidden" name="sub" value="<?php echo $sub?>">
        <input type="hidden" name="teacher" value="<?php echo $id?>">

    </body>

</html>