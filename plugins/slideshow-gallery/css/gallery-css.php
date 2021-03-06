<?php header("Content-Type: text/css"); ?>

<?php $styles = array(); ?>
<?php foreach ($_GET as $skey => $sval) : ?>
	<?php $styles[$skey] = urldecode($sval); ?>
<?php endforeach; ?>

<?php if (!empty($styles['wrapperid'])) : ?>
ul.slideshow { list-style:none !important; color:#fff; }
ul.slideshow span { display:none; }
#<?php echo $styles['wrapperid']; ?> { position:relative; width:<?php echo ($styles['width'] != "auto") ? ((int) $styles['width'] - 6) . 'px' : 'auto'; ?>; background:<?php echo $styles['background']; ?>; padding:0 0 0 0; border:<?php echo $styles['border']; ?>; margin:0; display:none; }
#<?php echo $styles['wrapperid']; ?> * { margin:0; padding:0; }
#<?php echo $styles['wrapperid']; ?> #fullsize { position:relative; z-index:1; overflow:hidden; width:<?php echo ($styles['width'] != "auto") ? ((int) $styles['width'] - 6) . 'px' : 'auto'; ?>; height:<?php echo ((int) $styles['height'] - 6); ?>px; border: none; }
#<?php echo $styles['wrapperid']; ?> #information { text-align:left; font-family:Verdana, Arial, Helvetica, sans-serif !important; position:absolute; bottom:0; width:<?php echo ($styles['width'] != "auto") ? ((int) $styles['width'] - 6) . 'px' : '100%'; ?>; height:0; background:<?php echo $styles['infobackground']; ?>; color:<?php echo $styles['infocolor']; ?>; overflow:hidden; z-index:200; opacity:.7; filter:alpha(opacity=70); }
#<?php echo $styles['wrapperid']; ?> #information h3 { color:<?php echo $styles['infocolor']; ?>; padding:4px 8px 3px; margin:0 !important; font-size:16px; font-weight:bold; }
#<?php echo $styles['wrapperid']; ?> #information p { color:<?php echo $styles['infocolor']; ?>; padding:0 8px 8px; margin:0 !important; font-size: 14px; font-weight:normal; }
#<?php echo $styles['wrapperid']; ?> #image { width:<?php echo ($styles['width'] != "auto") ? ((int) $styles['width'] - 4) . 'px' : 'auto'; ?>; no-repeat; }
#<?php echo $styles['wrapperid']; ?> #image img { position:absolute; left:0; border:none; height:auto; max-width:100%; }
#<?php echo $styles['wrapperid']; ?> .imgnav { position:absolute; width:25%; height:<?php echo ((int) $styles['height'] + 8); ?>px; cursor:pointer; z-index:150; }
#<?php echo $styles['wrapperid']; ?> #imgprev { left:0; background:url('../images/left.gif') left center no-repeat; }
#<?php echo $styles['wrapperid']; ?> #imgnext { right:0; background:url('../images/right.gif') right center no-repeat; }
#<?php echo $styles['wrapperid']; ?> #imglink { position:absolute; zoom:1; background-color:#ffffff; height:<?php echo ((int) $styles['height'] + 8); ?>px; width:50%; left:25%; right:20%; z-index:999; opacity:0; filter:alpha(opacity=0); }
#<?php echo $styles['wrapperid']; ?> .linkhover { background:transparent url('../images/link.gif') center center no-repeat !important; text-indent:-9999px; opacity:.4 !important; filter:alpha(opacity=40) !important; }
#<?php echo $styles['wrapperid']; ?> #thumbnails { background:<?php echo $styles['background']; ?>; }
#<?php echo $styles['wrapperid']; ?> .thumbstop { margin-bottom:8px !important; }
#<?php echo $styles['wrapperid']; ?> .thumbsbot { margin-top:8px !important; }
#<?php echo $styles['wrapperid']; ?> #slideleft { float:left; width:20px; height:<?php echo ((int) $styles['thumbheight'] + 14); ?>px; background:url('../images/scroll-left.gif') center center no-repeat; background-color:#222; }
#<?php echo $styles['wrapperid']; ?> #slideleft:hover { background-color:#333; }
#<?php echo $styles['wrapperid']; ?> #slideright { float:right; width:20px; height:<?php echo ((int) $styles['thumbheight'] + 14); ?>px; background:#222 url('../images/scroll-right.gif') center center no-repeat; }
#<?php echo $styles['wrapperid']; ?> #slideright:hover { background-color:#333; }
#<?php echo $styles['wrapperid']; ?> #slidearea { float:left; position:relative; background:<?php echo $styles['background']; ?>; width:<?php echo ($styles['width'] != "auto") ? ((int) $styles['width'] - 57) . 'px' : '92%'; ?>; margin-left:5px; height:<?php echo ((int) $styles['thumbheight'] + 14); ?>px; overflow:hidden; }
#<?php echo $styles['wrapperid']; ?> #slider { position:absolute; left:0; height:<?php echo ((int) $styles['thumbheight'] + 14); ?>px; }
#<?php echo $styles['wrapperid']; ?> #slider img { cursor:pointer; border:1px solid #666; padding:2px; -moz-border-radius:4px; -webkit-border-radius:4px; float:left !important; }
#<?php echo $styles['wrapperid']; ?> #spinner { position:relative; top:50%; left:45%; text-align:left; }	
#<?php echo $styles['wrapperid']; ?> #spinner img { border:none; }
<?php endif; ?>