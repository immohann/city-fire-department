<?php 


    
	
	$username = $_POST['username'];
    $password = $_POST['password'];
    
   
	
	
	function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
	
	
	
	if(($username=="admin1" && $password=="member1")||($username=="admin2" && $password=="member2")||($username=="admin3" && $password=="member3")||($username=="admin4" && $password=="member4")){
		
		
		
		header("Location:admin.html");
   exit;
	}
else{
	$message = "Sorry you're not authenticated!";
echo "<script type='text/javascript'>alert('$message');</script>";
 echo "Sorry you're not authenticated!";
	
}
	
	


?>
