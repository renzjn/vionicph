<?php /**  * @copyright	Copyright (C) 2018 VionicShop - All Rights Reserved. **/ defined( '_JEXEC' ) or die( 'Restricted access' );
$scrolltop		= $this->params->get('scrolltop');
$logo			= $this->params->get('logo');
$logotype		= $this->params->get('logotype');
$sitetitle		= $this->params->get('sitetitle');
$sitedesc		= $this->params->get('sitedesc');
$menuid			= $this->params->get('menuid');
$animation		= $this->params->get('animation');
$app			= JFactory::getApplication();
$doc			= JFactory::getDocument();
$templateparams	= $app->getTemplate(true)->params;
$menu = $app->getMenu();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
<jdoc:include type="head" />
<?php if ( version_compare( JVERSION, '3.0.0', '<' ) == 1) { ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<?php } else { JHtml::_('bootstrap.framework');JHtml::_('bootstrap.loadCss', false, $this->direction);}?>
<?php include "functions.php"; ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/styles.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/custom-css/slider-color.css" type="text/css" />
<!--<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>css/bootstrap/css/bootstrap.min.css" type="text/css" /> -->
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/font-awesome.min.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/MyFontsWebfontsKit.css" type="text/css" />
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/bootstrap/js/bootstrap.min.js/"></script>
<!-- Custom CSS For IE -->
<!--[if IE 7]><link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/font-awesome-ie7.min.css" type="text/css" /><![endif]-->
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
<!-- Custom CSS -->
<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Sintony' rel='stylesheet' type='text/css'>
<?php if ($scrolltop == 'yes' ) : ?>
	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/scroll.js"></script>
<?php endif; ?>
</head>
<body class="cms-index-index cms-home">
<div id="wrapper">
<div id="mobile-responsive" class="topmost">
	<div class="container row">
			<div class="span_7 col clr"><jdoc:include type="modules" name="topmost-left"  /></div>
			<div class="span_4 col clr searchbox"><jdoc:include type="modules" name="topmost-right"  /></div>
	</div>
</div>
<div id="topbar">
<div id="header-wrap" class="clr">
    	<div id="header" class="container row clr">
            <div id="logo" class="customheader">
				<?php if ($logotype == 'image' ) : ?>
                <?php if ($logo != null ) : ?>
            <a href="<?php echo $this->baseurl ?>"><img src="<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($logo); ?>" alt="<?php echo htmlspecialchars($templateparams->get('sitetitle'));?>" /></a>
                <?php else : ?>
            <a href="<?php echo $this->baseurl ?>/"><img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/logo.png" border="0"></a>
                <?php endif; ?><?php endif; ?>
                <?php if ($logotype == 'text' ) : ?>
            <a href="<?php echo $this->baseurl ?>"><?php echo htmlspecialchars($sitetitle);?></a>
                <?php endif; ?>
                <?php if ($sitedesc !== '' ) : ?>
                <div id="site-description"><?php echo htmlspecialchars($sitedesc);?></div>
                <?php endif; ?>
            </div><!-- /logo -->
        	<?php if ($this->countModules('top')) : ?>
            <div id="top" class="col span_8">
				<jdoc:include type="modules" name="top" style="none" />
			</div>
        	<?php endif; ?>
            <?php include "social.php"; ?>
    	</div>
</div>
<div id="navbar-wrap">
    <nav id="navbar" class="container row clr">
    	<div id="" class="span_12 col clr">
        	<jdoc:include type="modules" name="menu" style="menu" />
         </div>
    </nav>
</div>
</div>
<?php $menu = $app->getMenu(); if ($menu->getActive() == $menu->getDefault()) { ?>
<div class="clever">Copyright &copy; <?php echo date("Y")?> VionicShop. All Rights Reserved</div>
<?php } ?>
<?php if ($this->countModules('menu')) : ?>
<div class="clr"></div>
<?php endif; ?>

<?php if (is_array($menuid) && !is_null($menu->getActive()) && in_array($menu->getActive()->id, $menuid, false)) { ?>
            <div id="slider-bg">
			<div id="slide-wrap" class="container row clr">
                    <div class="desktop-only"><?php include "slideshow.php"; ?></div>
										<div id="mobile-only" class="default-mobile"><jdoc:include type="modules" name="mobile-slide" /></div>
            </div>
			</div>
<?php } ?>
<?php if ($this->countModules('slogan1') || $this->countModules('slogan2')) : ?>
<div id="spacer-top" class="container row clr">
 <div><jdoc:include type="modules" name="slogan1"  /></div>
 <div><jdoc:include type="modules" name="slogan2" /></div>
