<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        
       
        <?php wp_head();?>
    </head>

<body>

<header class="bg-primary text-white">
  
        <div class="container  py-4">
            <div class="row">
                <div class="col-12 col-lg-7">
                    <div class="logo text-left pl-0">
                        <a title="comparetheme" href="">
                            <img class="img-fluid" alt="logo" src="http://so9.wlthemes.com/wp-content/themes/SO9/_software/template/images/logo.png">
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <form id="mainsearchform" action="http://www.google.com/" method="get">
                        <input name="catid" id="searchform1_catid" type="hidden" value="">
                        <div class="form-group mb-1">
                            <div class="input-group">
                                <div class="input-group-addon dropdown hidden-md-down"></div>
                                <input name="s" class="form-control typeahead" type="text" placeholder="Search keyword..." value="">
                                <ul class="typeahead dropdown-menu"></ul>
                                <button><i class="fa fa-search text-secondary"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

     
    <div class="container-full bg-extra bg-secondary">
        <nav class="navbar navbar-expand-lg navbar-dark black">
            <div class="container">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                
                <?php 


wp_nav_menu(
	array(
	'theme_location' =>'left-sidebar-menu',
	'menu' => 'main-menu',
	'container' => 'ul',
	'menu_class' => 'navbar-nav mr-auto',


	)

)

 ?>

                </div>
            </div>
        </nav>
    </div>
</header>