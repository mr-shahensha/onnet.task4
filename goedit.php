<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="edit.php" method="post">
    <table border="2">
        <tr>
            <td>Name</td>
            <td>class</td>
            <td>section</td>
            <td>roll</td>
            <td>current year</td>
        </tr>
        <?php
        $query=mysqli_query($con,"SELECT * FROM `stud_details` ");
        while($result=mysqli_fetch_assoc($query)){
            $sl=$result['sl'];
            $name=$result['name'];
            $class=$result['class'];
            $section=$result['section'];
            $roll=$result['roll'];
            $year=$result['current_year'];
            ?>
            <tr>
                <input type="hidden" value=" <?php echo $sl; ?>" name="sl" >
                <td><?php echo $name; ?></td>
                <td><?php echo $class; ?></td>
                <td><input type="text" value="<?php echo $section; ?>" name="section"> </td>
                <td><input type="text" value="<?php echo $roll; ?>" name="roll"> </td>
                <td><?php echo $year; ?></td>
            </tr>
            <?php
        }        
        ?>
        <tr><td> <input type="submit" value="submit" name="submit"></td></tr>
    </table>
    </form>
</body>
</html>