<?php
	

$emp_name=filter_input(INPUT_POST,'emp_name');
$emp_bid=filter_input(INPUT_POST,'emp_bid');
$emp_id=filter_input(INPUT_POST,'emp_id');
$emp_address=filter_input(INPUT_POST,'emp_address');
$emp_phone=filter_input(INPUT_POST,'emp_phone');
$emp_dob=filter_input(INPUT_POST,'emp_dob');
$emp_doj=filter_input(INPUT_POST,'emp_doj');
$emp_gender=filter_input(INPUT_POST,'emp_gender');
$emp_pos=filter_input(INPUT_POST,'emp_pos');
$emp_troop=filter_input(INPUT_POST,'emp_troop');

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
	$sql="insert into emp(sno,emp_name,emp_bid,emp_id,emp_address,emp_phone,emp_dob,emp_doj,emp_gender,emp_pos,emp_troop) values ('','$emp_name','$emp_bid','$emp_id','$emp_address','$emp_phone','$emp_dob','$emp_doj','$emp_gender','$emp_pos','$emp_troop');";
	
	if($conn-> query($sql)){
		echo "new record added!";
	}
	else{
		echo "error: ".$sql."<br>".$conn->error;
	}
}




echo"</div> <a href='employee.html' class='btn btn-primary button' style='margin-left: 25%; margin-top: 1%'>Home</a>";






?>