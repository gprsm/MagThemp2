<?php get_header(); ?>
    <main>
        <div class="container-fluid">
            <!-- Magazine -->
            <div class="row mt-2">
                <?php while(have_posts()){ the_post(); ?>
                    <div class="col-xl-9 col-md-12">
                        <div class="row mt-2 mb-1 pb-3 mx-2">
                            <div class="card card-body mb-3 rtl">
                                <div class="post-data mb-4">
                                    <div class="row">
                                        <div class="col-6 text-right">
                                            <span class="font-small grey-text right">
                                                <i class="fa-thin fa-box-archive fa-2x"></i>
	                                            <?php the_category(" , "); ?></a>
                                            </span>
                                        </div>
                                        <div class="col-6 ">
                                            <span class="font-small grey-text left">
                                                <i class="fa-thin fa-calendar-lines-pen fa-2x"></i>
                                                <?php  echo get_the_date(); ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="mt-3 text-right">
                                    <strong class="text-small">
	                                    <?php the_title(); ?>
                                    </strong>
                                </h5>
                                <hr class="green title-hr">
	                            <?php if(has_post_thumbnail()){
                                    foreach(get_the_category() as $category){
                                    if ($category->name!="حدیث روز" && $category->name!="بنر"){?>
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-fluid z-depth-1 rounded">
                                  <?php  }
	                            }; } ?>
                                <div class="row">
                                    <div class="col-md-6 mt-2">
                                        <p class="text-xsmall dark-grey-text">
                                            <?php $comment_num=get_comments_number();
                                            if ($comment_num!="0"){
                                            ?>
                                                <span>
                                                <i class="fa-thin fa-comment fa-2x"></i>
                                                <?php echo get_comments_number(); ?> نظر</span>
                                            <?php }; ?>

                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row mx-md-4 px-4 mt-3 text-right rtl">
                                    <div class="container-fluid px-5 m-3" style="background-color: #f6f9fd">
                                        <p class="mb-3">
		                                    <?php the_excerpt(); ?>
                                        </p>
                                    </div>
                                    <p class="dark-grey-text article">
	                                    <?php the_content(); ?>
                                    </p>
                                </div>
                                <hr />
                                <div class="post_tags">
		                            <?php the_tags("#  "," "," "); ?>
                                </div>
                            </div>
                        </div>
	                    <?php get_template_part("inc/releated","posts"); ?>
                    </div>
                <?php } wp_reset_postdata(); ?>
                <div class="col-xl-3 col-md-12 widget-column mt-0">
	                <?php get_template_part("inc/search","box"); ?>
	                <?php get_template_part("inc/Categuries",""); ?>
	                <?php get_template_part("inc/Last","post"); ?>
                </div>
            </div>
            <div class="row mt-3">
                <div class="text-right comments md-form">
		            <?php comments_template(); ?>
                    <script>
                        $( "#submit" ).addClass( "btn aqua-gradient " );
                    </script>
                </div>
            </div>
        </div>
    </main>
<?php get_footer(); ?>