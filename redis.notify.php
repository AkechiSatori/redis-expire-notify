<?php
class RedisNotify {
	private $redis;
	public function __construct($host = '127.0.0.1', $port = 6379, $password = null) {
		$this->redis = new redis();
		$this->redis->connect($host, $port);
		if (!is_null($password)) {
			$this->redis->auth($password);
		}
		$this->redis->setOption(Redis::OPT_READ_TIMEOUT, -1);
	}
	public function psubscribe($patterns = array(), $callback) {
		$this->redis->psubscribe($patterns, $callback);
	}
}