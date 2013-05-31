<?php namespace NaApri\FacebookL4;

use Illuminate\Support\Facades\Session;

class FacebookL4 extends \Facebook {

	public function __construct($config) {
		parent::__construct($config);
	}

	protected function setPersistentData($key, $value) {
		if (!in_array($key, self::$kSupportedKeys)) {
			self::errorLog('Unsupported key passed to setPersistentData.');
			return;
		}
		$session_var_name = $this->constructSessionVariableName($key);
		
		Session::put($session_var_name, $value);
	}

	protected function getPersistentData($key, $default = false) {
		if (!in_array($key, self::$kSupportedKeys)) {
			self::errorLog('Unsupported key passed to getPersistentData.');
			return $default;
		}

		$session_var_name = $this->constructSessionVariableName($key);
		
		return Session::get($session_var_name, $default);
	}

	protected function clearPersistentData($key) {
		if (!in_array($key, self::$kSupportedKeys)) {
			self::errorLog('Unsupported key passed to clearPersistentData.');
			return;
		}

		$session_var_name = $this->constructSessionVariableName($key);
		Session::forget($session_var_name);
	}
}
