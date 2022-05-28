<section class="section extra-margins mt-3">
	<h4 class="font-weight-bold text-right"><strong>تالار اندیشه</strong></h4>
	<hr class="red title-hr">
	<div class="row mb-4">
		<?php
		$wordpress_posts = new WP_Query(array(
			'post_type'=>'post',
			'posts_per_page'=>'3',
			'post_status'=>'publish',
			'category_name'=>'think_room',
		));
		if($wordpress_posts->have_posts()){ while ($wordpress_posts->have_posts()){
			$wordpress_posts->the_post();?>
			<div class="col-md-4 my-3">
				<div class="card">
					<div class="view overlay zoom">
						<?php if(has_post_thumbnail()){ ?>
						<img src="<?php the_post_thumbnail_url(); ?>"
						     class="card-img-top" alt="<?php the_title(); ?>"
						<a href="<?php the_permalink(); ?>">
							<div class="mask rgba-white-slight"></div>
						</a> <?php } ?>
					</div>
					<div class="card-body">
						<!-- Title -->
						<span class="card-title text-right text-medium rtl">
                            <strong style="display: flow-root;">
								<?php the_title(); ?>
							</strong></span>
						<hr>
						<!-- Text -->
						<p class="card-text mb-3 rtl"><?php echo get_the_excerpt(); ?></p>

						<p class="font-small font-weight-bold dark-grey-text mb-1">
							<i class="fa-thin fa-clock-eight"></i> <?php echo get_the_date(); ?>
							<span class="font-small grey-text mb-0" style="float: left">

							</span></p>
						<hr />


						<p class="mb-0 font-small font-weight-bold text-left mt-3">
							<a href="<?php the_permalink(); ?>"> ادامه مطلب
								<i class="fas fa-angle-left"></i> </a></p>

					</div>
				</div>
			</div>
		<?php }wp_reset_postdata();
		} ?>
	</div>
    <div class="row">
        <div class="col-12 text-left" >
            <div class="text-left">
		        <?php $cat_id_Hadith = get_cat_ID ( 'تالار اندیشه' ); ?>

                <a href="/?cat=<?php echo $cat_id_Hadith?>" class="btn btn-info btn-sm">همه مطالب</a>
            </div>
        </div>
    </div>
</section>
