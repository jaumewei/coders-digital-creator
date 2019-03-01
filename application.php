<?php
/**
 * 
 */
class CodersDigitalCreatorApp extends CodersApp{
    
    protected function __construct() {
        
        $this->register('test',parent::TYPE_PROVIDERS);
        
        parent::__construct();
    }
}