</div>
<?php endif; ?>
<?php if ($this->countModules('contentslidetext1') || $this->countModules('contentslidetext2') || $this->countModules('shop-men-women-buttons')) : ?>
		<div id="mobile-responsive" class="container row clr contentslide-wrapper spacer-top">
		<div id="center-mobile" class="module col clr center-mobile"><jdoc:include type="modules" name="contentslidetext1" /></div>
		<div id="center-mobile" class="module col clr center-mobile"><jdoc:include type="modules" name="contentslidetext2" /></div>
		<div id="center-mobile" class="module col clr center-mobile"><jdoc:include type="modules" name="shop-men-women-buttons" /></div>
			</div>
<?php endif; ?>
		  <?php if ($this->countModules('breadcrumbs')) : ?>
				<div id="box-wrap" class="container row clr">
					<div id="main-content" class="row span_12 light">
        	<jdoc:include type="modules" name="breadcrumbs"  style="none"/>
				</div>
			</div>
        <?php endif; ?>
<?php if ($this->countModules('featured1') || $this->countModules('featured2') || $this->countModules('featured3')) : ?>
				<div id="spacer-top" class="container row clr">
				<div id="center-mobile" class="module span_4 col clr center-mobile"><jdoc:include type="modules" name="featured1" /></div>
				<div id="center-mobile" class="module span_4 col clr center-mobile"><jdoc:include type="modules" name="featured2" /></div>
				<div id="center-mobile" class="module span_4 col clr center-mobile"><jdoc:include type="modules" name="featured3" /></div>
				</div>
<?php endif; ?>
<?php if ($this->countModules('trending-left') || $this->countModules('trending-right') || $this->countModules('trending-middle-text') || $this->countModules('trending-middle-left') || $this->countModules('trending-middle-right')) : ?>
				<div id="spacer-top" class="container row clr">
				<div id="center-mobile" class="module span_5 col clr center-mobile"><jdoc:include type="modules" name="trending-left" /></div>
				<div id="center-mobile" class="module span_7 col clr center-mobile" ><jdoc:include type="modules" name="trending-right" />
							<div class="module span_12 col clr "><jdoc:include type="modules" name="trending-middle-text" /></div>
							<div class="module span_5 col clr">
							<div class="trending-thumb"><jdoc:include type="modules" name="trending-middle-left" /></div>
							</div>
							<div class="module span_5 col clr">
							<div class="trending-thumb"><jdoc:include type="modules" name="trending-middle-right" /></div>
						</div>
				</div>
				</div>
<?php endif; ?>
<div id="box-wrap" class="container row clr">
	<div id="main-content" class="row span_12">
							<?php if ($this->countModules('left')) : ?>
                            <div id="leftbar-w" class="col span_3 clr">
                            	<div id="sidebar">
                                	<jdoc:include type="modules" name="left" style="grid" />
                            	</div>
                            </div>
                            <?php endif; ?>
                                <div id="center-mobile" class="col span_<?php echo $compwidth ?> clr">
                                    <div id="comp-wrap">
                                        <jdoc:include type="message" />
                                        <jdoc:include type="component" />
                                    </div>
                                </div>
							<?php if ($this->countModules('right')) : ?>
                            <div id="rightbar-w" class="col span_3 clr">
                            	<div id="sidebar">
                                	<jdoc:include type="modules" name="right" style="grid" />
                            	</div>
                            </div>
                            <?php endif; ?>
														<div id="center-mobile" class="col span_<?php echo $compwidth ?> clr">
																<div id="comp-wrap">
																	<div id="center-mobile" class="module span_12 col clr center-mobile content-spacer"><jdoc:include type="modules" name="main-content" /></div>
																</div>
														</div>
	</div>
</div>
<?php if ($this->countModules('lookbook-left') || $this->countModules('lookbook-right-caption') || $this->countModules('lookbook-right') || $this->countModules('lookbook-button')) : ?>
				<div id="spacer-top" class="container row clr">
				<div id="center-mobile" class="module span_5 col clr center-mobile"><jdoc:include type="modules" name="lookbook-left" /></div>
				<div class="module span_6 col clr">
					<div id="lookbook-mobile" class="module span_12 before-overlay "><jdoc:include type="modules" name="lookbook-right-caption" /></div>
				<!--	<div id="lookbook-mobile" class="module span_12"><jdoc:include type="modules" name="lookbook-right-caption" /></div> !-->
					 <div id="center-mobile" class="module span_12 "><jdoc:include type="modules" name="lookbook-right" /></div>
					<div id="center-mobile" class="module span_12"><div class="testimonialtextformatting shop-lookbook"><jdoc:include type="modules" name="lookbook-button" /></div></div>
				</div>
			</div>
