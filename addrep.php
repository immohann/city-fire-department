<?php
	

$rep_bid=filter_input(INPUT_POST,'rep_bid');
$rep_date=filter_input(INPUT_POST,'rep_date');
$rep_id=filter_input(INPUT_POST,'rep_id');
$rep_loc=filter_input(INPUT_POST,'rep_loc');
$rep_desc=filter_input(INPUT_POST,'rep_desc');
$cas_injured=filter_input(INPUT_POST,'cas_injured');
$cas_dead=filter_input(INPUT_POST,'cas_dead');

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
	
	$sql="insert into causalities(sno,cas_injured,cas_dead,cas_rid) values ('','$cas_injured','$cas_dead','$rep_id');";
	
	$sql="insert into report(sno,rep_bid,rep_date,rep_id,rep_loc,rep_desc) values ('','$rep_bid','$rep_date','$rep_id','$rep_loc','$rep_desc');";
	
	
	if($conn-> query($sql)){
		echo "new record added to report and causalities!";
	}
	else{
		echo "error: ".$sql."<br>".$conn->error;
	}
}


echo"</div> <a href='report.html' class='btn btn-primary button' style='margin-left: 25%; margin-top: 1%'>Home</a>";






?>