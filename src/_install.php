<?php
//@@licence@@

if (!defined('DC_CONTEXT_ADMIN')) { return; }
 
$m_version = $core->plugins->moduleInfo('reel','version');

$i_version = $core->getVersion('reel');
 
if (version_compare($i_version,$m_version,'>=')) {
	return;
}
 
# Création des setting (s'ils existent, ils ne seront pas écrasés)
$settings = new dcSettings($core,null);
$settings->addNameSpace('reel');
$settings->reel->put('reel_enabled',false,'boolean','Enable Reel',false,true);



$core->setVersion('reel',$m_version);
?>