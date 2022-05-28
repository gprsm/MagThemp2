
<!-- Section: Categories -->
<section class="section mb-5">
	<p class="font-weight-bold mt-2 text-right"><strong>دسته بندی ها</strong></p>
	<hr class="red title-hr">
	<ul class="list-group z-depth-1 mt-4">
		<?php
		$categories = get_categories( array(
			'orderby' => 'name',
			'order'   => 'ASC'
		) );
		foreach( $categories as $category ) {?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="<?php echo get_category_link( $category->term_id ) ?>">
                    <?php echo $category->name ?></a>
                <span class="badge badge-danger badge-pill"><?php echo $category->count ?></span>
            </li>
		 <?php }; ?>
    </ul>

</section>
