<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>



	<?php do_action( 'storefront_before_footer' ); ?>
					
					<div class="footer-w3l">
						<div class="container">
							<div class="footer-grids">
								<div class="col-md-4 footer-grid">
									<h4>Thông tin về chúng tôi </h4>
									<p><?= get_field("giới_thiệu","option") ?></p>
									<div class="social-icon">
										<a href="<?= get_field("link_facebook","option") ?>"><i class="icon1 fa fa-facebook" aria-hidden="true"></i></a>
										<a href="mailto:<?= get_field("link_email","option"); ?>"><i class="icon1 fa fa-envelope" aria-hidden="true"></i></i></a>
										
										
									</div>
								</div>
								
								<div class="col-md-4 footer-grid">
									<h4>Thông tin</h4>
										<?php 
									wp_nav_menu( array(
									    'menu' => 'menu-main',
									    'container' => 'ul',
									    'menu_class'=> 'nav navbar-nav'
									 ) ); ?>
								</div>
								<div class="col-md-4 footer-grid foot">
									<h4>Liên hệ</h4>
									<ul>
										<li><i class="fa fa-location-arrow" aria-hidden="true"></i></i><a href="#"><?= get_field("dia_chi","option") ?></a></li>
										<li><i class="fa fa-volume-control-phone" aria-hidden="true"></i><a href="tel:<?=get_field("dien_thoai","option")?>"><?= get_field("dien_thoai","option") ?></a></li>
										<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:<?= get_field("email","option") ?>"> <?= get_field("email","option") ?></a></li>
										
									</ul> 
								</div>
							<div class="clearfix"> </div>
							</div>
							
						</div>
					</div>
					
					<div class="copy-section">
						<div class="container">
							<div class="copy-left">
								<p>&copy; 2018 New Shop . All rights reserved | create by Vusaka</p>
							</div>
							
							<div class="clearfix"></div>
						</div>
					</div>

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
