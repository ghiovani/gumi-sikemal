<!DOCTYPE html>

<html>

	<head>
		
		<!-- Meta Tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Title -->
		<title><?php echo $candidate['page-title']; ?></title>
		
		<!-- Google Fonts -->
		<link href='<?php echo base_url()."assets/"?>css/download1.css' rel='stylesheet' type='text/css'>
		<link href='<?php echo base_url()."assets/"?>css/download2.css' rel='stylesheet' type='text/css'>
		
		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url()."assets/"?>img/favicon.png">
		
		<!-- Stylesheets -->
		<link href="<?php echo base_url()."assets/"?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url()."assets/"?>css/fontello.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url()."assets/"?>css/flexslider.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url()."assets/"?>js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="<?php echo base_url()."assets/"?>css/owl.carousel.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url()."assets/"?>css/responsive-calendar.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url()."assets/"?>css/chosen.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url()."assets/"?>jackbox/css/jackbox.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url()."assets/"?>css/cloud-zoom.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url()."assets/"?>css/colorpicker.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url()."assets/"?>css/style.css" rel="stylesheet" type="text/css">

		
		<!--[if IE 9]>
			<link rel="stylesheet" href="css/ie9.css">
		<![endif]-->
		
		<!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<link href="css/jackbox-ie8.css" rel="stylesheet" type="text/css" />
			<link rel="stylesheet" href="css/ie.css">
        <![endif]-->
		
		<!--[if gt IE 8]>
			<link href="css/jackbox-ie9.css" rel="stylesheet" type="text/css" />
		<![endif]-->
		
		<!--[if IE 7]>
			<link rel="stylesheet" href="css/fontello-ie7.css">
		<![endif]-->
		
		<style type="text/css">
			.no-fouc {display:none;}
	  	</style>
		
		<!-- jQuery -->
		<script src="<?php echo base_url()."assets/"?>js/jquery-1.11.0.min.js"></script>
		<script src="<?php echo base_url()."assets/"?>js/jquery-ui-1.10.4.min.js"></script>
		
		<!-- Preloader -->
		<script src="<?php echo base_url()."assets/"?>js/jquery.queryloader2.min.js"></script>
		
		<script type="text/javascript">
		$('html').addClass('no-fouc');
		
		$(document).ready(function(){
			
			$('html').show();
			
			var window_w = $(window).width();
			var window_h = $(window).height();
			var window_s = $(window).scrollTop();
			
			$("body").queryLoader2({
				backgroundColor: '#f2f4f9',
				barColor: '#63b2f5',
				barHeight: 4,
				percentage:false,
				deepSearch:true,
				minimumTime:1000,
				onComplete: function(){
					
					$('.animate-onscroll').filter(function(index){
					
						return this.offsetTop < (window_s + window_h);
						
					}).each(function(index, value){
						
						var el = $(this);
						var el_y = $(this).offset().top;
						
						if((window_s) > el_y){
							$(el).addClass('animated fadeInDown').removeClass('animate-onscroll');
							setTimeout(function(){
								$(el).css('opacity','1').removeClass('animated fadeInDown');
							},2000);
						}
						
					});
					
				}
			});
			
		});
		</script>
		
	</head>
	
	<body class="sticky-header-on tablet-sticky-header <?php if(isset($candidate['page-layout'])) { if($candidate['page-layout'] == 'boxed') echo 'boxed-layout'; }?>">
	
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <link rel="stylesheet" href="<?php echo base_url()."assets/"?>css/style.css">
     <link rel="stylesheet" href="<?php echo base_url()."assets/"?>css/slider.css">
	 <link rel="stylesheet" href="<?php echo base_url()."assets/"?>css/zerogrid.css" type="text/css" media="screen">
	<link rel="stylesheet" href="<?php echo base_url()."assets/"?>css/responsive.css" type="text/css" media="screen"> 
     <script src="<?php echo base_url()."assets/"?>js/jquery.js"></script>
     <script src="<?php echo base_url()."assets/"?>js/jquery-migrate-1.1.1.js"></script>
     <script src="<?php echo base_url()."assets/"?>js/superfish.js"></script>
     <script src="<?php echo base_url()."assets/"?>js/jquery.easing.1.3.js"></script>
     <script src="<?php echo base_url()."assets/"?>js/sForm.js"></script>
     <script src="<?php echo base_url()."assets/"?>js/jquery.carouFredSel-6.1.0-packed.js"></script>
     <script src="<?php echo base_url()."assets/"?>js/tms-0.4.1.js"></script>
	 <script src="<?php echo base_url()."assets/"?>js/css3-mediaqueries.js"></script>
     <script>
      $(window).load(function(){
      $('.slider')._TMS({
              show:0,
              pauseOnHover:false,
              prevBu:'.prev',
              nextBu:'.next',
              playBu:false,
              duration:800,
              preset:'fade', 
              pagination:true,//'.pagination',true,'<ul></ul>'
              pagNums:false,
              slideshow:8000,
              numStatus:false,
              banners:false,
          waitBannerAnimation:false,
        progressBar:false
      })  
      });
      
     $(window).load (
    function(){$('.carousel1').carouFredSel({auto: false,prev: '.prev',next: '.next', width: 960, items: {
      visible : {min: 1,
       max: 4
},
height: 'auto',
 width: 240,

    }, responsive: false, 
    
    scroll: 1, 
    
    mousewheel: false,
    
    swipe: {onMouse: false, onTouch: false}});
    
    
    });      

     </script>