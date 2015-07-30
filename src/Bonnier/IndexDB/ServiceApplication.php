<?php
namespace Bonnier\IndexDB;

use Bonnier\ServiceResult;

class ServiceApplication extends IndexDBBase {

    const TYPE = 'application';

    public function __construct($username, $secret) {
        parent::__construct($username, $secret, self::TYPE);
    }

    /**
     * @return ServiceResult
     * @throws \Bonnier\ServiceException
     */
    public function get() {
        return $this->api();
    }

    /**
     * @param $id
     *
     * @return ServiceApplication
     * @throws \Bonnier\ServiceException
     */
    public function getById($id) {
        return $this->api($id);
    }

}