<?php endif; ?>
<?php if ($this->countModules('discover-caption') || $this->countModules('discover-image') || $this->countModules('discover-button') || $this->countModules('discover-right')) : ?>
				<div id="spacer-top" class="container row clr">
					<div class="module span_6 col clr">
						<div id="center-mobile" class="module span_12 col clr center-mobile"><jdoc:include type="modules" name="discover-caption" /></div>
						<div id="center-mobile" class="module span_12 col clr center-mobile"><div class="discoverleftimage center-mobile"><jdoc:include type="modules" name="discover-image" /></div></div>
						<div id="center-mobile" class="module span_12 col clr center-mobile"><div id="spacer-top"><jdoc:include type="modules" name="discover-button" /></div></div>
					</div>
					<div class="module span_6 col clr">
							<div class="center-mobile"><jdoc:include type="modules" name="discover-right" /></div>
					</div>
				</div>
<?php endif; ?>
<?php if ($this->countModules('elevated-content') || $this->countModules('natural-content') || $this->countModules('elevated-left') || $this->countModules('learnmore-left') || $this->countModules('elevated-middle') || $this->countModules('elevated-right') || $this->countModules('learnmore-right') ) : ?>
			<div class="elevated-bgbot spacer-top">
				<div class="container row clr">
					<div class="module span_6 col clr discovertextcontent elevated-padding"><jdoc:include type="modules" name="elevated-content" /></div>
					<div class="module span_6 col clr discovertextcontent elevated-padding"><jdoc:include type="modules" name="natural-content" /></div>
				</div>
					<div class="container row clr">
					<div id="center-mobile" class="module span_15 col clr center-mobile">
							<div id="center-mobile" class="module span_12 col clr center-mobile"><jdoc:include type="modules" name="elevated-left" /></div>
							<div id="center-mobile" class="module span_12 col clr center-mobile"><jdoc:include type="modules" name="learnmore-left" /></div>
					</div>
					<div id="center-mobile" class="module span_14 col clr center-mobile"><jdoc:include type="modules" name="elevated-middle" /></div>
					<div id="center-mobile" class="module span_15 col clr center-mobile">
					<div id="center-mobile" class="module span_12 col clr"><div class="spacer-top center-mobile"><jdoc:include type="modules" name="elevated-right" /></div></div>
					<div id="center-mobile" class="module span_12 col clr"><div class="spacer-top center-mobile"><jdoc:include type="modules" name="learnmore-right" /></div></div>
					</div>
				</div>
			</div>
<?php endif; ?>
			<?php if ($this->countModules('vionic-footer-top1') || $this->countModules('vionic-footer-top2') || $this->countModules('vionic-footer-top3')) : ?>
				<div class="vionic-footer-wrapper">
				<div class="vionic-footer-alignment service-slogan"><jdoc:include type="modules" name="vionic-footer-service" /></div>
				<div class="container row clr">
					<div class="vionic-footer-alignment module featured  span_12 col clr"><jdoc:include type="modules" name="vionic-footer-top1" /></div>
					<div class="vionic-footer-alignment module featured  span_12 col clr"><jdoc:include type="modules" name="vionic-footer-top2" /></div>
					<div class="vionic-footer-alignment module featured  span_12 col clr" style="margin-bottom: 35px;"><jdoc:include type="modules" name="vionic-footer-top3" /></div>
				</div>
			</div>
			<?php endif; ?>
			<?php if ($this->countModules('vionic-footer-bot1') || $this->countModules('vionic-footer-bot2') || $this->countModules('vionic-footer-bot3')) : ?>
			<div id="elevated-spacer" class="container row clr">
				<div id="footer-nav" class="module span_4 col clr center-mobile"><jdoc:include type="modules" name="vionic-footer-bot1" /></div>
				<div id="footer-nav" class="module span_4 col clr center-mobile"><jdoc:include type="modules" name="vionic-footer-bot2" /></div>
				<div id="footer-nav" class="module span_4 col clr center-mobile"><jdoc:include type="modules" name="vionic-footer-bot3" /></div>
			</div>
<?php endif; ?>
				<div id="footer-wrap"  class="container row clr" >
        <?php if ($this->countModules('copyright')) : ?>
            <div class="copyright">
                <jdoc:include type="modules" name="copyright"/>
            </div>
        <?php endif; ?>
        <?php if ($this->countModules('footer-menu')) : ?>
            <div id="footer-nav">
				<jdoc:include type="modules" name="footer-menu" style="none" />
            </div>
        <?php endif; ?>
</div>
</div>
</body>
</html>
