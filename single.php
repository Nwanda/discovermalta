<?php get_header(); ?>

<?php 
while(have_posts()){
    the_post();
?>



<div class="container">
<div class="row">
<div class="col">left sidebar</div>
<div class="col">

<h2><?php the_title();?></h2>
    Posted by <?php the_author();?>
    <img src="<?php  echo get_the_post_thumbnail_url(get_the_ID());?>"/>
    <?php the_content();

    }
    ?>
</div>
<div class="col">right sidbar</div>

</div>

</div>



<?php get_footer();?>