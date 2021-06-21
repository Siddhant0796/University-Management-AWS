<?php
$connect = mysqli_connect('test.cwieffceuygm.us-east-1.rds.amazonaws.com', 'admin', 'password','university');
if(!$connect)
{
echo 'Not Connected To Server';
}
if(!mysqli_select_db($connect,'university'))
{
echo 'Database Not Selected';
}
$First_Name=$_POST['First_Name'];
$Last_Name=$_POST['Last_Name'];
$Emp_ID=$_POST['Emp_ID'];
$Age=$_POST['Age'];
$Email=$_POST['Email'];
$Phone_No=$_POST['Phone_No'];
$Department=$_POST['Department'];
$Course=$_POST['Course'];
$sql="INSERT INTO Professor (First_Name,Last_Name,Emp_ID,Age,Email,Phone_No,Department,Course) VALUES('$First_Name','$Last_Name','$Emp_ID','$Age','$Email','$Phone_No','$Department','$Course')";
if(!mysqli_query($connect,$sql))
{
echo 'Value Not Inserted';
}

header("refresh:0;  url=http://52.90.158.69/Success.html");
?>
