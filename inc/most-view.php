
<section class="section widget-content">
	<p class="font-weight-bold pt-2 text-right"><strong>پربیننده ترین ها</strong></p>
	<hr class="red title-hr mb-4">
	<div class="card card-body pb-0">
		<?php
		$cat_id_Hadith = get_cat_ID ( 'حدیث روز' );
		$cat_id_NoCat = get_cat_ID ( 'دسته‌بندی نشده' );
		$cat_id_Banner = get_cat_ID ( 'بنر' );

		$wordpress_posts = new WP_Query(array(
			'post_type'=>'post',
			'post_status' => 'publish',
			'order' => 'DESC',
			'orderby' => 'meta_value_num',
			'meta_key' => 'views',
			'posts_per_page' => '6',
            'category__not_in' => array( $cat_id_Hadith,$cat_id_NoCat,$cat_id_Banner )
		));
		if($wordpress_posts->have_posts()){
			while ($wordpress_posts->have_posts()){
				$wordpress_posts->the_post();?>
				<div class="row" >
					<div class="col-4">
						<?php if(has_post_thumbnail()){ ?>
							<div class="view overlay zoom">
								<img src="<?php the_post_thumbnail_url(); ?>"
								     class="img-fluid rounded-0" alt="<?php the_title(); ?>">
								<a>
									<div class="mask rgba-white-slight"></div>
								</a>
							</div>
						<?php }  ?>
					</div>
					<div class="col-8 rtl">
						<h6 class="mt-0 mb-3 text-right">
							<a href="<?php the_permalink(); ?>">
								<strong><?php the_title(); ?></strong>
							</a>
						</h6>
					</div>
				</div>
			<?php }  ?>
		<?php };wp_reset_postdata(); ?>
	</div>
</section>