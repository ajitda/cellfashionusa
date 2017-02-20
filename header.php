<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

        <?php wp_head(); ?>
    </head>
<body <?php body_class(); ?>
<div class="header">
	<div class="header-top-area ">
		<div class="container">
			<div class="row bg-color">
				<div class="col-md-6">
					<div class="top-left-bar">
						<b>Hello,</b> Welcome to www.cellfashionusa.com <span>|</span>
						<a href="#"> Sign in </a><span> or </span>
						<a href="#"> Register </a>
					</div>
				</div>
					
				<div class="col-md-6 text-right">
					<div class="top-right-bar">
						<i class="fa fa-shopping-cart"></i> <a href="Cart"> Shopping Cart(0) </a> <span> | </span> 
						<i class="fa fa-shopping-basket"></i> <a href="Order"> My Orders </a> <span> | </span>
						<i class="fa fa-envelope-o"></i> <a href="Inquiry"> Inquiry </a> <span> | </span>
						<i class="fa fa-phone"></i> 1-866-888-6890
					</div>					
				</div>
			</div>
		</div>
	</div>
	<div class="header-area">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="logo-area">
						<div class="logo">
							<a href="index.html">
								<img src="<?php echo get_template_directory_uri(); ?>/img/Cell-Fashion.png" alt="" />
							</a>
						</div>						
					</div>
				</div>
				<div class="col-md-6 text-center">
					<div class="header-search-area">
						<form action="" class="search-form">
							<input class="search-box" type="text" placeholder="Keyword..." />
							<input class="search-btn" type="submit" value="Search" />
						</form>						
					</div>
					<div class="quick-search">						
						<p>Quick Search: 
						<a href="/Search?ss_key=iPhone6N-RS"> IP6 Rocker </a> 
						<a href="/Search?ss_key=iP6PLUS-RSlim"> IP6+ Rocker Slim </a> 
						<a href="/Search?ss_key=SAMGS7edge-RSlim"> GS7 Rocker Slim </a> 
						<a href="/Search?ss_key=SAMNOTE5-RSlim"> Note5 Rocker Slim </a>
						</p>
					</div>
				</div>
				<div class="col-md-3 text-right">
					<div class="header-contact">
						<a href="contact-us.html">
							<img src="<?php echo get_template_directory_uri(); ?>/img/topright.jpg" alt="" />
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="header-menu-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'nav')); ?>
				</div>
			</div>
		</div>
	</div>
</div>