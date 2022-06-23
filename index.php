<?php get_header(); ?>
<main>
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-xl-9 col-lg-9 col-md-12">
                <section>
                    <h5 class="dark-grey-text font-weight-bold text-right">
                        <strong><?php if(is_home()){
								echo "اخبار و مقالات";
							}
                            elseif(is_category()){
								echo single_cat_title();
							}
                            elseif(is_tag()){
								echo single_tag_title();
							}
                            elseif(is_search()){
								echo "جستجو کردید برای : ";
								echo $_GET['s'];
							}
							?></strong>
                    </h5>
                    <hr>
                    <div class="row" >
                        <div class=" card-columns">
	                        <?php if(have_posts()){
		                        while(have_posts()){ the_post();
			                        foreach(get_the_category() as $category){
				                        if ($category->name!="حدیث روز" && $category->name!="بنر"){
					                        ?>
                                            <div class="card card-cascade narrower">
	                                            <?php if(has_post_thumbnail()){
		                                            foreach(get_the_category() as $category){
			                                            if ($category->name!="حدیث روز" && $category->name!="بنر"){?>
                                                            <div class="view view-cascade overlay">
                                                                <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>"
                                                                     alt="<?php the_title(); ?>" />
                                                                <a href="<?php the_permalink(); ?>">
                                                                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                                                </a>
                                                            </div>
			                                            <?php  }
		                                            }; } ?>
                                                <div class="card-body card-body-cascade text-center pb-0">
                                                    <h5 class="blue-text pb-2"><strong><?php the_title(); ?></strong></h5>
                                                    <p class="card-text">
	                                                    <?php echo get_the_excerpt(); ?>
                                                    </p>
                                                    <a class="text-center">
                                                        <p class="text-xsmall rtl"> <?php  echo get_the_date(); ?></p>
                                                    </a>
                                                    <div class="card-footer text-center">
                                                        <a class="btn btn-indigo btn-sm" href="<?php the_permalink(); ?>">مطالعه مطلب</a>
                                                    </div>
                                                </div>
                                            </div>
				                        <?php   }else{ if ($category->name=="حدیث روز"){?>
                                            <div class="card card-image mb-4" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
                                                <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                                                    <div class="text-center">
                                                        <br />
                                                        <br />
                                                        <br />
                                                        <p class="card-title pt-2 mt-5"><strong><?php the_title(); ?></strong></p>
                                                        <br />
                                                        <br />
                                                        <br />
                                                        <br />
                                                        <br />
                                                        <div class="text-center">
                                                            <a class="btn btn-info btn-sm" href="<?php the_permalink(); ?>"><i class="fas fa-clone left"></i> مشاهده</a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
				                        <?php   }}}}}else{ echo '<span>نتیجه ای یافت نشد</span>';}; ?>
                        </div>

                        <div class="col-md-12 text-center">
                            <div class="pagination-box">
								<?php echo paginate_links(); ?>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-12">
				<?php get_template_part("inc/search","box"); ?>
				<?php get_template_part("inc/Categuries",""); ?>
				<?php get_template_part("inc/Last","post"); ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>