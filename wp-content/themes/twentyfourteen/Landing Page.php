<?php
/**
 * 
 Template Name: Landing Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main-content" class="main-content">

<?php
	if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
?>
	<div id="primary" class="content-area">
		<div id="content" class="Landing-page-content" role="main">
<h1>coming soon!</h1>
<h2>bluestockings</h2>
<p>an alternative lingerie boutique<br/>
underthings for everyone</p>
<br/>
<!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="//bluestockingsboutique.us9.list-manage.com/subscribe/post?u=85aa1bdc14611c28a3a893aa9&amp;id=ebdf8ac3bf" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<label for="mce-EMAIL">Subscribe for Updates</label>
	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_85aa1bdc14611c28a3a893aa9_ebdf8ac3bf" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
<br/>
<br/>
<br/>
</div>
<div style="width:30%;margin-left:20%;float:left;">
<p>please contact us with any inquiries</p>
</div>
<div style="width:30%;margin-right:20%;float:left;">
<p><a href="mailto:jeanna@bluestockingsboutique.com">jeanna@bluestockingsboutique.com</a></p>
</div>
<!--End mc_embed_signup-->
		<div>	<a href="https://twitter.com/BluestockingsBo"><img style="max-width:50px;margin-right:25px;" src="http://bluestockingsboutique.com/wp-content/uploads/2014/09/icon-tw.png"></a><a href="http://bluestockingsbo.wordpress.com/"><img style="max-width:50px;" src="http://bluestockingsboutique.com/wp-content/uploads/2014/09/1411683673_wordpress-128.png"></a></div>

		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- #main-content -->

<?php
get_footer();