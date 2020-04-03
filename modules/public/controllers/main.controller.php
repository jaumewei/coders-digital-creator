<?php namespace CODERS\Framework\Controllers;

defined('ABSPATH') or die;

final class MainController extends \CODERS\Framework\Controller{
    
    /**
     * @param \CODERS\Framework\Request $request
     * @return $this
     */
    protected function default_action( \CODERS\Framework\Request $request = NULL ) {

        //var_dump(get_class($this));
        
        //var_dump(\CodersApp::appRoot('coders-digital-creator'));
        
        $this->displayView($request)->display();
        
        return TRUE;
    }
}