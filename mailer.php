<?php
$mailto = "deb.webdev@gmail.com";
$subject = "Testing mailer.d";
$content = "Test Phase 1";
$headers = "From: deb.webdev@gmail.com\r\nMIME-Version: 1.0\r\nContent-Type: text/plain; charset=utf-8\r\n";
mail( $mailto, $subject, $content, $headers);
?>