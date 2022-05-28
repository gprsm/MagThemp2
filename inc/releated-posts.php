<?php
    $posts_cats = wp_get_post_categories( get_the_ID(), array( 'fields' => 'ids' ) );

    $releated_posts = new WP_Query(array(
        'post_type'=>'post',
        'posts_per_page'=>'3',
        'post_status'=>'publish',
        'category__in'=>$posts_cats,
        'post__not_in' =>array($post->ID),
        'orderby' => 'rand'
    ));

    if($releated_posts->have_posts()){
?>
        <div class="row mt-0">
		    <div class="col-12">
                <h5 class="font-weight-bold text-right">
                    <strong>مطالب مرتبط</strong>
                </h5>
                <hr class="red title-hr">
                <div class="row single-post mb-2">
	                <?php while ($releated_posts->have_posts()){
		                $releated_posts->the_post();?>
                        <div class="col-md-4 my-3">
                            <div class="card card-ecommerce">
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
	                <?php }wp_reset_postdata();  ?>
                </div>
            </div>
        </div>

<?php } ?>