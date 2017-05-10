<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="p:domain_verify" content="3daa014402324bc483ebc76dafa704f1"/>

	<title>Blog Template for Bootstrap</title>
    <!--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"> -->
	<link href="<?php bloginfo( 'template_directory' );?>/style.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head();?>
	<script>
        function isChecked() {
        var header = document.getElementsByTagName('header')[0];
        var logo = document.getElementsByClassName('logo-image')[0];
        var logoWhite = document.getElementsByClassName('logo-image-white')[0];
        var hamburger =  document.getElementsByClassName('burger')[0];
            if (document.getElementById('burger-check').checked) {
                header.style.backgroundColor = 'rgb(170, 170, 177)';
                logo.style.display ='none';
                logoWhite.style.display ='inline-block';
                hamburger.style.color = 'rgb(241,241,247)';
                hamburger.className='burger fa fa-icon-thin fa-2x';
            } else {
                header.style.backgroundColor = 'rgba(241,241,247, .9)';
                logo.style.display ='inline-block';
                logoWhite.style.display ='none';
                hamburger.style.color = 'rgb(170, 170, 177)';
                hamburger.className = 'burger fa fa-bars fa-3x';
            }
        }

    </script>
</head>

<body>
    <div class="wrapper">
        <header>
        <?php $upload_dir = wp_upload_dir(); ?>
            <div class="logo">
                <a href="<?php bloginfo( 'wpurl' );?>">
                    <img class="logo-image" src="/wp-content/themes/customtheme/assets/images/signature.png"  alt="logo" />
                    <img class="logo-image-white" src="/wp-content/themes/customtheme/assets/images/signature-white.png"  alt="logo" />
                </a>
             </div>
            <nav class="global-nav">
                <a class="global-nav-item" href="/">artwork</a>
<!--                <a class="global-nav-item" href="/photography/">photography</a> -->
                <a class="global-nav-item" href="https://amyconeyart.wordpress.com/">blog</a>
                <a class="global-nav-item" href="/shop/">shop</a>
                <a class="global-nav-item" href="/contact/">about/contact</a>
            </nav>
            <input class="burger-check" id="burger-check" onclick='isChecked();' type="checkbox"><label for="burger-check" class="burger fa fa-bars fa-3x" aria-hidden="true"></label>
            <nav class="mobile-nav">
                <a class="mobile-nav-item" href="/">artwork</a>
<!--               <a class="mobile-nav-item" href="/photography/">photography</a> -->
                <a class="mobile-nav-item" href="https://amyconeyart.wordpress.com/">blog</a>
                <a class="mobile-nav-item" href="/shop/">shop</a>
                <a class="mobile-nav-item" href="/contact/">about/contact</a>
                <div class="links">
                    <a href="https://www.facebook.com/amyconeyart/">
                        <i class="fa fa-2x fa-facebook" aria-hidden="true"></i>
                     </a>
                    <a href="https://www.instagram.com/amyconeyart/">
                        <i class="fa fa-2x fa-instagram" aria-hidden="true"></i>
                    </a>
                    <a href="https://twitter.com/amyconey/">
                        <i class="fa fa-2x fa-twitter" aria-hidden="true"></i>
                    </a>
                </div>
            </nav>
        </header>