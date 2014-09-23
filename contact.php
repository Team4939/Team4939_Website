<?php
$field_name = $_POST['author'];
$field_email = $_POST['email'];
$field_number = $_POST['phone_number'];
$field_subject = $_POST['subject_title'];
$field_message = $_POST['comment'];

$mail_to = 'info@team4939.ca,anthony.griffith@peelsb.com';
$subject = 'Message from a site visitor '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Phone Number: '.$field_number."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for the message. We will contact you shortly.');
		window.location = 'contact_full.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please, send an email to info@team4939.ca');
		window.location = 'contact_full.html';
	</script>
<?php
}
?>