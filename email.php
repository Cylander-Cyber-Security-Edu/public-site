<?php $class = "single" ?>
<?php include "header.php" ?>

<?php

function sendEmail($to, $subject, $message) {
    // Set email headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
    $headers .= "From: Cylander website <no-reply@cylander.org>" . "\r\n";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        return true;
    } else {
        return false;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	// Usage example
	$to = 'cylander@ing.com';
	$subject = "New partnership inquiry from: " . $firstName . " " . $lastName;
	$body = "First Name: " . $firstName . "\n";
	$body .= "Last Name: " . $lastName . "\n";
	$body .= "Email: " . $email . "\n";
	$body .= "Phone: " . $phone . "\n";
	$body .= "Company: " . $company . "\n";
	$body .= "Message: \n" . $message;

	if (sendEmail($to, $subject, $body)) {
		$success = 'Email sent successfully!';
	} else {
		$failure = 'Email failed to send.';
	}
} else {
	$failure = 'Email failed to send.';
}
?>

<div id="site-content">
	<!-- #main -->
	<main id="main-content">
		<article class="post type-post">
			<div class="hero">
				<div class="inner-hero">
					<div class="breadcrumb"><a href="/index.php">Home</a> <span>Partnership</span></div>
				</div><!-- .inner-hero -->
			</div><!-- .hero -->

			<div class="page-body">
				<div class="wrapper-page-body">
					<div class="inner-page-content">
						<h1 class="page-title">Partnership</h1>
						<div class="content text">
							<?php if($success){
								echo '<p>Thank you for expressing interest in becoming a partner with Cylander! We appreciate your commitment to joining our mission of creating a safer digital world through accessible cybersecurity education and resources.</p>
								<p>Your partnership submission has been received, and our team will review your information shortly. We will be in touch with you soon to discuss the next steps in establishing this exciting collaboration.</p>
								<p>Once again, thank you for your dedication to empowering individuals and organizations in the fight against cyber threats. Together, we will work towards building a more secure and resilient digital future for all.</p>
								<p>Warm regards,</p>
								<p>The Cylander Team</p>';
							}else{
								echo '<p>We regret to inform you that your recent email submission regarding partnership details with Cylander could not be delivered. This may be due to an incorrect email address or a temporary issue with the recipient email server.</p>
								<p>To ensure your partnership submission is received and processed, please double-check the email address you used for submission and resend your message. If you continue to face difficulties, you may reach out to our support team at cylander@ing.com for further assistance.</p>
								<p>We apologize for any inconvenience this may have caused and appreciate your understanding. We look forward to reviewing your partnership details and exploring the possibility of collaborating to create a safer digital world.</p>
								<p>Warm regards,</p>
								<p>The Cylander Team</p>';
							} ?>
						</div>
					</div>
				</div>
			</div>
		</article>

	</main><!-- #main -->
</div>
<?php include "footer.php" ?>