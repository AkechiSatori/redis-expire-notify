<?php
require 'redis.notify.php';
$redis = new RedisNotify();
$redis->psubscribe(array('__keyevent@0__:expired'), function ($redis, $pattern, $channel, $key) {
	print_r("Expired Key: " . $key . PHP_EOL);
});