<?php get_header(); ?>
<div class="container">
<div class="row">
    <div class="col-md-2"> left sidebar</div>
    <div class="col-md-7"> 
                <main>
                    <a href="<?php echo site_url('/blog');?>">
                        <h2 class="page-heading"><?php the_archive_title();?></h2>
                    </a>
                </main>
            <?php

                $args =  array(
                    'post_type' => 'post',
                    'category_name' => 'restaurant',
                );
                $blogposts =  new WP_Query( $args);


                while(have_posts()){
                the_post();
            ?>

            <!-- <div class="container pl-0"> -->
            <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail();?>
                    <h3><?php the_title(); ?></h3></a>
                    <?php the_excerpt();?>

                    <?php
                    }


                    ?>
            <!-- </div> -->

    </div>
    
    <div class="col-md-3">right sidebar </div>


</div>
                </div>






