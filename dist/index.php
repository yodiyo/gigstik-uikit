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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="js/uikit.min.js"></script>
    <script src="js/components/sticky.min.js"></script>
    
</head>

<body>
    <div class="gs-container">
        <!-- navigation - sticky && scrollspy -->
        <nav class="yb-navbar" data-yb-sticky="{
				boundary:'#add-a-delay', 
				clsactive: 'yb-navbar-attached', 
				top:-100px, 
				animation: 'yb-animation-slide-top', 
				getWidthFrom: '.gs-container'}
			">
            <a class="yb-navbar-brand" href="#">Gigstik</a>
            <ul class="links-apps yb-hidden-small yb-hidden-medium">
                <li class="links-apps-apple"><a href="//itunes.apple.com/uk/appstore"><img src="images/logo_app_store.png" alt="Apple App Store" target="_blank"/></a></li>
                <li class="links-apps-google"><a href="//play.google.com/store/apps"><img src="images/logo_google_play.png" alt="Google Play Store" target="_blank"/></a></li>
            </ul>
            <ul class="yb-navbar-nav yb-navbar-flip yb-hidden-small yb-hidden-medium" data-yb-scrollspy-nav="{closest: 'li', smoothscroll: {offset: 83.5}}">
                <li class="yb-active"><a href="#">Home</a></li>
                <li><a href="#benefits">Benefits</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="#facts">Facts</a></li>
                <li><a href="#contactus">Contact us</a></li>
            </ul>
            <a href="#offcanvas" class="yb-navbar-toggle yb-visible-medium yb-visible-small" data-yb-offcanvas></a>
            
        </nav>
        <section id="masthead">
            <div class="yb-grid yb-cover-background">
                <div class="yb-width-medium-1-2 yb-width-small-1-1">
                    <h1>Live Music App</h1>
                    <p>A whole new way to enjoy live entertainment.</p>
                    <p>Experience an intimate connection with your favourite artists and fellow fans.</p>
                    <p>Get access to back catalogues, live chat, exclusive VIP content and prizes - and much more.</p>
                    <p><strong>Live access will never be the same.</strong></p>
                    <ul class="links-apps">
                        <li class="links-apps-apple"><a href="//itunes.apple.com/uk/appstore"><img src="images/logo_app_store.png" alt="Apple App Store" target="_blank"/></a></li>
                        <li class="links-apps-google"><a href="//play.google.com/store/apps"><img src="images/logo_google_play.png" alt="Google Play Store" target="_blank"/></a></li>
                    </ul>
                </div>
                <div class="yb-width-medium-1-2 yb-width-small-1-1">
                    <div class="vid-container">
                        <iframe width="394" height="224" src="http://www.youtube.com/embed/wfLZdlOMG4c?modestbranding=1&autohide=1&showinfo=0" frameborder="0" allowfullscreen"></iframe> 
                        <img src="images/phone_video.png" alt="Phone screen"/>
                    </div>
                </div>
            </div>
        </section>
        <section id="benefits" class="gs-section">
            <a class="back-to-top" href="#" data-yb-smooth-scroll><span>Back to top</span></a>
            <header class="yb-hidden-small yb-hidden-medium yb-hidden-large yb-visible-xlarge">
                <div class="bg-overlay"></div>
                <h2>Benefits</h2>
            </header>

            <div class="robin-hood yb-grid yb-hidden-small yb-visible-medium yb-visible-large yb-hidden-xlarge">
                <div class="yb-vertical-align yb-text-center yb-width-3-4">
                    <h3 class="yb-vertical-align-middle yb-container-center">I'm like the Robin Hood of PSD files</h3>
                </div>
                <div class="cta-block yb-width-1-4 yb-vertical-align">
                   <div class="yb-overlay-icon yb-vertical-align-middle"></div>
                </div>
            </div>
           
            <div class="benefits yb-grid">
                <div class="benefit yb-width-1-1">
                    <ul data-yb-switcher="{connect:'#phone-img', animation:'fade'}">
                       <li class="yb-grid yb-width-xlarge-1-1 yb-width-medium-1-3">
                            <div class="thumb yb-width-xlarge-1-2">
                                <figure class="yb-overlay yb-overlay-hover" >
                                    <img src="images/benefits_artist_thumb.jpg" alt="artist" >
                                    <figcaption class="yb-overlay-panel yb-overlay-icon yb-overlay-background"></figcaption>
                                </figure>
                            </div>
                            <div class="content yb-width-xlarge-1-2 yb-visible-xlarge yb-hidden-small yb-hidden-medium yb-hidden-large">
                                <h3>I'm an ARTIST</h3>
                                <ul>
                                    <li><span></span>Generate commission-free revenue</li>
                                    <li><span></span>Connect personally with your fans</li>
                                    <li><span></span>Create unique VIP experiences</li>
                                </ul>
                            </div>
                        </li>
                        <li class="yb-grid yb-width-xlarge-1-1 yb-width-medium-1-3">
                            <div class="thumb yb-width-xlarge-1-2 ">
                                <figure class="yb-overlay yb-overlay-hover" >
                                    <img src="images/benefits_venue_thumb.jpg" alt="venue">
                                    <figcaption class="yb-overlay-panel yb-overlay-icon yb-overlay-background"></figcaption>
                                </figure>
                            </div>
                            <div class="content yb-width-xlarge-1-2 yb-visible-xlarge yb-hidden-small yb-hidden-medium yb-hidden-large">
                                <h3>I'm a VENUE</h3>
                                <ul>
                                    <li><span></span>Generate commission-free revenue</li>
                                    <li><span></span>Connect personally with your fans</li>
                                    <li><span></span>Create unique VIP experiences</li>
                                </ul>
                            </div>
                        </li>
                        <li class="yb-grid yb-width-xlarge-1-1 yb-width-medium-1-3">
                            <div class="thumb yb-width-xlarge-1-2 ">
                                <figure class="yb-overlay yb-overlay-hover" >
                                    <img src="images/benefits_lover_thumb.jpg" alt="artist">
                                    <figcaption class="yb-overlay-panel yb-overlay-icon yb-overlay-background"></figcaption>
                                </figure>
                            </div>
                            <div class="content yb-width-xlarge-1-2 yb-visible-xlarge yb-hidden-small yb-hidden-medium yb-hidden-large">
                                <h3>I'm a MUSIC LOVER</h3>
                                <ul>
                                    <li><span></span>Generate commission-free revenue</li>
                                    <li><span></span>Connect personally with your fans</li>
                                    <li><span></span>Create unique VIP experiences</li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <div  class="phone-container yb-float-right yb-visible-xlarge yb-hidden-small yb-hidden-medium yb-hidden-large">
                    <img src="images/benefits_phone.png" alt="Phone animation" class="yb-float-right"/>
                    <ul id="phone-img" class="yb-switcher">
                        <li><img src="images/benefits_artist_thumb.jpg" alt="" class="img-artist phone-img " /></li>
                        <li><img src="images/benefits_venue_thumb.jpg" class="img-venue phone-img "></li>
                        <li><img src="images/benefits_lover_thumb.jpg" class="img-lover phone-img "></li>
                    </ul>
                </div>
            </div>
        </section>
        <section id="features" class="gs-section yb-hidden-small yb-hidden-medium yb-hidden-large yb-visible-xlarge">
            <header>
                <div class="bg-overlay"></div>
                <h2>Features</h2>
            </header>
            <div class="yb-grid ">
                <div class="yb-width-large-1-3">
                    <div class="yb-panel yb-panel-box yb-text-center yb-panel-space">
                     	<div class='gs-icon-headphones'></div>
                        <h3>Live chat</h3>
                        <p>Get an inside look at what your favourite band gets up to on gig days with our inbuilt live chat.</p>
                    </div>
                </div>
                <div class="yb-width-large-1-3">
                    <div class="yb-panel yb-panel-box yb-text-center yb-panel-space">
                     	<div class='gs-icon-headphones'></div>
                        <h3>Exclusive Video</h3>
                        <p>Access exclusive video content from before, during and after each gig.</p>
                    </div>
                </div>
                <div class="yb-width-large-1-3">
                    <div class="yb-panel yb-panel-box yb-text-center yb-panel-space">
                     	<div class='gs-icon-headphones'></div>
                        <h3>Full Back Catalogue</h3>
                        <p>Enjoy all of your old favourites with our full back catalogue for each artist.</p>
                    </div>
                </div>
            </div>
            <div class="yb-grid yb-container-center yb-text-center">
                <div class="yb-width-large-1-3 yb-push-1-6">
                    <div class="yb-panel yb-panel-box yb-text-center yb-panel-space">
                     	<div class='gs-icon-headphones'></div>
                        <h3>Custom Merchandise</h3>
                        <p>Design and order custom merchandise directly from your favourite artist.</p>
                    </div>
                </div>
                <div class="yb-width-large-1-3 yb-push-1-6">
                    <div class="yb-panel yb-panel-box yb-text-center yb-panel-space">
                     	<div class='gs-icon-headphones'></div>
                        <h3>VIP Lotteries & Prizes</h3>
                        <p>Get exclusive entry into lotteries to win VIP meet and greets, hang out back stage
