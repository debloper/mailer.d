<?php
$mailto = $got_to;
$subject = "Testing mailer.d : ". $got_subject;
$content = "Test Phase 10.abstraction :\r\n"
			."\r\nName :". $got_name
			."\r\nEmail :". $got_email
			."\r\n\r\n\r\nMessage Body :\r\n\r\n". $got_message;
$headers = "From: ". $got_from ."\r\nMIME-Version: 1.0\r\n"
			."Content-Type: text/plain; charset=utf-8\r\n";
$relocate = "Location: ". $got_redirect;
?>
