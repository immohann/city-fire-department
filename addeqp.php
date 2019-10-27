<?php
	

$eqp_bid=filter_input(INPUT_POST,'eqp_bid');
$eqp_name=filter_input(INPUT_POST,'eqp_name');
$eqp_id=filter_input(INPUT_POST,'eqp_id');
$eqp_qty=filter_input(INPUT_POST,'eqp_qty');
$eqp_desc=filter_input(INPUT_POST,'eqp_desc');

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
	$sql="insert into eqp(sno,eqp_bid,eqp_name,eqp_id,eqp_qty,eqp_desc) values ('','$eqp_bid','$eqp_name','$eqp_id','$eqp_qty','$eqp_desc');";
	
	if($conn-> query($sql)){
		echo "new records added!";
	}
	else{
		echo "error: ".$sql."<br>".$conn->error;
	}
}

echo"</div> <a href='equipment.html' class='btn btn-primary button' style='margin-left: 25%; margin-top: 1%'>Home</a>";







?>