and much more!</p>
                    </div>
                </div>
            </div>
            <a class="back-to-top" href="#" data-yb-smooth-scroll><span>Back to top</span></a>
        </section>
        
        <section id="facts" class="gs-section yb-hidden-small yb-hidden-medium yb-hidden-large yb-visible-xlarge">
            <header>
                <div class="bg-overlay"></div>
                <h2>Facts</h2>
            </header>
            <div class="yb-grid" data-yb-scrollspy="{cls:'yb-animation-fade'}">
                <div class="yb-width-large-1-3">
                    <div class="radial-progress" data-progress="0" data-end="25">
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
                <div class="yb-width-large-1-3">
                    <div class="radial-progress" data-progress="0" data-end="25">
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
                            <h4>500</h4>
                            <p>Estimated number of new artists emerging every week.</p>  
                        </div>

                    </div>

                </div>
                <div class="yb-width-large-1-3">
                    <div class="radial-progress" data-progress="0" data-end="25">
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
                            <h4>1</h4>
                            <p>Estimated number of apps designed for just for the artist and the fans</p>  
                        </div>

                    </div>
            </div>
            <a class="back-to-top" href="#" data-yb-smooth-scroll><span>Back to top</span></a>
        </section>
        <section id="contactus" class="gs-section yb-hidden-small yb-hidden-medium yb-hidden-large yb-visible-xlarge">
            <header>
                <div class="bg-overlay"></div>
                <h2>Contact us</h2>
            </header>
			<div class='yb-grid'>
          		<p class="intro yb-width-large-1-1">We'd love to hear from you</p>
	            
	            <form class="yb-width-large-3-4 yb-form yb-contrast" method="post" action="post.php">

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
  
		            <div class="yb-grid yb-form-row">
		                <div class="yb-form yb-width-large-1-2">
		                    <div class="yb-form-controls yb-form ">
		                        <input id="name" type="text" placeholder="NAME" class="yb-width-1-1" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['name'] : '' ?>" required>
		                    </div>
		                </div>
		                <div class="yb-form yb-width-large-1-2">
		                    <div class="yb-form-controls yb-form">
		                        <input id="email" type="email" placeholder="EMAIL ADDRESS" class="yb-width-1-1" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['email'] : '' ?>"required>
		                    </div>
		                </div>
		            </div>
	                <div class="yb-form-controls yb-form yb-form-row">
	                	<textarea id="message" placeholder="MESSAGE" class="yb-width-1-1" id="form-h-t" cols="100" rows="9"><?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['message'] : '' ?></textarea>
	                </div>
	                <div class="yb-grid yb-form-row yb-width-large-3-4">
	                    <div class="yb-form-controls">
	                        <button type="submit" class="yb-button btn-send" >SEND</button>
                       </div>
	                </div>
	            </form>
                
                <!-- unset session -->
                <!-- <?php unset($_SESSION['cf_returndata']); ?> -->

	      	</div>
            <a class="back-to-top" href="#" data-yb-smooth-scroll><span>Back to top</span></a>
        </section>

        <section id="blurb" class="yb-hidden-xlarge">
            <article>
                <h3>BlazRobar.com</h3>
               

                <p class="yb-column-large-1-2">Et hendrerit at morbi dictum lorem adipiscing lacinia in ligula id diam dictum tincidunt. In curabitur diam ultrices sollicitudin tincidunt sit at elit donec tincidunt nec. Dolor ac ipsum posuere lacinia donec nullam at lacinia amet ac. Tellus iaculis et nulla orci in nulla hendrerit mi nec. Ligula viverra ullamcorper praesent faucibus curabitur adipiscing auctor porttitor facilisis metus at curabitur diam posuere ullamcorper. Elit elit metus nullam lorem pellentesque porttitor orci ligul a nullam faucibus posuere mauris sollicitudin. </p>

                <p class="yb-column-large-1-2">Ut mauris faucibus iaculis curabitur morbi adipiscing tempus tortor velit auctor ligula lorem egestas dictum. Ligula sit viverra ligula ullamcorper tortor viverra lacinia viverra donec. In tellus adipiscing in enim sit varius curabitur posuere sit porttitor iaculis vestibulum. Faucibus adipiscing amet dignissim pellentesque mi facilisis ullamcorper. </p>

                <p class="yb-column-large-1-2">Donec donec ullamcorper tortor faucibus accumsan vestibulum faucibus ligul a diam varius orci at dignissim. Sollicitudin tortor faucibus nullam lacinia velit sollicitudin sit auctor varius ullamcorper consectetur varius varius tellus. Tortor curabitur adipiscing tempus metus egestas mauris nulla id morbi amet velit lorem. Amet ligul a nullam nullam donec hendrerit hendrerit pellentesque et enim lacinia pellentesque accumsan tortor lacinia ligul a. Mauris dolor amet at dictum facilisis id mi in viverra sagittis lacinia dolor praesent ultrices facilisis. Sagittis donec facilisis mauris ut et dignissim tincidunt. </p>

                <p class="yb-column-large-1-2">Donec sollicitudin sagittis ac ullamcorper donec et vestibulum. At in ligul a tellus dictum sollicitudin et in tincidunt mauris iaculis facilisis egestas egestas facilisis. Nec consectetur nullam sagittis porttitor mi et elit metus id dictum morbi velit tortor pellentesque. Nec dictum amet curabitur mi ipsum amet ultrices viverra lorem lacinia at donec varius dolor sit ullamcorper. </p>
            </article>
        </section>

		
		<footer class="yb-hidden-small yb-hidden-medium yb-hidden-large yb-visible-xlarge">
		 	<div class="yb-grid ">
                <div class="yb-width-large-1-4">
                    <ul class="yb-nav yb-nav-side" data-yb-scrollspy-nav="{closest: 'li', smoothscroll: {offset: 83.5}}">
	                    <li><a href="#">Home</a></li>
		                <li><a href="#benefits">Benefits</a></li>
		                <li><a href="#features">Features</a></li>
		                <li><a href="#facts">Facts</a></li>
		                <li><a href="#contactus">Contact us</a></li>
	                </ul>
                </div>
                <div class="yb-width-large-1-4">
                     <ul class="yb-list links-apps">
                        <li class="links-apps-apple"><a href="//itunes.apple.com/uk/appstore"><img src="images/logo_app_store.png" alt="Apple App Store" target="_blank"/></a></li>
                        <li class="links-apps-google"><a href="//play.google.com/store/apps"><img src="images/logo_google_play.png" alt="Google Play Store" target="_blank"/></a></li>
                    </ul>
                </div>
                <div class="yb-width-large-1-4">
                    <ul class="yb-list links-partners">
                        <h6>Our partners</h6>
                        <li class="partner-lateral"><a href="http://www.lateral.com.au/" target="_blank"><img src="images/logo_lateral.png" alt="Lateral"/></a></li>
                        <li class="partner-alyka"><a href="http://www.alyka.com.au/" target="_blank"><img src="images/logo_alyka.png" alt="Alyka"/></a></li>
                    </ul>
                </div>
	           	<div class="yb-width-large-1-4 links-social">
                    <a href="" class=" yb-icon-facebook"></a>
                    <a href="" class="yb-icon-twitter"></a>
                    <a href="" class="yb-icon-instagram"></a>
                </div>

            </div>
 	        <div class='tos-links'><a href=''>Privacy</a> <a href=''>Terms of Service</a></div>
		</footer>


        <div id="offcanvas" class="yb-offcanvas">
            <div class="yb-offcanvas-bar yb-offcanvas-bar-flip">
                <ul class="yb-nav yb-nav-offcanvas" data-yb-scrollspy-nav="{closest: 'li', smoothscroll: {offset: 83.5}}">
                    <li><a href="#">Home</a></li>
                    <li><a href="#benefits">Benefits</a></li>
                    <!-- <li><a href="#features">Features</a></li>
                    <li><a href="#facts">Facts</a></li>
                    <li><a href="#contactus">Contact us</a></li> -->
                </ul>
            </div>
        </div>
        
        <!-- custom js --> 
        <script async src="js/custom.min.js"></script>

</body>

</html>
