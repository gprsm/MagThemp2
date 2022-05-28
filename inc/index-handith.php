<h4 class="font-weight-bold mt-5 text-right"><strong>همه احادیث</strong></h4>
<hr class="red title-hr">
<!-- Grid row -->
<div class="row mb-4">
	<?php
	$cat_id_Hadith = get_cat_ID ( 'حدیث روز' );
	$cat_id_Banner = get_cat_ID ( 'بنر' );

	$wordpress_posts = new WP_Query(array(
		'post_type'=>'post',
		'posts_per_page'=>'4',
		'post_status'=>'publish',
		'category__in' => array( $cat_id_Hadith )
	));
	if($wordpress_posts->have_posts()){
	while ($wordpress_posts->have_posts()){
	$wordpress_posts->the_post();?>
	<div class="col-md-3 mt-3">
        <a href="<?php the_permalink(); ?>">
            <div class="card card-cascade wider">
                <!-- Card image -->
                <div class="view-cascade overlay zoom">
                    <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="Card image cap">
                    <a href="<?php the_permalink(); ?>">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
            </div>
        </a>
    </div>
		<?php
	}; }wp_reset_postdata();  ?>

</div>
<div class="row">
    <div class="col-12 text-left" >
        <div class="text-left">
			<?php $cat_id_Hadith = get_cat_ID ( 'حدیث روز' ); ?>

            <a href="/?cat=<?php echo $cat_id_Hadith?>" class="btn btn-info btn-sm">همه مطالب</a>
        </div>
    </div>
</div>
<nav>
	<ul class="pagination pg-dark flex-center pt-4">
		<?php echo paginate_links(); ?>

	</ul>
</nav>