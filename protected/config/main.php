<?php

return array(
 
	'defaultController'=>'site',   
    
    'import'=>array(
		'application.models.*',
		'application.components.*',
        'application.extensions',
    ),
    
	'components'=>array(
		'urlManager'=>array(
			'urlFormat'=>'path',
            'showScriptName' => false,
			'rules'=>array(
                
			),
		),
        
        'viewRenderer' => array(
          'class' => 'application.extensions.ESmartyViewRenderer',
          'fileExtension' => '.tpl',
            //'pluginsDir' => 'application.smartyPlugins',
            //'configDir' => 'application.smartyConfig',
    		),
        ),
    


);