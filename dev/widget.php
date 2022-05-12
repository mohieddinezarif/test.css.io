<?php
    $css_base_url = "https://www.sportsmax.tv/statistics/css/";
    $css = $css_base_url + "theme1.css";
	if(!empty($_GET['widgetId'])) {
		$widgetId = $_GET['widgetId'];
	} else {
		echo "Oops Something Went Wrong!";
		return;
	}
	$leagueId = "";
	if(!empty($_GET['leagueId'])) {
	    $leagueId = "data-sport_event_id=".$_GET['leagueId'];
	}
	
	if(!empty($_GET['themeId'])) {
	    $themeId = $_GET['themeId'];
	    if($themeId > 0 && $themeId <= 18) {
	        $css = $css_base_url."theme".$themeId.".css";
	    }
	}
	
	$css .= "?v=".time();
	
?>
<html>
	<head>
		<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no'>
		<style>
			html, body { margin: 0; background-color: #000000; }
			.disclaimer { display: none !important; }
		</style>
		<script>(function(g,r,a,c,e){r.gnsWidgetObject=e;r[e]=r[e]||function(n,o,t){t=Object.prototype.toString.call(t)==='[object Array]'?t:[t];(r[e].q=r[e].q||[]).push([n,o,t])};r[e].c=r[e].c||{l:a};r.c=r.c||function(fs){r[e].c.featureSwitch=fs};var x=g.getElementsByTagName("script")[0],y=g.createElement("script"),z=g.createElement("script");y.async=0;y.src=c;z.async=1;z.src=a;x.parentNode.insertBefore(y,x);x.parentNode.insertBefore(z,x)})(document,window,"//widgets.sports.gracenote.com/gns.sdk.loader.js","//widgets.sports.gracenote.com/featureSwitches.jsonp", "gnsWidget");gnsWidget('widgets','create');</script>
</head>
	<body>
		<div id="gns-wrapper"> 
            <div class="gns-widgets">
				<div class="gnsWidget" data-widget_id="<?php echo $widgetId;?>" <?php echo $leagueId;?> data-custom_css="<?php echo $css;?>"></div>
			</div>
		</div>
	</body>
</html>