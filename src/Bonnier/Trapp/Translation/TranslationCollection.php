<?php
namespace Bonnier\Trapp\Translation;

use Bonnier\Trapp\ServiceTranslation;

class TranslationCollection extends ServiceTranslation {

    protected $total;
    protected $skip;
    protected $limit;
    protected $_data = array();
    public $rows;

    // TODO: Do advanced logic here

    public function api($url = NULL, $method = self::METHOD_GET, array $data = NULL) {
        $data = (is_array($data)) ? array_merge($this->_data, $data) : $this->_data;
        return parent::api($url, $method, $data);
    }

    public function execute() {
        return $this->api();
    }

    public function setResponse($response) {
        $this->skip = $response['skip'];
        $this->limit = $response['limit'];
        $this->total = $response['total'];
    }

    /* Filters start */

    public function sort($field) {
        $this->_data['sort'] = $field;
    }

    public function order($order) {
        $this->_data['order'] = $order;
    }

    public function locale($locale) {
        $this->_data['locale'] = $locale;
    }

    public function app($appId) {
        $this->_data['app_id'] = $appId;
    }

    public function state($state) {
        $this->_data['state'] = $state;
    }

    public function q($query) {
        $this->_data['q'] = $query;
    }

    public function skip($skip) {
        $this->_data['skip'] = $skip;
    }

    public function limit($limit) {
        $this->_data['limit'] = $limit;
    }

    public function filterOriginal($bool) {
        $this->_data['filter_original'] = $bool;
    }

    /* Filters end */

    public function getSkip() {
        return $this->skip;
    }

    public function getLimit() {
        return $this->limit;
    }

    public function setData($data) {
        $this->_data = $data;
    }

    public function getData() {
        return $this->_data;
    }

    public function getRows() {
        return $this->rows;
    }

    public function setRows($rows) {
        $this->rows = $rows;
    }

    /**
     * @return int
     */
    public function getTotal() {
        return $this->total;
    }

    /**
     * @param int $total
     */
    public function setTotal( $total ) {
        $this->total = $total;
    }

}