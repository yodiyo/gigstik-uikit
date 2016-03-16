<?php session_start() ?>

<!DOCTYPE html>
<html lang="en-gb" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gigstik</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon.png">
    <link rel="stylesheet" href="css/uikit.dark.min.css">
    <script src="../vendor/jquery.js"></script>
    <script src="js/uikit.min.js"></script>
    <script src="js/components/sticky.min.js"></script>
    <script type="text/javascript">
    $(function(){
        window.randomize = function() {
            var end = $('.radial-progress').attr('data-end');
            $('.radial-progress').attr( 'data-progress', end);
        }
        console.log(window.randomize);
        setTimeout(window.randomize, 200);
        $('.radial-progress').click(window.randomize);
    });
    </script>
</head>

<body>
    <div class="gs-container">
        <!-- navigation - sticky && scrollspy -->
        <nav class="uk-navbar" data-uk-sticky="{
				boundary:'#add-a-delay', 
				clsactive: 'uk-navbar-attached', 
				top:-100px, 
				animation: 'uk-animation-slide-top', 
				getWidthFrom: '.gs-container'}
			">
            <a class="uk-navbar-brand uk-hidden-small" href="#">Gigstik</a>
            <ul class="links-apps">
                <li class="links-apps-apple"><a href="">Apple App Store</a></li>
                <li class="links-apps-google"><a href="">Google Play Store</a></li>
            </ul>
            <ul class="uk-navbar-nav uk-navbar-flip uk-hidden-small" data-uk-scrollspy-nav="{closest: 'li', smoothscroll: {offset: 83.5}}">
                <li class="uk-active"><a href="#">Home</a></li>
                <li><a href="#benefits">Benefits</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="#facts">Facts</a></li>
                <li><a href="#contactus">Contact us</a></li>
            </ul>
            <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
            <div class="uk-navbar-brand uk-navbar-center uk-visible-small">GigStik</div>
        </nav>
        <section id="mast-head">
            <div class="uk-cover-background">
                <img src="images/banner.jpg" alt="GigStik">
            </div>
        </section>
        <section id="benefits" class="gs-section">
        <a class="back-to-top" href="#" data-uk-smooth-scroll>Back to top</a>
            <header>
                <div class="bg-overlay"></div>
                <h2>Benefits</h2>
            </header>
            <!--     <figure class="uk-overlay uk-overlay-hover">
				<img src="images/header-image.jpg" alt="Concert crowd">
				<figcaption class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-bottom">
					<div>
						<h1>Benefits</h1>
					</div>
				</figcaption>
			</figure> -->
            <div class="benefits uk-grid">
                <div class="benefit uk-width-large-1-2">
                    <div class="uk-grid">
                        <div class="uk-width-large-1-2">
                            <figure class="uk-overlay uk-overlay-hover">
                                <img src="images/benefits-artist-thumb.jpg" alt="artist">
                                <figcaption class="uk-overlay-panel uk-overlay-icon uk-overlay-background"></figcaption>
                            </figure>
                        </div>
                        <div class="content uk-width-large-1-2">
                            <h3>I'm an ARTIST</h3>
                            <ul>
                                <li>Generate commission free revenue</li>
                                <li>Generate commission free revenue</li>
                                <li>Generate commission free revenue</li>
                            </ul>
                        </div>
                        <div class="uk-width-large-1-2">
                            <figure class="uk-overlay uk-overlay-hover">
                                <img src="images/benefits-venue-thumb.jpg" alt="artist">
                                <figcaption class="uk-overlay-panel uk-overlay-icon uk-overlay-background"></figcaption>
                            </figure>
                        </div>
                        <div class="content uk-width-large-1-2">
                            <h3>I'm a VENUE</h3>
                            <ul>
                                <li>Generate commission free revenue</li>
                                <li>Generate commission free revenue</li>
                                <li>Generate commission free revenue</li>
                            </ul>
                        </div>
                        <div class="uk-width-large-1-2">
                            <figure class="uk-overlay uk-overlay-hover">
                                <img src="images/benefits-lover-thumb.jpg" alt="artist">
                                <figcaption class="uk-overlay-panel uk-overlay-icon uk-overlay-background"></figcaption>
                            </figure>
                        </div>
                        <div class="content uk-width-large-1-2">
                            <h3>I'm a MUSIC LOVER</h3>
                            <ul>
                                <li>Generate commission free revenue</li>
                                <li>Generate commission free revenue</li>
                                <li>Generate commission free revenue</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="uk-width-large-1-2 uk-float-right">
                    <img src="images/benefits-phone.png" alt="Phone animation" class="uk-float-right"/>
                </div>
            </div>
            
        </section>
        <section id="features" class="gs-section">
            <header>
                <div class="bg-overlay"></div>
                <h2>Features</h2>
            </header>
            <div class="uk-grid uk-container-center">
                <div class="uk-width-large-1-3">
                    <div class="uk-panel uk-panel-box uk-text-center uk-panel-space">
                     	<div class='gs-icon-headphones'></div>
                        <h3>Live chat</h3>
                        <p>Get an inside look at what your favourite band gets up to on gig days with our inbuilt live chat.</p>
                    </div>
                </div>
                <div class="uk-width-large-1-3">
                    <div class="uk-panel uk-panel-box uk-text-center uk-panel-space">
                     	<div class='gs-icon-headphones'></div>
                        <h3>Live chat</h3>
                        <p>Get an inside look at what your favourite band gets up to on gig days with our inbuilt live chat.</p>
                    </div>
                </div>
                <div class="uk-width-large-1-3">
                    <div class="uk-panel uk-panel-box uk-text-center uk-panel-space">
                     	<div class='gs-icon-headphones'></div>
                        <h3>Live chat</h3>
                        <p>Get an inside look at what your favourite band gets up to on gig days with our inbuilt live chat.</p>
                    </div>
                </div>
            </div>
            <div class="uk-grid uk-container-center uk-text-center">
                <div class="uk-width-large-1-3 uk-push-1-6">
                    <div class="uk-panel uk-panel-box uk-text-center uk-panel-space">
                     	<div class='gs-icon-headphones'></div>
                        <h3>Live chat</h3>
                        <p>Get an inside look at what your favourite band gets up to on gig days with our inbuilt live chat.</p>
                    </div>
                </div>
                <div class="uk-width-large-1-3 uk-push-1-6">
                    <div class="uk-panel uk-panel-box uk-text-center uk-panel-space">
                     	<div class='gs-icon-headphones'></div>
                        <h3>Live chat</h3>
                        <p>Get an inside look at what your favourite band gets up to on gig days with our inbuilt live chat.</p>
                    </div>
                </div>
            </div>
            <a class="back-to-top" href="#" data-uk-smooth-scroll>Back to top</a>
        </section>
        <section id="facts" class="gs-section">
            <header>
                <div class="bg-overlay"></div>
                <h2>Facts</h2>
            </header>
            <div class="uk-grid uk-container-center">
                <div class="uk-width-large-1-3">
                    <div class="progress-radial uk-border-circle">
  					<h4>97,000,000</h4>
  						<p>The estimated number of songs in the world.</p>	
					</div>

                </div>
                <div class="uk-width-large-1-3">
                    <div class="progress-radial uk-border-circle">
  					<h4>97,000,000</h4>
  						<p>The estimated number of songs in the world.</p>	
					</div>

                </div>
                <div class="uk-width-large-1-3">
                  	<div class="progress-radial uk-border-circle">
  					<h4>97,000,000</h4>
  						<p>The estimated number of songs in the world.</p>	
					</div>
                </div>
            </div>
            <a class="back-to-top" href="#" data-uk-smooth-scroll>Back to top</a>
        </section>
        <section id="facts" class="gs-section">
            <header>
                <div class="bg-overlay"></div>
                <h2>Facts</h2>
            </header>
            <div class="uk-grid uk-container-center">
                <div class="uk-width-large-1-3">
                    <div class="radial-progress" data-progress="0" data-end="40">
                        <div class="circle">
                            <div class="mask full">
                                <div class="fill"></div>
                            </div>
                            <div class="mask half">
                                <div class="fill"></div>
                                <div class="fill fix"></div>
                            </div>
                        </div>
                        <div class="inset">
                            <h4>97,000,000</h4>
                            <p>The estimated number of songs in the world.</p>  
                        </div>

                    </div>
                   

                </div>
                <div class="uk-width-large-1-3">
                    <div class="progress-radial uk-border-circle">
                    <h4>97,000,000</h4>
                        <p>The estimated number of songs in the world.</p>  
                    </div>

                </div>
                <div class="uk-width-large-1-3">
                    <div class="progress-radial uk-border-circle">
                    <h4>97,000,000</h4>
                        <p>The estimated number of songs in the world.</p>  
                    </div>
                </div>
            </div>
            <a class="back-to-top" href="#" data-uk-smooth-scroll>Back to top</a>
        </section>
        <section id="contactus" class="gs-section">
            <header>
                <div class="bg-overlay"></div>
                <h2>Contact us</h2>
            </header>
			<div class='uk-grid'>
          		<p class="intro uk-width-large-1-1">We'd love to hear from you</p>
	            
	            <form class="uk-width-large-3-4 uk-form uk-contrast" method="post" action="post.php">

                    <?php
                        //init variables
                        $cf = array();
                        $sr = false;
                         
                        if(isset($_SESSION['cf_returndata'])){
                            $cf = $_SESSION['cf_returndata'];
                            $sr = true;
                        }
                    ?>

	                <ul id="errors" class="<?php echo ($sr && !$cf['form_ok']) ? 'visible' : ''; ?>">
                        <li id="info">There were some problems with the form: </li>
                        <?php 
                        if(isset($cf['errors']) && count($cf['errors']) > 0) :
                            foreach($cf['errors'] as $error) :
                        ?>
                        <li><?php echo $error ?></li>
                        <?php
                            endforeach;
                        endif;
                        ?>
                    </ul>

                    <p id="success" class="<?php echo ($sr && $cf['form_ok']) ? 'visible' : ''; ?>">Thank you for contacting us! We'll get back to you very soon!<</p>
  
		            <div class="uk-grid uk-form-row">
		                <div class="uk-form uk-width-large-1-2">
		                    <div class="uk-form-controls uk-form ">
		                        <input id="name" type="text" placeholder="NAME" class="uk-width-1-1" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['name'] : '' ?>" required>
		                    </div>
		                </div>
		                <div class="uk-form uk-width-large-1-2">
		                    <div class="uk-form-controls uk-form">
		                        <input id="email" type="email" placeholder="EMAIL ADDRESS" class="uk-width-1-1" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['email'] : '' ?>"required>
		                    </div>
		                </div>
		            </div>
	                <div class="uk-form-controls uk-form uk-form-row">
	                	<textarea id="message" placeholder="MESSAGE" class="uk-width-1-1" id="form-h-t" cols="100" rows="9"><?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['message'] : '' ?></textarea>
	                </div>
	                <div class="uk-grid uk-form-row uk-width-large-3-4">
	                    <div class="uk-form-controls">
	                        <button type="submit" class="uk-button btn-send" >SEND</button>
                       </div>
	                </div>
	            </form>
                
                <!-- unset session -->
                <!-- <?php unset($_SESSION['cf_returndata']); ?> -->

	      	</div>
            <a class="back-to-top" href="#" data-uk-smooth-scroll>Back to top</a>
        </section>
		
		<footer>
		 	<div class="uk-grid ">
                <div class="uk-width-large-1-4">
                    <ul class="uk-nav uk-nav-side" data-uk-scrollspy-nav="{closest: 'li', smoothscroll: {offset: 83.5}}>
	                    <li class="uk-active"><a href="#">Home</a></li>
		                <li><a href="#benefits">Benefits</a></li>
		                <li><a href="#features">Features</a></li>
		                <li><a href="#facts">Facts</a></li>
		                <li><a href="#contactus">Contact us</a></li>
	                </ul>
                </div>
                <div class="uk-width-large-1-4">
                     <ul class="uk-list links-apps">
                        <li class="links-apps-apple"><a href="">Apple App Store</a></li>
                        <li class="links-apps-google"><a href="">Google Play Store</a></li>
                    </ul>
                </div>
                <div class="uk-width-large-1-4">
                    <ul class="uk-list links-partners">
                        <h6>Our partners</h6>
                        <li class="partner-lateral"><a href="">Lateral</a></li>
                        <li class="links-alyka"><a href="">Alyka</a></li>
                    </ul>
                </div>
	           	<div class="uk-width-large-1-4">
                    <ul class="uk-list links-social">
                        <li class="links-fb"><a href="">Facebook</a></li>
                        <li class="links-twitter"><a href="">Twitter</a></li>
                        <li class="links-instagram"><a href="">Instagram</a></li>
                    </ul>
                </div>
            </div>
 	        <div class='tos-links'><a href=''>Privacy</a> <a href=''>Terms of Service</a></div>
		</footer>


        <div id="offcanvas" class="uk-offcanvas">
            <div class="uk-offcanvas-bar">
                <ul class="uk-nav uk-nav-offcanvas" data-uk-scrollspy-nav="{closest: 'li', smoothscroll: {offset: 83.5}}>
                    <li class="uk-active"><a href="#">Home</a></li>
                    <li><a href="#benefits">Benefits</a></li>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#facts">Facts</a></li>
                    <li><a href="#contactus">Contact us</a></li>
                </ul>
            </div>
        </div>
</body>

</html>
