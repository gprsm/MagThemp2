<?php get_header(); ?>
<main>
	<div class="container-fluid">
		<!-- Magazine -->
		<div class="row mt-5">
			<!-- Main news -->
			<div class="col-xl-9 col-md-12">
				<?php get_template_part("inc/index","slider"); ?>
				<?php get_template_part("inc/ThinkRoom",""); ?>
				<?php get_template_part("inc/Reriginus","posts"); ?>
				<?php get_template_part("inc/index","handith"); ?>

			</div>
			<div class="col-xl-3 col-md-12 widget-column mt-0">
				<?php get_template_part("inc/LeftSide",""); ?>
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>