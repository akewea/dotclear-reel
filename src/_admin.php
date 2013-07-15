<?php
//@@licence@@

if (!defined('DC_RC_PATH')) { return; }

// require dirname(__FILE__).'/_widgets.php';

if($core->blog->settings->reel->reel_enabled){
	// Enregistrement des behaviors pour l'admin.
	//$core->addBehavior('adminMediaItemForm',	array('fostrakAdminBehaviors', 'adminMediaItemForm'));
	$core->addBehavior('coreInitWikiPost',	array('reelAdminBehaviors', 'coreInitWikiPost'));
}


/**
 * Classe pour la gestion de Behaviors de l'administation.
 *
 * @author akewea
 *
 */
class reelAdminBehaviors {

	public static function coreInitWikiPost($wiki2xhtml) {
		$wiki2xhtml->registerFunction('macro:reel', array('wikiReel', 'transform'));
	}

}
?>