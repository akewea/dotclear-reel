<?php
//@@licence@@

if (!defined('DC_RC_PATH')) {return;}

class wikiReel {
	
	private static $index = 0;
	
	public static function transform($text,$args)
	{
		$opts = explode("\n",$text, 2);
		
		$id = 'reel-target-'.self::$index++;
		$img = '<img src="'.$opts[0].'" id="'.$id.'" class="reel-target"/>';
		$script = "$('#$id').one('load', function(){".
			"	$(this).prop('width', $(this).width());".
			"	$(this).prop('height', $(this).height());".
			"	$(this).reel(";
		
		if(count($opts) > 1){
			$script .= $opts[1];
		}
		
		$script .= 	"	);});";
		
		return '<p class="reel-container">'.$img.'<script type="text/javascript">'.$script.'</script></p>';
	}
	
}

?>