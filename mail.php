<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {   
        $email = $_POST["email"];
        $bname = $_POST['bname'];
        $landmark = $_POST["landmark"];
        $city = $_POST["city"];
        $state = $_POST["state"];
        $zip = $_POST["zip"];
		$message= "Need Help! emergency at ".$bname ." near " .$landmark. ", at city " .$city .". Zip: " .$zip. ". Send help ASAP.";
        $message = wordwrap($message,170);
        $headers = "From:".$email;
        // echo $headers;
        $subject = "Emergency alert by ".$email;
        mail("mohanqwerty5@gmail.com",$subject,$message,$headers);
        if (mail("mohanqwerty5@gmail.com",$subject,$message,$headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Thank You! Your message has been sent.";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Something went wrong and we couldn't send your message.";
        }
    } 
    else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }



echo"</div> <a href='admin.html' class='btn btn-primary button' style='margin-left: 25%; margin-top: 1%'>Home</a>";




?>