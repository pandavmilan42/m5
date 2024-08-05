<?php
// Database configuration
$servername="localhost";
$username="root";
$password="";
$dbname="stud1";

$cn=mysqli_connect($servername,$username,$password,$dbname);

if (!$cn) 
{
    echo "connection failed";
}
else
{
    echo "connection successfuly";
}
?>
<html>
    <body>
        <form method="POST">
            Enter RollNo : <input type="text" name="txtRollno"><br><br>
            Enter Name : <input type="text" name="txtName"><br><br>
            Enter Total : <input type="text" name="txtTotal"><br><br>
            <input type="submit" name="insert" value="Insert">
            <input type="submit" name="display" value="Display">
        </form>
    </body>
</html>

<?php

if(isset($_POST['insert'])) 
{
    $Roll_No=$_POST['txtRollno'];
    $Sname=$_POST['txtName'];
    $Total=$_POST['txtTotal'];
    $query="insert into test1 values('$Roll_No','$Sname','$Total')";
    $rs=mysqli_query($cn,$query);
    if($rs)
    {
        echo "record insert successfully";

    }
    else
    {
        echo "error";
    }
}
?>