<?php drupal_add_js(drupal_get_path('theme','cfe') . '/js/script.js'); ?>
<?php drupal_add_js(drupal_get_path('theme','cfe') . '/js/slideshow.js'); ?>
<?php drupal_add_library('system', 'ui'); ?>

<!-- Top Navigation: Start -->
<?php if ($logged_in): ?>
<?php require_once('nav.tpl.php');?>
<!-- Top Navigation: End -->

<!-- Body Contents: Start -->
<div class="wrapper">

		<!-- Slideshow: Start -->
		<div id="slideshow">
			<div id="slideshow_photos">
				<ul>
				<?php
					$slides = slideshow();
					$i = 1;
					foreach ($slides as $slide) {
						echo "\n".'<li id="slideshow_photo'.$i.'"><img src="'.$base_path.'images/featured/large/'.$slide['photo'].'" width="1000" border="0" /><span>';
						echo "\n".'<h2>'.htmlspecialchars($slide['title']).'</h2>';
						if (strlen($slide['subtitle']) > 0) echo "\n".'<h3>'.htmlspecialchars($slide['subtitle']).'</h3>';
						echo "\n".'<p>'.htmlspecialchars($slide['excerpt']);
						echo '<a href="'.$slide['readmore'].'" class="button" target="_blank">READ MORE</a></p>';
						echo "\n".'</span></li>';
						$i++;
					}
				?>
				</ul>
			</div>

			<!-- Slideshow Controls: Start -->
			<div id="slideshow_controls">

				<!-- Slideshow Thumbnails: Start -->
				<div id="slideshow_controls_thumbnails">
					<ul>
					<?php
						$i = 1;
						foreach ($slides as $slide) {
							echo "\n".'<li id="slideshow_thumbnail'.$i.'"><span><img src="'.$base_path.'images/featured/thumb/'.$slide['thumbnail'].'" width="172" height="96" /></span>';
							echo "\n".'<div class="caption">'.htmlspecialchars($slide['title']).'</div>';
							if ($i == 1) echo "\n".'<div id="selected"></div>';
							echo "\n".'</li>';
							$i++;
						}
					?>
					</ul>
				</div>
				<!-- Slideshow Thumbnails: End -->

			</div>
			<!-- Slideshow Controls: End -->
		</div>
		<!-- Slideshow: End -->

		<!-- Page Contents: Start -->
		<div id="page_contents" class="homepage">
			<aside>
				<?php print $page['sidebar_first'] ? render($page['sidebar_first']) : ''; ?>
			</aside>
			<div class="col_2">
				<?php print render($page['content']); ?>
			</div>
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

<?php else: ?>
  <p style="align: center;">Please <a href="/sandbox/user/login">log in</a> to view this site.</p>
<?php endif; ?>
