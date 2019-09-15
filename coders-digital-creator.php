<?php
/*******************************************************************************
 * Plugin Name: Coders Digital Creator
 * Plugin URI: https://coderstheme.org
 * Description: Digital Creator for Coders Framework
 * Version: 1.0.0
 * Author: Jaume Llopis
 * Author URI: 
 * License: GPLv2 or later
 * Text Domain: coders_digital_creator
 * Class: CodersDigitalCreator
 * 
 * @author Jaume Llopis <jaume@mnkcoder.com>
 ******************************************************************************/

//carga de la instancia
add_action('plugins_loaded',function(){
    
    if( defined('CODERS_FRAMEWORK_BASE') && class_exists('CodersApp') ){
        
        if( CodersApp::init('coders-digital-creator') ){
            
        }
    }
});


/**
 * Setup installation/uninstallation hooks
 */

register_activation_hook(__FILE__, function( ){

    //base de datos y activación de dependencias
    if( defined('CODERS_FRAMEWORK_BASE') && class_exists('CodersApp') ){
        
        $installer = CodersApp::installer(__DIR__,'digitor');
        
        if( !is_null($installer) &&  $installer->install() ){
            add_action( 'admin_notices', function() use( $installer ){
                foreach( $installer->report() as $message ){
                    printf('<div class="notice notice-success is-dismissible"><p>%s</p></div>',
                        __($message,'coders_digital_creator'));
                }
            } );
        }
    }
});

register_deactivation_hook(__FILE__, function(){
    //base de datos y activación de dependencias
    if( defined('CODERS_FRAMEWORK_BASE') && class_exists('CodersApp') ){
        
        $installer = CodersApp::installer(__DIR__,'digitor');

        if( !is_null($installer) &&  $installer->uninstall() ){
            add_action( 'admin_notices', function() use( $installer ){
                var_dump($installer);
                foreach( $installer->report() as $message ){
                    printf('<div class="notice notice-success is-dismissible"><p>%s</p></div>',
                        __($message,'coders_digital_creator'));
                }
            } );
        }
    }
});


