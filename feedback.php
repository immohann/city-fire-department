<?php
	

$fname=filter_input(INPUT_POST,'fname');
$lname=filter_input(INPUT_POST,'lname');
$email=filter_input(INPUT_POST,'email');
$phone=filter_input(INPUT_POST,'phone');
$message=filter_input(INPUT_POST,'message');
$host ="localhost";
$username ="root";
$pass ="";
$dbname ="cfd";


$conn = new mysqli ($host,$username,$pass,$dbname);

if(mysqli_connect_error()){
	die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
	echo "not connected";
}
else{
	$sql="insert into feedback(sno,fname,lname,email,phone,message) values (1,'$fname','$lname','$email','$phone','$message');";
	
	if($conn-> query($sql)){
		echo "new records added!";
	}
	else{
		echo "error: ".$sql."<br>".$conn->error;
	}
}

echo"</div> <a href='admin.html' class='btn btn-primary button' style='margin-left: 25%; margin-top: 1%'>Home</a>";








?>