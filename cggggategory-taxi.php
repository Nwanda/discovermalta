<?php get_header(); ?>


<div class="container">

<div class="row">





<!-- middle content area
 -->
 <div class="col-md-7"> <!--middle content-->


<?php


$args =  array(
'post_type' => 'post',
'category_name' => 'taxi',

);
$blogposts =  new WP_Query( $args);

while($blogposts->have_posts()){
$address = get_post_meta($post->ID, 'address',true);
$tel = get_post_meta($post->ID, 'tel',true);
$category = get_post_meta($post->ID, 'category',true);
$direction = get_post_meta($post->ID, 'direction',true);
$blogposts->the_post();

?>





<section class="clearfix" id="main">
<div class="wrap row">
    <div class="contentarea  wmap_static" id="content">
        <section class="search_result_listing list" id="loop_listing_taxonomy">
            <article class="post">

                    <div class="listing_img">
                       <img src="<?php the_post_thumbnail();?>">
                       
                    </div>

                    <div class="entry">

                        <div class="listing-wrapper">
                            <div class="entry-title">
                                <h2 class="entry-title">
                                    <a title="Gotham Bar and Grill" href="" rel="bookmark" itemprop="url"> <?php the_title(); ?></a>
                                </h2>
                            
                            </div>
                        
                            <div class="entry-details">
                                <p class="address"><?php echo $address; ?></p>
                                <p class="time"><?php echo $category; ?></p>
                                <p class="time"><?php echo $direction; ?></p>
                                <p class="phone"><?php echo $tel; ?></p>
                            </div>

                        </div> <!--end of listing-wrapper -->

                        <div class="entry-summary" itemprop="description">
                            <p> <?php the_excerpt();?></p>
                        </div> 

                    </div>

                    <div class="container-link">
                        <div class="inner-link">
                            <span class="visit_site">Visit Website</span>
                        </div>

				</div>
            </article>
		</section>
		

    </div>
</div>
</section>

    <?php } ?>

</div> <!--end of middle content-->


























<!-- right sidebar  -->
<div class="col-md-3">  


				
				
							<div class="btn-group btn-block mb-2">
									<a class="btn btn-lg btn-secondary h6"><i class="fa fa-user-circle text-white" style="width:16px; height:20px"></i></a>
										  <a href="" class="btn btn-lg   btn-block btn-secondary h6 text-uppercase font-weight-bold">
									Sign up/in  d    </a>
									   </div>
				
				
				
						<div class="sidebar1">
					
				
							<!-- advertise with us -->
							<div class="wlt_sellspace sidebar270a"><a href="http://so9.wlthemes.com/advertising/?selladd=1&amp;ad=sidebar270a">
								<div class="sellspace_banner banner_270_200 text-center hidden-xs hidden-sm" style="width:255px; height:200px">
								<div class="title">Advertise Here</div> <div class="pricing">view pricing</div>
								</div>
								</a>
							</div>
							<!-- encd of advert -->
				
							<!-- most search -->
							<h4 class="title-bar"><i class="fa fa-folder-open-o" aria-hidden="true"></i> Categories</h4>
							<div class="card mb-4 py-0">
									<div class="card-body py-1">
									   <ul class="list-group list-group-flush top10 popular">
										<li class="list-group-item px-0 py-2">
											 <div class="image">
												<img src="https://www.premiumpress.com/_demoimages/softwaretheme/12.jpg" alt="" data-src="https://www.premiumpress.com/_demoimages/softwaretheme/12.jpg" class="wlt_image img-fluid">               </div>
											 <div class="details mt-1">
												<a href="" class="font-weight-bold">Sample Affiliate Link</a>
											 </div>
											 <p class="mb-0 mt-1 small">
											 Category:  Restaurant              
											 </p>
										</li>
										<li class="list-group-item px-0 py-2">
											 <div class="image">
												<img src="https://www.premiumpress.com/_demoimages/softwaretheme/8.jpg" alt="" data-src="https://www.premiumpress.com/_demoimages/softwaretheme/8.jpg" class="wlt_image img-fluid">               </div>
											 <div class="details mt-1">
												<a href="" class="font-weight-bold">Early Detection Center</a>
											 </div>
											 <p class="mb-0 mt-1 small">
													Category:  Taxi               
											 </p>
										</li>
										<li class="list-group-item px-0 py-2">
											 <div class="image">
												<img src="https://www.premiumpress.com/_demoimages/softwaretheme/14.jpg" alt="" data-src="https://www.premiumpress.com/_demoimages/softwaretheme/14.jpg" class="wlt_image img-fluid">               </div>
											 <div class="details mt-1">
												<a href="" class="font-weight-bold">Sample Download</a>
											 </div>
											 <p class="mb-0 mt-1 small">
													Category:  Beach               
											 </p>
										</li>
										
												
											
												   </ul>
									</div>
								 </div>
							<!-- end of most search -->
						</div>



</div>


<!-- end of right sidebar -->


</div>
<!-- end of right sidebar -->
</div> <!--end of top row-->
</div> <!--end of main container-->
<?php get_footer();?>






