<?php
include("connection.php");
if(isset($_POST['submit'])){
$sl=$_REQUEST['sl'];
$section=$_REQUEST['section'];
$roll=$_REQUEST['roll'];
$query=mysqli_query($con,"SELECT * FROM `stud_details` where sl='$sl' ");
while($result=mysqli_fetch_assoc($query)){
    $class=$result['class'];
    $year=$result['current_year'];

}
$class2=$class+1;
echo $class2;
$year2=$year+1;
echo $year2;
$query1=mysqli_query($con,"UPDATE `stud_details` SET `class` = '$class2',`section` = '$section',`roll` = '$roll' ,`current_year` = '$year2' WHERE `stud_details`.`sl` = $sl;  ");

$query3=mysqli_query($con,"insert into `stud_history`(`sid`,`year`,`class`,`section`,`roll`)values('$sl','$year2','$class2','$section','$roll');");
}
?>
<script>
    alert("succesfully inserted");
    document.location="index.php";
</script>