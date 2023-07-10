<?php
include("connection.php");
if(isset($_POST['submit'])){
    $name=$_REQUEST['name'];
    $class=$_REQUEST['class'];
    $year=$_REQUEST['year'];
    $section=$_REQUEST['section'];
    $roll=$_REQUEST['roll'];
    $query=mysqli_query($con,"INSERT INTO `stud_details` (`sl`, `name`, `class`, `section`, `roll`, `current_year`) VALUES (NULL, '$name', '$class', '$section', '$roll', '$year');");

    $query1=mysqli_query($con,"SELECT * FROM `stud_details` ");
    $f=0;
    while($result=mysqli_fetch_assoc($query1)){
        $f++;
    }
    $f;
    $query2=mysqli_query($con,"insert into `stud_history`(`sid`,`year`,`class`, `section`, `roll`)values('$f','$year','$class', '$section', '$roll');");

}
?>
<script>
   alert("succesfully inserted");
   document.location="index.php";
</script>