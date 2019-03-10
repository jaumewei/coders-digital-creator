<?php
/**
 * 
 */
class CodersDigitalCreatorApp extends CodersApp{
    /**
     * 
     */
    protected final function __construct(  ) {
        
        $this->register('test',parent::TYPE_PROVIDERS);
        
        parent::__construct( 'digitor' );
    }
    /**
     * 
     */
    protected function __init() {

        //nothing to do atm

    }

}
