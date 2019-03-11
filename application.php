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
     * @return array
     */
    protected function endPointLocale() {
        
        $override = parent::endPointLocale();
        
        $app = strval($this);
        $locale = get_locale();
        
        $override[ $app ][$locale] = 'creador-digital';
        $override[ $app ]['en-US'] = 'digital-creator';
        $override[ $app ]['en-GB'] = 'digital-creator';
        
        $override[ 'affiliates' ] = array(

            $locale => 'afiliados',

        );
        
        return $override;
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


