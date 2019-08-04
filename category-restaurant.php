<?php get_header(); ?>
<div class="container">
<div class="row">
    <!-- <div class="col-md-2"> left sidebar</div> -->
<div class="col-xs-12 col-sm-12 col-md-8">

        <article>
            <h1>our title is here</h1>
            <div id="article">introductory or filters goes here</div>

            <h4 class="title-bar"><a href="<?php echo site_url('/blog');?>">
                    <h2 class="page-heading"><?php the_archive_title();?></h2>
                </a>
            </h4>

        <div class="container-fluid">
            <div class="post">


            <?php

                $args =  array(
                    'post_type' => 'post',
                    'category_name' => 'restaurant',
                );
                $blogposts =  new WP_Query( $args);
                    while($blogposts->have_posts()){

                    $tel = get_post_meta($post->ID, 'tel',true);
                    $address = get_post_meta($post->ID, 'address',true);
                    $tel = get_post_meta($post->ID, 'tel',true);
                    $category = get_post_meta($post->ID, 'category',true);
                    $direction = get_post_meta($post->ID, 'direction',true);

                    $blogposts->the_post();
             
            ?>


            <div class="col-sm-4"><img src="<?php the_post_thumbnail();?>"class="img-fluid"></div>
               <div class="col-sm-8">
                   <h4 class="title"><?php the_title(); ?></h4>
                   <span class="address"><i class="fas fa-map-marker-alt"></i> <span class="text"><?php echo $address;?></span></span>
                   <span class="location"><i class="fas fa-globe-americas"></i><span class="text">Msida</span></span>
                   <span class="tel"><i class="fas fa-mobile-alt"></i><span class="text"><?php echo $tel; ?></span></span>

                   <div class="contacts">
                        <span class="tel-email"> 
                            <i class="fab fa-internet-explorer"></i>
                            <a href="www.chinese.com"> www.chinese.com</a> 
                        </span>
                    </div>

                    <span class="info">tIt is a long established fact that a reader will be distracted by the readable content of a p
                            Ipsum is that it has a more-or-less normal distribution of letters, as opposed </span>
                </div>
           </div>

        </article>
    </div>

 <?php
  }
?>
    </div>
                </div>






