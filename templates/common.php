<?php 
	$BASE_URL = "http://localhost/angularjs/";
?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shopin Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndroId Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<!-- Bootstrap -->
<link href="<?php echo $BASE_URL; ?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script><!-- Tether for Bootstrap -->
<script src="<?php echo $BASE_URL; ?>js/bootstrap.min.js"></script>
<link href="<?php echo $BASE_URL; ?>css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
<script src="<?php echo $BASE_URL; ?>js/jquery.magnific-popup.js" type="text/javascript"></script>
<script src="<?php echo $BASE_URL; ?>js/main.js" type="text/javascript"></script>
<!-- MY App -->
<link href="<?php echo $BASE_URL; ?>css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="<?php echo $BASE_URL; ?>css/style4.css" rel="stylesheet" type="text/css" media="all"/>
<!--- start-rate---->
<script src="<?php echo $BASE_URL; ?>js/jstarbox.js"></script>
<link rel="stylesheet" href="<?php echo $BASE_URL; ?>css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
<script type="text/javascript">
	jQuery(function() {
		jQuery('.starbox').each(function() {
			var starbox = jQuery(this);
			starbox.starbox({
				average: starbox.attr('data-start-value'),
				changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
				ghosting: starbox.hasClass('ghosting'),
				autoUpdateAverage: starbox.hasClass('autoupdate'),
				buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
				stars: starbox.attr('data-star-count') || 5
			}).bind('starbox-value-changed', function(event, value) {
				if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
				}
			})
		});
	});
</script>
<!---//End-rate---->
<!--light-box-files -->
<script src="<?php echo $BASE_URL; ?>js/jquery.chocolat.js"></script>
<link rel="stylesheet" href="<?php echo $BASE_URL; ?>css/chocolat.css" type="text/css" media="screen" charset="utf-8">
<script type="text/javascript" charset="utf-8">
	$(function() {
		$('a.picture').Chocolat();
	});
</script>

