<?php
require_once __DIR__ . '/GoogleAuthenticator.php';
require_once __DIR__ . '/helpers.php';

$secret = isset($_GET['secret']) && !empty($_GET['secret']) ? $_GET['secret'] : false;

if ($secret) {
	$ga = new PHPGangsta_GoogleAuthenticator();

	$oneCode = $ga->getCode($secret);
	_json(true, 'Done ;).', ['code' => $oneCode]);
} else {
	_json(false, 'Hi. Please provide us [secret] param ;).');
}
