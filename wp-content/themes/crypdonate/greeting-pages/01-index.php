
<?php /* Template Name: Cheeky Start  */ ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cheek Monkey Marketing</title>
	
	 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1">
	  <meta name="apple-mobile-web-app-capable" content="yes">
	  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	  <meta name="globalsign-domain-verification" content="ROZmPQde14dV2YQ-kOw48SFB-gmyhJvahZFX_YizPy">
	  <meta property="fb:app_id" content="499403336738590">
	  <meta name="p:domain_verify" content="cf5f7177e41e03ac06a6f5551d5b7364">

	<link rel="icon" size="32x32" href="./images/favicon.ico">
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().'/css/style.css' ?>"> -->
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/greeting-assets/css/style.css">
</head>

<body>
	<div class="start">
		<div class="container">
			<div class="start-wrapper">
				<div class="blinkist-logo-start">
					<img class="blinkist-logo-img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/greeting-assets/images/logo.png">
				</div>
			
				<div class="start-content">
					<p class="start-text">We will attract clients to your business</p>
					<h1 class="start-title "><strong>Do you want to increase your business’ sales?</strong></h1>
					<div class="arrow-wrap">
						<p class="arrow-wrap__text">I want to</p>
						<div class="arrow">
				            <span>
				              <svg width="25" height="15" viewbox="0 0 25 15" fill="none" xmlns="http://www.w3.org/2000/svg">
				                <path d="M2 2L11.7474 13.1399C12.1458 13.5952 12.8542 13.5952 13.2526 13.1399L23 2" stroke="#002E48" stroke-opacity="0.8" stroke-width="3" stroke-linecap="round">
				              </svg>
				                
				            </span>
				        </div>
					</div>
				</div>
				<div class="start-action">
	        
			        <a onclick="saveStart('<?php echo esc_url( get_template_directory_uri() ); ?>/greeting-pages/02_specialty.html', 'sales')" class="cta cta-send w-full max-w-sm" data-test-id="continue/start" data-content="sales">
			          <span>Increase&nbsp;business<br>sales</span>
			        </a>
			        <a onclick="saveStart('<?php echo esc_url( get_template_directory_uri() ); ?>/greeting-pages/02_specialty.html', 'profits')" class="cta cta-send w-full max-w-sm" data-test-id="continue/start" data-content="profits">
			          <span>Boost&nbsp;business<br>profits</span> 
			        </a>

			    </div>
			</div>
		</div>
	</div>
	<!-- <script type="text/javascript">
		function page2(){

			   $.ajax({
					type:"POST",
					url: "<?php echo esc_url( get_template_directory_uri() ); ?>/greeting-pages/00_pages.php",
					data: {page:"index"},
					success: function(data){
						// alert(data);	
					}
				})
		}
	</script> -->
	

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"/>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>	
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/greeting-assets/js/main.js"></script>
</body>
</html>