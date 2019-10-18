<?php
/**
 * 
 */
class CodersDigitalCreatorApp extends CodersApp{
    /**
     * 
     */
    protected final function __construct(  ) {
        
        $this->register('test',parent::TYPE_PROVIDERS)
                ->register('test', parent::TYPE_MODELS, TRUE );
        
        parent::__construct( 'digitor' );
    }
    /**
     * 
     * @return \CODERS\Framework\Controller[]
     */
    protected final function importAdminMenu() {
        
        return array(
            'main' => $this->createController('Main')
        );
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
    protected function importRoutes() {
        
        //$override = parent::importRoutes();
        
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


