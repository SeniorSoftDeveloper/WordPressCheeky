<!-- <!DOCTYPE html> -->
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
	<link rel="stylesheet" type="text/css" href="../greeting-assets/css/style.css">

	<script src="https://js.stripe.com/v3/"></script>
  
  
</head>
<body>
	<div class="long-onboarding">
		<div class="container hidden m:flex">	
				<div class="blinkist-logo">
					<img class="blinkist-logo-img" src="../greeting-assets/images/logo.png">
				</div>
		</div>
		<div class="onboarding-screen">
			    <div class="pay-wrapper">
		          <h1> <span>Finish setting up your account</span><svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		              <g>
		                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.0125 12.2632H4.9875V21.5263H19.0125V12.2632ZM3.5 10.7895V23H20.5V10.7895H3.5Z" fill="#03314B">
		              </g>
		              <path fill-rule="evenodd" clip-rule="evenodd" d="M17.4188 10.7895V7.84211C17.4188 4.87721 14.9927 2.47368 12 2.47368C9.00731 2.47368 6.58125 4.87721 6.58125 7.84211V10.7895H17.4188ZM12 1C8.18578 1 5.09375 4.06331 5.09375 7.84211V12.2632H18.9062V7.84211C18.9062 4.06332 15.8142 1 12 1Z" fill="#03314B">
		            </svg>
		          </h1>
		          <div class="pay-text">Pay as little as £150 if you’re ready <span>to get the ball rolling and start a 7-day trial. </span>This amount will be automatically returned to your account within 24 hours.</div>
		          <div class="pay-text__more"><span>Show more</span><svg width="7" height="11" viewbox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
		              <path d="M1 10L5.5 5.5L1 1" stroke="#1973B8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
		            </svg>
		          </div>
		          <div class="pay-text__hide"><span>Show less</span><svg width="12" height="7" viewbox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
		              <path d="M10.5 6L6 1.5L1.5 6" stroke="#1973B8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
		            </svg>
		          </div>
		          <div class="pay__input"> <i>Special price</i>
		            <input type="tel" value="1.00" name="price"><span>USD</span>
		          </div>
		          <div id="payment-request-button" class="e-wallet-button" style="margin-top: 20px;display:none">
		            <!-- A Stripe Element will be inserted here. -->
		          </div>
		          <!-- <script src="https://js.stripe.com/v3/"></script>
		          <script src="static/js/stripeclient.js"></script> -->
		          <div class="pay-info"><span>Set up your card:</span><img src="../greeting-assets/images/cards.svg" alt=""></div>
		          <div class="card">
		            <form id="payment-form">
		              <div class="card-wrapper">
										<div id="payment-element">
							        <!--Stripe.js injects the Payment Element-->
							      </div>

					        <!-- We'll put the error messages in this element -->
					        	<div id="card-errors" role="alert"></div>
		              </div>
		              <button id="submit"> <strong class="button-text">Pay&nbsp;<span>£150</span>&nbsp;</strong>
		                <strong class="loading">Loading...</strong></button>
		            </form>
		            <div id="messages" role="alert" style="display: none;"></div>
		          </div>
		        </div>
		        <div class="pay-bottom"><svg width="14" height="16" viewbox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
		            <path d="M6.77482 10.1823C6.67925 10.2722 6.5535 10.323 6.42232 10.3248C6.29345 10.3226 6.17018 10.2717 6.07732 10.1823L3.51232 7.63982C3.42026 7.54709 3.3686 7.42173 3.3686 7.29107C3.3686 7.1604 3.42026 7.03504 3.51232 6.94232L3.99982 6.43982C4.04523 6.39333 4.09947 6.35638 4.15936 6.33116C4.21926 6.30594 4.28359 6.29295 4.34857 6.29295C4.41356 6.29295 4.47789 6.30594 4.53778 6.33116C4.59767 6.35638 4.65191 6.39333 4.69732 6.43982L6.39982 8.12732L9.69232 4.87231C9.73686 4.82602 9.79052 4.78945 9.8499 4.76493C9.90928 4.7404 9.97309 4.72845 10.0373 4.72981C10.1027 4.72831 10.1677 4.74017 10.2283 4.76467C10.2889 4.78918 10.3439 4.82581 10.3898 4.87231L10.8998 5.37481C10.9896 5.46721 11.0399 5.59097 11.0399 5.71981C11.0399 5.84866 10.9896 5.97242 10.8998 6.06482L6.77482 10.1823L12.3398 11.7498C14.4098 8.79482 13.5998 2.85482 13.5698 2.59982C13.5548 2.50497 13.5129 2.41641 13.4491 2.34463C13.3853 2.27286 13.3023 2.22086 13.2098 2.19482L7.13482 0.124815C7.04623 0.102275 6.95341 0.102275 6.86482 0.124815L0.789822 2.19482C0.697388 2.22086 0.614355 2.27286 0.550554 2.34463C0.486752 2.41641 0.444855 2.50497 0.429822 2.59982C0.429822 2.85482 -0.410178 8.79482 1.65982 11.7498C2.92878 13.5641 4.78204 14.8879 6.90982 15.4998H6.99982H7.11232C9.2401 14.8879 11.0934 13.5641 12.3623 11.7498L6.77482 10.1823Z" fill="#BAC8CE">
		          </svg><span>Strong customer authentication</span>
		        </div>
		</div>
	</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"/>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>	
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>
		<script src="../greeting-assets/js/main.js"></script>
		<script src="../greeting-assets/js/checkout.js"></script>
</body>
</html>