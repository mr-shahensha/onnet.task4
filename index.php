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
    <form action="post.php" method="post">
    <table border="2">
        <tr>
            <td>Name</td>
            <td>class</td>
            <td>section</td>
            <td>roll</td>
            <td>current year</td>
        </tr>
        <tr>
            <td><input type="text" placeholder="enter name" name="name"></td>
            <td><input type="number" placeholder="enter class" name="class"></td>
            <td><input type="text" placeholder="enter section" name="section"></td>
            <td><input type="number" placeholder="enter roll" name="roll"></td>
            <td><select name="year" id="">
                <option value="">year</option>
                <?php 
                for($i=2020;$i<=2030;$i++){
                    ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php
                }
                
                ?>
            </select></td>
        </tr>
        <tr colspan="3"><td><input type="submit" value="submit" name="submit"></td></tr>
    </table>
    </form>
<br>
<table border="2">
        <tr>
            <td>Name</td>
            <td>class</td>
            <td>section</td>
            <td>roll</td>
            <td>current year</td>
            <td>update</td>
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
                <input type="hidden" name=" <?php echo $sl; ?>">
                <td><?php echo $name; ?></td>
                <td><?php echo $class; ?></td>
                <td> <?php echo $section; ?></td>
                <td><?php echo $roll; ?></td>
                <td><?php echo $year; ?></td>
                <td><a href="goedit.php?sl=<?php echo $sl;?>">update</a></td>
            </tr>
            <?php
        }        
        ?>
    </table>
</body>
</html>