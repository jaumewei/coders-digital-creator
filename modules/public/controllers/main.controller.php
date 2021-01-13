<?php namespace CODERS\Framework\Controllers;

defined('ABSPATH') or die;

<<<<<<< HEAD
final class MainController extends \CODERS\Framework\Controller{
=======
final class MainController extends \CODERS\Framework\Response{
>>>>>>> c2115f2987f0f7998ae4c5f10042a7037383a1e6
    
    /**
     * @param \CODERS\Framework\Request $request
     * @return $this
     */
    protected function default_action( \CODERS\Framework\Request $request = NULL ) {

        //var_dump(get_class($this));
        
        //var_dump(\CodersApp::appRoot('coders-digital-creator'));
        
<<<<<<< HEAD
        $this->displayView($request)->display();
=======
        $this->createView($request)->render('default');
>>>>>>> c2115f2987f0f7998ae4c5f10042a7037383a1e6
        
        return TRUE;
    }
}