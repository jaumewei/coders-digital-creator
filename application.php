<?php
/**
 * 
 */
class CodersDigitalCreator extends CodersApp{
    /**
     * 
     */
    protected final function __construct(  ) {
        
        $this->register('test',parent::TYPE_PROVIDERS)
                ->register('test', parent::TYPE_MODELS, TRUE )
                ->registerAdminOption('Main');
        
        parent::registerRoute( $this->endPoint() , $this->endPoint(), 'en_US' , 'digital-creator' );
        parent::registerRoute( $this->endPoint() , $this->endPoint(), 'en_GB' , 'digitaler' );
        parent::registerRoute( $this->endPoint() , $this->endPoint(), 'es_ES' , 'creador-digital' );
        
        parent::__construct( 'digitor' );
    }
    /**
     * Route/Endpoint locale dictionary
     * @return array
     */
    protected function importRoutes() {
        
        //$override = parent::importRoutes();
        
        return array(
            $this->endPoint() => array(
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
}


