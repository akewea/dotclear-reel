<?php
//@@licence@@

if (!defined('DC_RC_PATH')) { return; }

$this->registerModule(
        /* Name */                      "@@name@@",
        /* Description*/                "@@description@@",
        /* Author */                    "@@author@@",
        /* Version */                   '@@version@@',
        /* Permissions */               
		array(
			'permissions' 	=>	'@@permissions@@',
			'type'			=>		'plugin',
			'priority'		=>	981
		)
);
?>