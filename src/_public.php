<?php
//@@licence@@

if (!defined('DC_RC_PATH')) { return; }

$core->addBehavior('publicHeadContent',array('reelPublic','publicHeadContent'));

class reelPublic
{
	public static function publicHeadContent($core)
	{
		if (!$core->blog->settings->reel->reel_enabled) {
			return;
		}
		
		$url = $core->blog->getQmarkURL().'pf='.basename(dirname(__FILE__));
		echo
		'<script type="text/javascript" src="'.$url.'/js/jquery.reel.min.js"></script>'."\n";
	}
}

?>