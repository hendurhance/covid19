<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['phoneno'];
	$address = $_POST['address'];
    $message = $_POST['message'];
    $to = "lordjoe013@gmail.com";
    $subject = "You Have A COVID-19 Report Case";
    $body = "<html>
                <body>
                    <div><a href='images/
                    <h2>'.$subject.'</h2>
                    <hr>
                    <p>Name:<br><strong>".$name."</strong></p>
                    <p>Email:<br><strong>".$email."</strong></p>
                    <p>Phone Number:<br><strong>".$number."</strong></p>
                    <p>Address:<br><strong>".$address."</strong></p>
                    <p>Message:<br><strong>".$message."</strong></p>
                </body>
            </html>";
    // headers
	$headers = "From: " . $name . " <" . $email . ">\r\n";
	$headers .= "Reply-To: ".$email . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=utf-8";
    
    $body = wordwrap($body,70);

    // send
	
    $send = mail($to, $subject, $body, $headers);
    if($send){
        header( "Location: ../thank-you.php" );
    }
    else{
        header( "Location: ../index.php" );
    }

}else{
    header( "Location: ../index.php" );
}