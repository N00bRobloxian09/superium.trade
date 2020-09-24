<?php

// DB Connect
include_once 'database.php';

try {
	$pdo = new PDO('mysql:host=' . DB_host . ';dbname=' . DB_name, DB_user, DB_pass);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

catch(PDOException $e) {
	echo $e->getMessage();
}

function sanitize_output($buffer)
{
	$search = array(
		'/\>[^\S ]+/s',
		'/[^\S ]+\</s',
		'/(\s)+/s'
	);
	$replace = array(
		'>',
		'<',
		'\\1'
	);
	$buffer = preg_replace($search, $replace, $buffer);
	return $buffer;
}

function get_timeago($ptime)
{
	$estimate_time = time() - $ptime;
	if ($estimate_time < 1) {
		return 'Less than 1 second ago';
	}

	$condition = array(
		12 * 30 * 24 * 60 * 60 => 'year',
		30 * 24 * 60 * 60 => 'month',
		24 * 60 * 60 => 'day',
		60 * 60 => 'hour',
		60 => 'minute',
		1 => 'second'
	);
	foreach($condition as $secs => $str) {
		$d = $estimate_time / $secs;
		if ($d >= 1) {
			$r = round($d);
			return '' . $r . ' ' . $str . ($r > 1 ? 's' : '') . ' ago';
		}
	}
}

ob_start("sanitize_output");
header("Access-Control-Allow-Origin: *");
session_name('DSP');
session_start();