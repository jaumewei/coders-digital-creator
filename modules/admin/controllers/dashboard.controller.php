<?php namespace CODERS\Framework\Controllers;
/**
 * Description of dasgboard
 *
 * @author Coder01
 */
<<<<<<< HEAD
final class DashboardController extends \CODERS\Framework\Controller{
    
    protected function default_action(\CODERS\Framework\Request $request = NULL) {
        
=======
final class DashboardController extends \CODERS\Framework\Response{
    
    protected function default_action(\CODERS\Framework\Request $request = NULL) {
        
        var_dump($request);
>>>>>>> c2115f2987f0f7998ae4c5f10042a7037383a1e6
    }

    public function getPageTitle() {
        return __('Digital Creator','coders_digital_creator');
    }
    public function getMenuTitle() {
        return __('Creator','coders_digital_creator');
    }
}
