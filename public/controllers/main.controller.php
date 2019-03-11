<?php namespace CODERS\Framework\Controllers;

defined('ABSPATH') or die;

final class MainController extends \CODERS\Framework\Controller{
    /**
     * @param \CODERS\Framework\Request $request
     * @return $this
     */
    protected function default_action( \CODERS\Framework\Request $request) {
        
        var_dump($request);
        
        return $this;
    }
}