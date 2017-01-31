<?php
/**
exec('/home/sugoi-bijo/www/public/git pull', $op, $rv);
print_r($op);
print_r($rv);
**/

$LOG_FILE = dirname(__FILE__).'/hook.log';
$SECRET_KEY = '0214';

if ( isset($_GET['key']) && $_GET['key'] === $SECRET_KEY && isset($_POST['payload'])){
	$payload = json_decode($_POST['payload'], true);
	if ($payload['ref'] === 'refs/heads/master') {
	exec('git pull 2>&1');
	file_put_contents($LOG_FILE, date("[Y-m-d H:i:s]")." ".$_SERVER['REMOTE_ADDR']." git pulled: ".payload['after']." ".$payload['commits'][0]['message']."\n", FILE_APPEND|LOCK_EX);
	}
} else {
	file_put_contents($LOG_FILE, date("[Y-m-d H:i:s]")." invalid access: ".$_SERVER['REMOTE_ADDR']."\n", FILE_APPEND|LOCK_EX);
?>
