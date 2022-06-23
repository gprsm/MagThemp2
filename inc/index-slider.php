<div class="">
	<?php
	$wordpress_posts = new WP_Query(array(
		'post_type'=>'post',
		'posts_per_page'=>'6',
		'post_status'=>'publish',
		'category_name'=>'banner',
	));
	if($wordpress_posts->have_posts()){ ?>
        <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
	            <?php $counter1=0; while ($wordpress_posts->have_posts()){
		            $wordpress_posts->the_post();
		            if(has_post_thumbnail()){ ?>
                        <li data-target="#carousel-example-1z" data-slide-to="<?php echo $counter1 ?>" class="<?php if ($counter1==0) echo "active" ?>"></li>
		            <?php } $counter1++; }  ?>

            </ol>
        <div class="carousel-inner" role="listbox">
	        <?php $counter=0; while ($wordpress_posts->have_posts()){
		        $wordpress_posts->the_post();
		        if(has_post_thumbnail()){ ?>
                    <div class="carousel-item <?php if ($counter==0) echo "active" ?>">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"
                                 class="d-block w-100">
                        </a>
                    </div>
                    <!--<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"
                         class="hoverable">
                    <div class="mask rgba-stylish-strong">
                        <div class="text-white text-center py-lg-5 py-0 my-0">
                            <div class="center-element-width">
                                <a href="<?php the_permalink(); ?>" class="text-white">
                                    <h4 class="card-title font-weight-bold pt-2 text-center">
                                        <strong><?php the_title(); ?></strong>
                                    </h4>
                                </a>
                            </div>



                    </div></div> -->
		        <?php } $counter++; } wp_reset_postdata(); ?>
        </div>
            <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                <!---<span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
                <i class="fa-thin fa-chevron-left fa-3x" style="text-shadow: 2px 2px 4px #000000;"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                <!--<span class="carousel-control-next-icon" aria-hidden="true"></span> -->
                <i class="fa-thin fa-chevron-right fa-3x" style="text-shadow: 2px 2px 4px #000000;"></i>
                <span class="sr-only">Next</span>
            </a>
    </div>

	<?php } ?>
</div>

