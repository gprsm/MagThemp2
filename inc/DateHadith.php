<section class="section mb-2 ">
    <p class="font-weight-bold text-right text-medium"><strong>حدیث روز </strong></p>
    <hr class="red title-hr mb-4">
    <div class="row">
        <?php
	$wordpress_posts = new WP_Query(array(
		'post_type'=>'post',
		'posts_per_page'=>'2',
		'post_status'=>'publish',
		'category_name'=>'hadith',
		'orderby'=>'rand'
	));
	if($wordpress_posts->have_posts()){ ?>
		<?php while ($wordpress_posts->have_posts()){
			$wordpress_posts->the_post();
			if(has_post_thumbnail()){ ?>
                        <div class="col-6">
                            <a class="view zoom" href="<?php the_permalink(); ?>">
                                <img class="d-block w-100" src="<?php the_post_thumbnail_url(); ?>"
                                     alt="<?php the_title(); ?>"
                                />
                            </a>
                        </div>
			<?php } } wp_reset_postdata(); ?>
	<?php } ?>
                    </div>
</section>
