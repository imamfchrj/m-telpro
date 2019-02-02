<?php 

$config['base_url']	= 'http://localhost/m-telpro'; // for localhost this can be empty value

// production
$config['recatpcha_site_key'] = '6LeSH4kUAAAAAGKs0RsxUUmwljA-AslqsJHcXckx';
$config['recatpcha_secret_key'] = '6LeSH4kUAAAAAEC8RuK0olfBErmGhJQzJCHsdty8';
// testing/
$config['recatpcha_site_key'] = '6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI';
$config['recatpcha_secret_key'] = '6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe';
$config['home_domain'] = '';
$config['cookie_domain']	= ''; // for localhost this can be empty value
$config['cookie_domain_wide']	= ""; // for localhost this can be empty value
$config['sess_cookie_name'] = 'ci_session';

$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => 'root',
	'database' => 'db_name',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);


$config['salt'] = 'kambingkuuu';
$config['with_love'] = '$$LOVE';
