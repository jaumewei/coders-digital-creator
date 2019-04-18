<?php namespace CODERS\Framework\Controllers;

defined('ABSPATH') or die;

final class MainController extends \CODERS\Framework\Controller{
    
    /**
     * @param \CODERS\Framework\Request $request
     * @return $this
     */
    protected function default_action( \CODERS\Framework\Request $request) {
        
        $render = $this->renderer();

        if( $render !== FALSE ){
            
            $render->setLayout()->display();
        }
        
        return $this;
    }
}