<?php get_header(); ?>
this is archive pae
<main>
<a href="<?php echo site_url('/blog');?>">
<h2 class="page-heading"><?php the_archive_title();?></h2>
</a>
</main>
<?php

$args =  array(
    'post_type' => 'post',
    // 'posts_per_page' =>4,
);
$blogposts =  new WP_Query( $args);

while($blogposts->have_posts()){
   $blogposts->the_post();
    ?>

<div class="container">
        <a href="<?php the_permalink(); ?>">
        <h3><?php the_title(); ?></h3>
        <?php the_excerpt();?>

        <?php
        }
        ?>
</div>

<?php get_footer();?>