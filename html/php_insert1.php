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
$SU_ID=$_POST['SU_ID'];
$Email=$_POST['Email'];
$Stud_Department=$_POST['Stud_Department'];
$GPA=$_POST['GPA'];
$Stud_Course=$_POST['Stud_Course'];
$sql="INSERT INTO Student (First_Name,Last_Name,SU_ID,Email,Stud_Department,GPA,Stud_Course) VALUES('$First_Name','$Last_Name','$SU_ID','$Email','$Stud_Department','$GPA','$Stud_Course')";
if(!mysqli_query($connect,$sql))
{
echo 'Value Not Inserted';
}
header("refresh:0; url=http://52.90.158.69/Success1.html");
?>
