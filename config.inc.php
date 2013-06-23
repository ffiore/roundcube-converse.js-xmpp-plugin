<?php
// important variables in the following anonymous functions:
// $args['host'] : IMAP hostname
// $args['user'] : IMAP username
// $args['pass'] : IMAP password

// Hostname of BOSH endpoint, used for prebinding only (called by PHP),
// this must be an absolute URL
$rcmail_config['converse_xmpp_bosh_prebind_url']= function($args) {
	return 'http://localhost:5280/http-bind';
	# return sprintf('http://%s/http-bind', $_SERVER['HTTP_HOST']);
	# return sprintf('http://%s/http-bind', $args['host']);
};

// Hostname of BOSH endpoint, used by web browsers (called by Javascript code),
// this can be a relative URL
$rcmail_config['converse_xmpp_bosh_url']= function($args) {
	return '/http-bind';
};

// Hostname portion of XMPP username (bare JID), example: "example.net"
$rcmail_config['converse_xmpp_hostname']= function($args) {
	return 'example.net';
	# return preg_replace('/^.*@/', '', $args['user'];
	# return $args['host'];
};

// Username portion of XMPP username (bare JID), example: "user"
// if this contains @, this will only take the part before @,
// and the part after @ will replace the hostname definition above.
$rcmail_config['converse_xmpp_username']= function($args) {
	return $args['user'];
	# return preg_replace('/@.*$/', '', $args['user']);
};

// XMPP password
$rcmail_config['converse_xmpp_password']= function($args) {
	return $args['pass'];
};

