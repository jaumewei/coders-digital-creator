<?php namespace CODERS\Framework\Views;

defined('ABSPATH') or die;

/**
 * 
 */
class MainDocument extends DocumentRender{
    
    protected function __construct(\CodersApp $app) {
        
        parent::__construct($app);

    }
    
    function display() {

        return parent::display();
    }
}