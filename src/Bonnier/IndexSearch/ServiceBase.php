<?php
namespace Bonnier\IndexSearch;

class ServiceBase extends ServiceRestBase {

	protected $development;
	protected $type;

	public function __construct($username, $secret, $type = '') {
		parent::__construct($username, $secret);
		$this->type = $type;
	}

	protected function getServiceUrl() {
		if($this->development) {
			$this->serviceUrl = 'https://staging-indexdb.whitealbum.dk/api/v1/%1$s/';
		} else {
			$this->serviceUrl = 'https://indexdb.whitealbum.dk/api/v1/%1$s/';
		}

		return sprintf($this->serviceUrl, $this->type);
	}

	public function setDevelopment($bool) {
		$this->development = $bool;
		return $this;
	}

}