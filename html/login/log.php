<?php
$connect = mysqli_connect('test.cwieffceuygm.us-east-1.rds.amazonaws.com', 'admin', 'password','university');
if($connect->connect_error)
{
die('connection failed');
}
$message = "Invalid Username Or Password";
$Email=$_POST['Email'];
$Emp_ID=$_POST['Emp_ID'];

$sql="SELECT Email,Emp_ID FROM Professor  WHERE Email='$Email' AND Emp_ID='$Emp_ID'";
$result=$connect->query($sql);

if($result-> num_rows>0)
{
while($row=$result->fetch_assoc())
{
echo "Admin Name Is " . $row["name"];
 header('Location: http://52.90.158.69/Final.html');
 exit;
}

}
else
echo "<script type='text/javascript'>alert('$message');</script>";
header("Refresh:0; url=http://52.90.158.69/login/index.html");
?>
