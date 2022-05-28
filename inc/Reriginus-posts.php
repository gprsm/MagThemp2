<h4 class="font-weight-bold text-right"><strong>مذهبی</strong></h4>
<hr class="red title-hr" />
<div class="card mb-3 text-center hoverable">
	<div class="card-body rtl">
		<?php
		$mastrId=0;
		$maz_posts = new WP_Query(array(
			'post_type'=>'post',
			'posts_per_page'=>'1',
			'post_status'=>'publish',
			'category_name'=>'religious',
		));
		if($maz_posts->have_posts())
		{
			while ($maz_posts->have_posts())
			{
				$maz_posts->the_post(); $mastrId=$post->ID; ?>
				<div class="row">
					<div class="col-md-5 mx-3 my-3">
						<div class="view overlay">
							<?php if(has_post_thumbnail()){ ?>
								<img src="<?php the_post_thumbnail_url(); ?>"
								     class="card-img-top" alt="<?php the_title(); ?>"
								<a href="<?php the_permalink(); ?>">
									<div class="mask rgba-white-slight"></div>
								</a> <?php } ?>
						</div>
					</div>
					<div class="col-md-6 text-right ml-3 mt-3">
						<h4 class="mb-4"><strong><?php the_title(); ?></strong></h4>
						<p class="dark-grey-text">
							<?php echo get_the_excerpt(); ?>
						</p>
						<p class="text-xsmall"><i class="fa-thin fa-clock-eight"></i>
							<?php echo get_the_date(); ?></p>
						<div class="text-left">
							<a class="btn btn-indigo btn-sm" href="<?php the_permalink(); ?>">ادامه مطلب</a>
						</div>
					</div>
				</div>
			<?php }};wp_reset_postdata(); ?>
		<!-- Grid row -->
		<hr />
		<div class="row mt-4">
			<?php
			$Other_maz_posts = new WP_Query(array(
				'post_type'=>'post',
				'posts_per_page'=>'8',
				'post_status'=>'publish',
				'category_name'=>'religious',
				'post__not_in'=>array($mastrId),
			));
			if($Other_maz_posts->have_posts())
			{
				while ($Other_maz_posts->have_posts())
				{
					$Other_maz_posts->the_post();?>
					<div class="col-5 mx-3 my-3 zoom">
						<div class="single-news">
							<div class="row mb-2 rtl">
								<div class="col-md-4">
									<div class="view overlay rgba-white-slight z-depth-1 mb-2">
										<?php if(has_post_thumbnail()){ ?>
											<img src="<?php the_post_thumbnail_url(); ?>"
											     class="card-img-top" alt="<?php the_title(); ?>"
											<a href="<?php the_permalink(); ?>">
												<div class="mask rgba-white-slight"></div>
											</a> <?php } ?>
									</div>

								</div>
								<!-- Excerpt -->
								<div class="col-md-8 ">
									<p class="text-right rtl mb-0 text-justify">
										<a href="<?php the_permalink(); ?>">
											<i class="fas fa-angle-left float-left"></i>
											<span class="text-justify"><?php the_title(); ?></span>
										</a>
									</p>
									<p class="text-right">
										<small class="text-xsmall"><i class="fa-thin fa-clock-eight"></i>
											<?php echo get_the_date(); ?></small>
									</p>
								</div>

							</div>
						</div>
					</div>

					<?php
				}; }wp_reset_postdata();  ?>
		</div>
        <div class="row">
            <div class="col-12 text-left" >
                <div class="text-left">
					<?php $cat_id_Hadith = get_cat_ID ( 'مذهبی' ); ?>

                    <a href="/?cat=<?php echo $cat_id_Hadith?>" class="btn btn-info btn-sm">همه مطالب</a>
                </div>
            </div>
        </div>
	</div>
	<!-- News card -->

</div>