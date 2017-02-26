<?php

namespace Mphp;

/**
 * Class A2xml
 * @package Mphp
 */
class A2xml {
    private $version = '1.0';
    private $encoding = 'UTF-8';
    private $root = 'response';
    private $xml = null;

    function __construct() {
        $this->xml = new \XmlWriter();
    }

    /**
     * @param array $data
     * @param boolean $eIsArray
     * @return string xml
     */
    function toXml($data, $eIsArray = FALSE) {
        if (!$eIsArray) {
            $this->xml->openMemory();
            $this->xml->startDocument($this->version, $this->encoding);
            $this->xml->startElement($this->root);
        }
        foreach ($data as $key => $value) {
            if (is_array($value)) {
                $this->xml->startElement($key);
                $this->toXml($value, TRUE);
                $this->xml->endElement();
                continue;
            }
            $this->xml->writeElement($key, $value);
        }
        if (!$eIsArray) {
            $this->xml->endElement();
            return $this->xml->outputMemory(true);
        }
    }
}

