<?php

/**
 * Conditionally put more configs, to handle multiple different clients
 * The $_REQUEST['<submit_button_value>'] will be single & unique
 * Each client has to use an unique key for the submit request,
 * based on which, the correct configuration will be chosen
 * (i.e. that particular IF block executes loading values)
**/

if (isset($_REQUEST['test'])) {
	$data = array(
		'name',
		'sender',
		'subject',
		'message',
		'id@mail.com',
		'test@mailer.d',
		'http://localhost/'
	);
}
if (isset($_REQUEST['real'])) {
	$data = array(
		'name',
		'sender',
		'subject',
		'message',
		'deb.webdev@gmail.com',
		'test@mailer.d',
		'http://google.com'
	);
}
?>
