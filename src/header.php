<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"?>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
	<meta name="author" content="">

	<title><?php wp_title();?></title>
	<link href="https://fonts.googleapis.com/css?family=Lato|Lora|Suez+One" rel="stylesheet">
	<link href="<?php echo esc_url( get_template_directory_uri() );?>/bootstrap.css" rel="stylesheet">
	<link href="<?php echo esc_url( get_template_directory_uri() );?>/blog.css" rel="stylesheet">
	<script src="https://use.fontawesome.com/8f4ddbac7d.js"></script>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="<?php echo esc_url( get_template_directory_uri() );?>/html5shiv.min.js"></script>
      <script src="<?php echo esc_url( get_template_directory_uri() );?>/respond.min.js"></script>
    <![endif]-->
	<?php wp_head();?>
</head>
<style type="text/css">
.blog-header {
    background-image: url(<?php echo get_option('background'); ?>);
		background-size: cover;
		background-position: center;
		background-color: <?php echo get_option('backgroundColor'); ?>;
}
.blog-title a{
    color: <?php echo get_option('titleColor'); ?>;
}
.blog-description {
    color: <?php echo get_option('desColor'); ?>;
}
</style>

<body>
		<div class="container-fluid">
			<div class="blog-masthead">
				<div class="container">
					<nav class="blog-nav">
						<a class="blog-nav-item" href="<?php echo esc_url( site_url() );?>"><img src="http://meetmattsweet.com/sandbox/acams/img/avatar.jpg" class="img-nav img-circle"></a>
						<?php wp_list_pages( '&title_li=' ); ?>
					</nav>
				</div>
			</div>
			<div class="blog-header">
				<h1 class="blog-title"><a href="<?php echo esc_url( site_url() );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
				<p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
			</div>
		</div>
		<div class="container">
