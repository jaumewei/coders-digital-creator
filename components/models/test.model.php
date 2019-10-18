<?php namespace CODERS\Framework\Models;

defined('ABSPATH') or die;
/**
 * Subscriptor Account Manager
 */
class TestModel extends \CODERS\Framework\Dictionary implements \CODERS\Framework\IModel{
    
    public function get($var, $default = null) {
        
        return $this->getMeta($var, 'value', $default);
    }
    public function has($var){
        return $this->hasField($var);
    }
    public function toArray() {
        
        return $this->listValues(FALSE);
    }

}