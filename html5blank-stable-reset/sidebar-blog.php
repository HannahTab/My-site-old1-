<!-- sidebar -->
<aside class="sidebar" role="complementary">

	<?php //get_template_part('searchform'); ?>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-3')) ?>
	</div>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-4')) ?>
	</div>

</aside>
<!-- /sidebar -->