<div class="page-baner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span>
                        <?php if(is_home()){
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
                        elseif(is_single() || is_page()){
                            echo get_the_title();
                        }
                        elseif(is_404()){
                            echo "صفحه پیدا نشد !";
                        }
                        ?>
                    </span>
                </div>
            </div>
        </div>
    </div>