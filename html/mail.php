<!-- <php

$sender_name = "HERITAGE";
$sender_email = "jayannag580@gmail.com";
$recipient_email = "telegrambotes@gmail.com";
$sub = "NTG";
$body = "hjhgjgjhjkhk";

if(mail($recipient_email,$sub,$body, "From: $sender_name"))
{
    echo "Mail sent successful";
}
else{
    echo "Mail not sent successful";
}
?>
 -->

 <?php
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
  
// require 'vendor/autoload.php';
 
$mail = new PHPMailer;

if(isset($_POST['send'])){
// getting post values
$fname=$_POST['fname'];		
$toemail=$_POST['toemail'];	
$subject=$_POST['subject'];	
$message=$_POST['message'];
$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = 'yourgmailid@gmail.com';          // SMTP username
$mail->Password = 'Your_Gmail_Password'; // SMTP password
$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                          // TCP port to connect to
$mail->setFrom('yourgmailid@gmail.com', 'Your_Name');
$mail->addReplyTo('yourgmailid@gmail.com', 'Your_Name');
$mail->addAddress($toemail);   // Add a recipient
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');
$mail->isHTML(true);  // Set email format to HTML
$bodyContent=$message;
$mail->Subject =$subject;
$bodyContent = 'Dear'.$fname;
$bodyContent .='<p>'.$message.'</p>';
$mail->Body = $bodyContent;
 
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>How to send email from localhost using PHP</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>    
body {
    color: #000;
    background: #fcda2e;
    font-family: "Roboto", sans-serif;
}
.contact-form {
    padding: 50px;
    margin: 30px auto;
}	
.contact-form h1 {
    font-size: 42px;
    font-family: 'Pacifico', sans-serif;
    margin: 0 0 50px;
    text-align: center;
}
.contact-form .form-group {
    margin-bottom: 20px;
}
.contact-form .form-control, .contact-form .btn {
    min-height: 40px;
    border-radius: 2px;
}
.contact-form .form-control {
    border-color: #e2c705;
}
.contact-form .form-control:focus {
    border-color: #d8b012;
    box-shadow: 0 0 8px #dcae10;
}
.contact-form .btn-primary, .contact-form .btn-primary:active {
    min-width: 250px;
    color: #fcda2e;
    background: #000 !important;
    margin-top: 20px;
    border: none;
}
.contact-form .btn-primary:hover {
    color: #fff; 
}
.contact-form .btn-primary i {
    margin-right: 5px;
}
.contact-form label {
    opacity: 0.9;
}
.contact-form textarea {
    resize: vertical;
}
.bs-example {
    margin: 20px;
}
</style>
</head>
<body>
<div class="container-lg">
	<div class="row">
		<div class="col-md-8 mx-auto">
			<div class="contact-form">
				<h1>Get in Touch</h1>
				<form  method="post">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
<label for="inputName">Name</label>
<input type="text" class="form-control" id="inputName" name="fname" required>
</div>
</div>
 
<div class="col-sm-6">
<div class="form-group">
<label for="inputEmail">Email</label>
<input type="email" class="form-control" id="inputEmail" name="toemail" required>
</div>
</div>
</div>            
 
<div class="form-group">
<label for="inputSubject">Subject</label>
<input type="text" class="form-control" id="inputSubject" name="subject" required>
</div>
<div class="form-group">
<label for="inputMessage">Message</label>
<textarea class="form-control" id="inputMessage" name="message" rows="5" required></textarea>
</div>
					
<div class="text-center">
<button type="submit" class="btn btn-primary" name="send"><i class="fa fa-paper-plane"></i> Send</button>
</div>            
</form>
</div>
</div>
</div>
</div>
</body>
</html>
