<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Blog Template for Bootstrap</title>
    <!--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"> -->
	<link href="<?php bloginfo( 'template_directory' );?>/style.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head();?>
</head>

<body>
    <div class="wrapper">
        <header>
            <div class="logo">
                <div class="blog-header">
                    <h1 class="blog-title"><a href="<?php bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
                    <!-- <p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p> -->
                </div>
             </div>
            <nav class="global-nav">
                <a class="global-nav-item" href="/artwork/">artwork</a>
                <a class="global-nav-item" href="/photography/">photography</a>
                <a class="global-nav-item" href="/blog/">blog</a>
                <a class="global-nav-item" href="/shop/">shop</a>
                <a class="global-nav-item" href="/contact/">about/contact</a>
            </nav>
        </header>