<?php drupal_add_js(drupal_get_path('theme','cfe') . '/js/script.js'); ?>
<?php drupal_add_library('system', 'ui'); ?>

<!-- Top Navigation: Start -->
<?php require_once('nav.tpl.php');?>
<!-- Top Navigation: End -->

<!-- Body Contents: Start -->
<div class="wrapper">
		<div id="slideshow_shadow_special"></div>
		<div class='landingPageWall' id='landingPageParticipate'><div class='wallTitle'></div></div>
		<!-- Page Contents: Start -->
		<div id="page_contents">

			<?php if ($page['sidebar_first']): ?>
				<div class="col_1">
					<?php print render($page['sidebar_first']); ?>
				</div>
				<div class="col_2">
			<?php endif; ?>
			<?php if (!empty($content['field_image'])):?>
				<div class="feature_photo">
					<?php print render($content['field_image']); ?>
					<h2 class="title" id="page-title"><?php print $title; ?></h2>
				</div>
			<?php else: ?>
				<?php if ($title): ?><h2 class="title" id="page-title"><?php print $title; ?></h2><?php endif; ?>
			<?php endif; ?>
			<?php if ($messages): ?>
				<div id="messages"><?php print $messages; ?></div>
			<?php endif; ?>
			<?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
			<?php print render($page['content']); ?>
			<?php if ($page['sidebar_first']): ?>
				</div>
			<?php endif; ?>
		</div>
		<!-- Page Contents: End -->

		<!-- Footer: Start -->
		<footer>
			<div class="footer_col">
				<a href="<?php print $base_path; ?>"><img src="<?php print $base_path . $directory; ?>/css/components/logo-cfe-mono.png" width="96" height="35" border="0"></a>
			</div>
			<div class="footer_col copyright"><a href="http://www.regents.umich.edu/">&copy; <?php echo date('Y'); ?>, The Regents of the University of Michigan</a> &nbsp; | &nbsp; <a href="<?php print $base_path . 'contact-us';?>">Contact Us</a><!-- &nbsp; | &nbsp; <a href="<?php print $base_path . 'faq';?>">Frequently Asked Questions</a>--></div>
			<div class="footer_col">
				<img src="<?php print $base_path . $directory; ?>/css/components/logo-cfe-spark.png" width="30" border="0">
			</div>
		</footer>
		<!-- Footer: End -->
	</div>
</div>
<!-- Body Contents: End -->
