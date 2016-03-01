<?php 
session_start();
$lc = ""; 
    // Check to see that the global language server variable isset()
    // If it is set, we cut the first two characters from that string
if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE']))
    $lc = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

    // Now we simply evaluate that variable to detect specific languages
if($lc == "es"){
	$_SESSION["lc"] = $lc;
    header("location: /es/");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>LinkedInPrivate | See any profile</title>
    <meta name="description" content="A free HTML template and UI Kit built on Bootstrap" />
    <meta name="keywords" content="free html template, bootstrap, ui kit, sass" />
    <meta name="author" content="webmip" />
    
	<link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="img/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
	<link rel="manifest" href="img/favicon/manifest.json">
	<meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
    <meta name="msapplication-TileColor" content="#663fb5">
    <meta name="theme-color" content="#663fb5">
    
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:creator" content="@cg_sanchez">
	<meta name="twitter:site" content="@cg_sanchez">
	<meta name="twitter:title" content="LinkedInPrivate new FREE tool">
	<meta name="twitter:description" content="View any profile linkedIn privately, without a trace and free for all. Use this new tool for lookup all the LinkedIn profiles.">
	<meta name="twitter:image" content="https://linkedinprivate.com/rssimg.jpg">
 
	<meta property="og:title" content="LinkedInPrivate | See any profile">
	<meta property="og:site_name" content="LinkedIn Private">
	<meta property="og:url" content="https://linkedinprivate.com">
	<meta property="og:description" content="View any profile linkedIn privately, without a trace and free for all. Use this new tool for lookup all the LinkedIn profiles.">
	<meta property="og:type" content="website">
	<meta property="og:image" content="https://linkedinprivate.com/rssimg.jpg" />
 
	<link rel="canonical" href="https://linkedinprivate.com"/>
	
	<link rel="stylesheet" href="css/landio.css">
	
	
  </head>

  <body>

    <!-- Navigation
    ================================================== -->

    <nav class="navbar navbar-dark bg-inverse bg-inverse-custom navbar-fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#start">
          <span class="icon-logo">
			<img src="img/LinkedLogo.png"/>
		  </span>
          <span class="sr-only">LinkedInPrivate</span>
        </a>
        
        
          <ul class="nav navbar-nav pull-xs-right">
            <li class="nav-item nav-item-toggable">
              <a class="nav-link" href="/en/?lcs=en">ESP&nbsp;<img src="img/ES_flag.png" style="width: 50px;" /></a>
            </li>
            
          </ul>
        
      </div>
    </nav>

    <!-- Hero Section
    ================================================== -->

    <header class="jumbotron bg-inverse text-xs-center center-vertically" role="banner">
      <div class="container">
        <h1 class="display-3">LinkedIn Private, See the Network.</h1>
        <h2 class="m-b-3">Displays any profile, <em>like first level contacts without a trace</em>.</h2>
        <a class="btn btn-secondary-outline m-b-1" href="#start" role="button"></span>LOOKUP LINKEDIN FOR FREE</a>
        <ul class="nav nav-inline social-share">
          <li class="nav-item"><a class="nav-link" href="https://twitter.com/share?url=https://linkedinprivate.com&amp;text=Check%20this%20LinkedIn%20tool&amp;hashtags=LinkedIn" target="_blank"><span class="icon-twitter"></span> 1024</a></li>
          <li class="nav-item"><a class="nav-link" href="http://www.facebook.com/sharer.php?u=https://linkedinprivate.com" target="_blank"><span class="icon-facebook"></span> 562</a></li>
          <li class="nav-item"><a class="nav-link" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://linkedinprivate.com" target="_blank"><span class="icon-linkedin"></span> 356</a></li>
        </ul>
      </div>
    </header>

    <!-- Intro
    ================================================== -->

    <section class="section-intro bg-faded text-xs-center">
      <div class="container">
        <h3 class="wp wp-1">Watch any contact on LinkedIn as if it was your friend</h3>
        <p class="lead wp wp-2">Leaves no trace, our website will be the intermediary. We do not keep any record.</p>
        <img src="img/banner.png" alt="iPad mock" class="img-fluid wp wp-3">
      </div>
    </section>

    <!-- Features
    ================================================== -->

    <section class="section-features text-xs-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <div class="card-block">
                <span class="icon-key2 display-1"></span>
                <h4 class="card-title">Secret</h4>
                <h6 class="card-subtitle text-muted">Is 100% anonymous</h6>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-block">
                <span class="icon-thunderbolt display-1"></span>
                <h4 class="card-title">Powerfull</h4>
                <h6 class="card-subtitle text-muted">Is 100% efective</h6>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card m-b-0">
              <div class="card-block">
                <span class="icon-heart display-1"></span>
                <h4 class="card-title">Fast & Free</h4>
                <h6 class="card-subtitle text-muted">Forever and ever</h6>
              </div>
            </div>
          </div>
        </div>
		<div class="row">
			<div class="card m-b-0">
              <div class="card-block">
                <p class="card-text">Our system is responsible for making friend requests to the user who your request us, having a large number of users we can act as an intermediary (proxy) between you and the contact, and in few seconds / minutes we will give you a URL for see the profile.</p>
              </div>
            </div>
		</div>
      </div>
    </section>

	<section class="section-pricing bg-faded text-xs-center">
      <div class="container">
        <h3>Manage your subscriptions</h3>
        <div class="row p-y-3">
          <div class="col-md-4 p-t-md wp wp-5">
            <div class="card pricing-box">
              <div class="card-header text-uppercase">
                Personal
              </div>
              <div class="card-block">
                <p class="card-title">Our service can be used by anyone for free forever (not for business).</p>
                <h4 class="card-text">
                  <sup class="pricing-box-currency"></sup>
                  <span class="pricing-box-price">Free</span>
                  <small class="text-muted text-uppercase">/Forever</small>
                </h4>
              </div>
              <ul class="list-group list-group-flush p-x">
                <li class="list-group-item">100% Private</li>
                <li class="list-group-item">No card or personal data required</li>
                <li class="list-group-item">Max 10 request per month</li>
              </ul>
              <a href="#start" class="btn btn-primary-outline">Start for free</a>
            </div>
          </div>
          <div class="col-md-4 stacking-top">
            <div class="card pricing-box pricing-best p-x-0">
              <div class="card-header text-uppercase">
                Professional
              </div>
              <div class="card-block">
                <p class="card-title">For small companies, recruiters, or researchers try our pack with more requests.</p>
                <h4 class="card-text">
                  <sup class="pricing-box-currency">$</sup>
                  <span class="pricing-box-price">10</span>
                  <small class="text-muted text-uppercase">/month</small>
                </h4>
              </div>
              <ul class="list-group list-group-flush p-x">
                <li class="list-group-item">100% private</li>
                <li class="list-group-item">Up to 5000 request per month</li>
                <li class="list-group-item">API for integrate on business app</li>
                <li class="list-group-item">Try free plan before buy</li>
              </ul>
              <a href="#start" class="btn btn-primary">Try our service</a>
            </div>
          </div>
          <div class="col-md-4 p-t-md wp wp-6">
            <div class="card pricing-box">
              <div class="card-header text-uppercase">
                Enterprise
              </div>
              <div class="card-block">
                <p class="card-title">Excellent plan for big projects where you need investigate your candidates</p>
                <h4 class="card-text">
                  <sup class="pricing-box-currency">$</sup>
                  <span class="pricing-box-price">19</span>
                  <small class="text-muted text-uppercase">/Month</small>
                </h4>
              </div>
              <ul class="list-group list-group-flush p-x">
                <li class="list-group-item">100% private</li>
                <li class="list-group-item">Unlimited requests</li>
				<li class="list-group-item">API for integrate on business app</li>
                <li class="list-group-item">Try free plan before buy</li>
              </ul>
              <a href="#start" class="btn btn-primary-outline">Try our service</a>
            </div>
          </div>
        </div>
      </div>
    </section>

	<section class="section-testimonials text-xs-center bg-inverse">
      <div class="container">
        <h3 class="sr-only">Testimonials</h3>
        <div id="carousel-testimonials" class="carousel slide" data-ride="carousel" data-interval="0">
          <div class="carousel-inner" role="listbox">


            <div class="carousel-item active">
              <blockquote class="blockquote">
                <img src="img/face5.jpg" height="80" width="80" alt="Avatar" class="img-circle">
                <p class="h3">This tool helps us in our recruitment processes, where it is essential to know the candidate.</p>
                <footer>H&B Recruitment</footer>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Sign Up
    ================================================== -->

    <section class="section-signup bg-faded">
      <div class="container">
        <h3 class="text-xs-center m-b-3">Try it now! Look at any profile</h3>
		<a name="start" href="javascript:;"></a>
		  
		<h6 class="text m-b-3">
            <ol>
			<li>Fill your LinkedIn email (Used for connection with LinkedIn API)</li>
			<li>Fill your LinkedIn password (Used for connection with LinkedIn API)</li>
			<li>Fill the LinkedIn profile URL which you want to see the profile anonymously or fill the name</li>
			<li>Push Submit and wait for a few seconds, our SET (Search Engine Tool) give you the requested profile</li>
			</ol>
         </h6>  
        <form action="result_en.php" method="post" id="register-form" novalidate="novalidate">
          <div class="row" id="form-content">
		  <fieldset>
            <div class="col-md-6 col-xl-3">
			<div class="fieldgroup">
              <div class="form-group has-icon-left form-control-email">
                <label class="sr-only" for="email">Your LinkedIn Email</label>
                <input type="email" name="email" class="form-control form-control-lg" id="email" placeholder="Your LinkedIn Email" autocomplete="on">
              </div>
			</div>  
            </div>
            <div class="col-md-6 col-xl-3">
			<div class="fieldgroup">
              <div class="form-group has-icon-left form-control-password">
                <label class="sr-only" for="password">Your LinkedIn password</label>
                <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Your LinkedIn password" autocomplete="on">
              </div>
			</div>  
            </div>
			<div class="col-md-6 col-xl-3">
              <div class="form-group has-icon-left form-control-name">
                <label class="sr-only" for="inputName">Profile requested URL</label>
                <input type="text" class="form-control form-control-lg" id="inputName" placeholder="Profile URL requested">
              </div>
            </div>
            <div class="col-md-6 col-xl-3">
              <div class="form-group">
                <button value="submit" onclick="__gaTracker('send', 'event', 'buttons', 'click', 'Boton-submit-en';" type="submit" class="btn btn-primary btn-block">Submit!</button>
              </div>
            </div>
			</fieldset>
          </div>
          <label class="c-input c-checkbox">
            We <u>never use or store your password</u>, only is used to make a connection with the LinkedIn API. For more info about the API Click <a target="_blank" href="https://developer.linkedin.com/docs/signin-with-linkedin">here</a>
          </label>
        </form>
      </div>
    </section>

    <!-- Footer
    ================================================== -->

    <footer class="section-footer bg-inverse" role="contentinfo">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-5">
            <div class="media">
              <div class="media-left">
                <span class="media-object icon-logo display-1"></span>
              </div>
              <small class="media-body media-bottom">
                &copy; LinkedIn Private 2016. <br>
                Develop by <a target="_bank" href="https://www.webmip.com">webmip</a> Using Codrops theme.
              </small>
            </div>
          </div>
          <div class="col-md-6 col-lg-7">
            <ul class="nav nav-inline">
			<li class="nav-item"><a class="nav-link scroll-top" href="https://www.ssllabs.com/ssltest/analyze.html?d=linkedinprivate.com&s=104.18.44.67&hideResults=on" target="_blank"><img src="img/pci.png" style="width: 120px;" /></a></li>
              <li class="nav-item"><a class="nav-link scroll-top" href="#totop">Ir arriba <span class="icon-caret-up"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>

	<script src="js/landio.min.js"></script>
	<script src="js/validate.js"></script>
	
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-65948894-3', 'auto');
  ga('send', 'pageview');

</script>
	
  </body>
</html>
