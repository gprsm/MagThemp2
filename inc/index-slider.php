<div class="view zoom z-depth-1 rounded">
	<?php
	$wordpress_posts = new WP_Query(array(
		'post_type'=>'post',
		'posts_per_page'=>'1',
		'post_status'=>'publish',
		'category_name'=>'banner',
	));
	if($wordpress_posts->have_posts()){ ?>
            <?php while ($wordpress_posts->have_posts()){
                $wordpress_posts->the_post();
                if(has_post_thumbnail()){ ?>
                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"
                     class="hoverable">
                    <!--<div class="mask rgba-stylish-strong">
                        <div class="text-white text-center py-lg-5 py-0 my-0">
                            <div class="center-element-width">
                                <a href="<?php the_permalink(); ?>" class="text-white">
                                    <h4 class="card-title font-weight-bold pt-2 text-center">
                                        <strong><?php the_title(); ?></strong>
                                    </h4>
                                </a>
                            </div>



                    </div></div> -->
			<?php } } wp_reset_postdata(); ?>
	<?php } ?>
</div>