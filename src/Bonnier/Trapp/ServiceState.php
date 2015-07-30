<?php
namespace Bonnier\Trapp;

use Bonnier\Trapp\Translation\TranslationCollection;

class ServiceState extends TrappBase {

	const TYPE = 'state';

	public function __construct($username, $secret) {
		parent::__construct($username, $secret, self::TYPE);
	}

	/**
	 * @param $id
	 *
	 * @return ServiceTranslation
	 * @throws \Bonnier\ServiceException
	 */
	public function getById($id) {
		return $this->api($id);
	}

	/**
	 * @return \Bonnier\ServiceResult
	 */
	public function get() {
		return $this->api();
	}

	/**
	 * @return \Bonnier\ServiceItem
	 * @param $id string
	 * @throws \Bonnier\ServiceException
	 */
	public function delete($id) {
		return $this->api($id, self::METHOD_DELETE);
	}
}