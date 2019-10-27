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
	$sql="update eqp set sno='',eqp_bid='$eqp_bid',eqp_name='$eqp_name',eqp_qty='$eqp_qty',eqp_desc='$eqp_desc' where eqp_id='$eqp_id';";
	
	if($conn-> query($sql)){
		echo $eqp_name."'s record updated";
	}
	else{
		echo "error: ".$sql."<br>".$conn->error;
	}
}



echo"</div> <a href='updateEQP.html' class='btn btn-primary button' style='margin-left: 25%; margin-top: 1%'>Home</a>";






?>