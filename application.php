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
    /**
     * Route/Endpoint locale dictionary
     * @return array
     */
    protected function endPointLocale() {
        
        //$override = parent::endPointLocale();
        
        return array(
            $this->endPointName() => array(
                'es_ES' => 'creador-digital',
                'en_US' => 'digital-creator',
                'en_GB' => 'digitaler',
            ),
            'affiliates' => array(
                'es_ES' => 'afiliados',
                'en_GB' => 'affiliates',
                'en_US' => 'affiliates',
            ),
        );
    }
    /**
     * @return \CodersDigitalCreatorApp
     */
    public final function response() {
        
        //before response
        
        return parent::response();
        
        //after response
    }
}


