<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>ELPolitic - Responsive HTML5 OnePage Template</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Colors CSS -->
    
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="politics_version">

    <!-- LOADER -->
    <div id="preloader">
        <div id="main-ld">
			<div id="loader"></div>  
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->

    <div class="topbar text-center hidden-xs">
        <p>This site uses cookies. By continuing to browse ELPolitic, you are agreeing to use our site cookies. <a href="#">Find out more here ></a></p>
    </div>

    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logos/logo.png" alt="image"></a>
                </div>

                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a data-scroll-nav="0" href="#main-banner" class="active">Home</a></li>
                        <li><a data-scroll-nav="1" href="#about">About Us</a></li>
                        <li><a data-scroll-nav="2" href="#issues">Issues</a></li>
                        <li><a data-scroll-nav="3" href="#event">Event</a></li>
						<li><a data-scroll-nav="4" href="#gallery">Gallery</a></li>
                        <li><a data-scroll-nav="5" href="#media">Multimedia</a></li>
						<li><a data-scroll-nav="6" href="#blog">Blog</a></li>
                        <li><a data-scroll-nav="7" href="#contact">Contact</a></li>
                        <li><a  href="department.php">LoGIN</a></li>
                        <li><a>
                            <select name="cars">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab............</option>
  <option value="fiat">Fiat</option>
  <option value="audi">Audi</option>
</select>
</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
    </header>
	<br><br>
	<div id="main-banner" class="banner-one" data-scroll-index="0">
        
		
        <?php 
for ($x = 1; $x <= 4; $x++) {

?>
        
		<div data-src="uploads/slide-<?php print $x; ?>.jpg">
			<div class="camera_caption">
				<div class="container">
                    <br><br><br><br><br><br>
					<h1 class="wow fadeInUp animated">World is not for selfish People</h1>
					<p class="wow fadeInUp animated" data-wow-delay="0.2s"> Come lets support the needy...  </p>
					<a data-scroll href="#" class="btn btn-light btn-radius btn-brd grd1">DONATE</a>
				</div> <!-- /.container -->
			</div> <!-- /.camera_caption -->
		</div>
        <?php
        }
        ?>
		
	</div> <!-- /#theme-main-banner -->


    <div id="about" data-scroll-index="1" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">
                        <h4>Who We are</h4>
                        <h2>Welcome to  ELPolitic</h2>
                        <blockquote class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</blockquote>

                        <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed vitae rutrum neque. Ut id erat sit amet libero bibendum aliquam. Donec ac egestas libero, eu bibendum risus. Phasellus et congue justo. </p>

                        <a href="#services" data-scroll class="btn btn-light btn-radius btn-brd grd1">Learn More</a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="uploads/about_04.png" alt="" class="img-responsive img-rounded">
                        <a href="http://www.youtube.com/watch?v=nrJtHemSPW4" data-rel="prettyPhoto[gal]" class="playbutton"><i class="flaticon-play-button"></i></a>
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->

            <hr class="hr1"> 

            <div class="row text-center">
                <div class="col-md-6 col-sm-6 col-xs-12">
                   <div class="service-widget">
                        <div class="post-media_pp wow fadeIn">
                            <a href="uploads/politic_01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="uploads/politic_01.jpg" alt="" class="img-responsive">
							<div class="hover-up">
								<h3>Let's work for a better future</h3>
								<p>Aliquam sagittis ligula et sem lacinia, ut facilisis enim sollicitudin. Proin nisi est, 
								convallis nec purus vitae, iaculis posuere sapien. Cum sociis natoque.</p>
							</div>
                        </div>
                        
                    </div><!-- end service -->
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="service-widget">
                        <div class="post-media_pp wow fadeIn">
                            <a href="uploads/politic_02.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="uploads/politic_02.jpg" alt="" class="img-responsive">
							<div class="hover-up">
								<h3>Parliament building was renovated</h3>
								<p>Duis at tellus at dui tincidunt scelerisque nec sed felis. Suspendisse id dolor sed leo 
								rutrum euismod. Nullam vestibulum fermentum erat. It nam auctor. </p>
							</div>
                        </div>
                        
                    </div><!-- end service -->
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="service-widget">
                        <div class="post-media_pp wow fadeIn">
                            <a href="uploads/politic_03.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="uploads/politic_03.jpg" alt="" class="img-responsive">
							<div class="hover-up">
								<h3>Start new legislative year</h3>
								<p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet lacus vitae massa sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
							</div>
                        </div>
                        
                    </div><!-- end service -->
                </div>
				
				<div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="service-widget">
                        <div class="post-media_pp wow fadeIn">
                            <a href="uploads/politic_02.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="uploads/politic_02.jpg" alt="" class="img-responsive">
							<div class="hover-up">
								<h3>Parliament building was renovated</h3>
								<p>Duis at tellus at dui tincidunt scelerisque nec sed felis. Suspendisse id dolor sed leo rutrum euismod. Nullam vestibulum fermentum erat. It nam auctor. </p>
							</div>
                        </div>
                    </div><!-- end service -->
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div class="section nopad">
        <img src="uploads/" alt="" class="img-responsive">
    </div>

    <div id="issues" data-scroll-index="2" class="section lb">
        <div class="container">
            <div class="section-title text-left">
                <h3>Issues & Plans</h3>
                <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus.<br> Sed a tellus quis mi rhoncus dignissim.</p>
            </div><!-- end title -->

            <div class="row">
				<div class="col-md-5">
                    <div class="issuse-wrap2 clearfix">
                        <img src="uploads/about_04.jpg" alt="" class="img-responsive img-rounded">
                        <h4>"Turkey will continue to make structural economic reforms”</h4>
                        <p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet massa sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
                        <p>Tiam sit amet lacus vitae massa sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
                    </div><!-- end issue -->
                </div><!-- end col -->
                <div class="col-md-7">
                    <div class="issuse-wrap clearfix">
                        <img src="uploads/issue_01.jpg" alt="" class="img-responsive img-rounded alignleft">
                        <h4>CLIMATE CHANGE</h4>
                        <p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet massa sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
                    </div><!-- end issue -->

                    <div class="issuse-wrap clearfix">
                        <img src="uploads/issue_02.jpg" alt="" class="img-responsive img-rounded alignleft">
                        <h4>COMPREHENSIVE IMMIGRATION REFORM</h4>
                        <p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet lacus vitae massa sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
                    </div><!-- end issue -->

                    <div class="issuse-wrap clearfix">
                        <img src="uploads/issue_03.jpg" alt="" class="img-responsive img-rounded alignleft">
                        <h4>ECONOMIC OPPORTUNITY</h4>
                        <p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet lacus vitae massa sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
                    </div><!-- end issue -->

                    <div class="issuse-wrap lastchild clearfix">
                        <img src="uploads/issue_04.jpg" alt="" class="img-responsive img-rounded alignleft">
                        <h4>HEALTH CARE</h4>
                        <p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet lacus vitae massa sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
                    </div><!-- end issue -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div id="event" data-scroll-index="3" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Events</h3>
                <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus.<br> Sed a tellus quis mi rhoncus dignissim.</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-4">
                    <div class="participate-wrap">
                        <small>Technology</small>
						<figure>
							<img src="uploads/politic_04.jpg" alt="" class="img-responsive">
							<figcaption><a href="#" class="global-radius"> <i class="flaticon-unlink"></i> </a></figcaption>
						</figure>
						<div class="event_dit">
							<h4>Integer sollicitudin metus</h4>
							<ul>
								<li> <a href="#"> <i class="fa fa-calendar"></i> 24-10-2015 </a> </li>
								<li> <a href="#"> <i class="fa fa-clock-o"></i> 7:00 PM to 9:00 PM </a>  </li>
								<li> <a href="#"> <i class="fa fa-map-marker"></i> NY City, USA </a> </li>
							</ul>
							<p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet massa sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
							<a href="event-detail.html" class="btn btn-light btn-radius btn-brd grd1">Detail</a>
						</div>
                    </div><!-- end participate -->
                </div><!-- end col -->

                <div class="col-md-4">
                    <div class="participate-wrap">
                        <small>Let's Speak with Us</small>
						<figure>
							<img src="uploads/politic_05.jpg" alt="" class="img-responsive">
							<figcaption><a href="#" class="global-radius"> <i class="flaticon-unlink"></i> </a></figcaption>
						</figure>
						<div class="event_dit">
							<h4>Integer facilisis elit</h4>
							<ul>
								<li> <a href="#"> <i class="fa fa-calendar"></i> 24-10-2015 </a> </li>
								<li> <a href="#"> <i class="fa fa-clock-o"></i> 7:00 PM to 9:00 PM </a>  </li>
								<li> <a href="#"> <i class="fa fa-map-marker"></i> NY City, USA </a> </li>
							</ul>
							<p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet massa sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
							<a href="event-detail.html" class="btn btn-light btn-radius btn-brd grd1">Detail</a>
						</div>
                    </div><!-- end participate -->
                </div><!-- end col -->

                <div class="col-md-4">
                    <div class="participate-wrap">
                        <small>Join Us for Free</small>
                        <figure>
							<img src="uploads/politic_06.jpg" alt="" class="img-responsive">
							<figcaption><a href="#" class="global-radius"> <i class="flaticon-unlink"></i> </a></figcaption>
						</figure>
                        <div class="event_dit">
							<h4>Maecenas bibendum tellus</h4>
							<ul>
								<li> <a href="#"> <i class="fa fa-calendar"></i> 24-10-2015 </a> </li>
								<li> <a href="#"> <i class="fa fa-clock-o"></i> 7:00 PM to 9:00 PM </a>  </li>
								<li> <a href="#"> <i class="fa fa-map-marker"></i> NY City, USA </a> </li>
							</ul>
							<p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet massa sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
							<a href="event-detail.html" class="btn btn-light btn-radius btn-brd grd1">Detail</a>
						</div>
                    </div><!-- end participate -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

	
	<div id="gallery" data-scroll-index="4" class="section lb">
		<div class="container">
			<div class="section-title text-center">
                <h3>Gallery</h3>
                <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus.<br> Sed a tellus quis mi rhoncus dignissim.</p>
            </div><!-- end title -->
			
			<div class="gallery-menu row">
				<div class="col-md-12">
					<div class="button-group filter-button-group text-center">
						<button class="active" data-filter="*">All</button>
						<button data-filter=".gal_a">Meeting</button>
						<button data-filter=".gal_b">Event</button>
						<button data-filter=".gal_c">Economic</button>
						<button data-filter=".gal_d">Education</button>
					</div>
				</div>
			</div>
			
			<div class="gallery-list row">
				<div class="col-md-4 col-sm-6 gallery-grid gal_a gal_b">
					<div class="gallery-single fix">
						<img src="uploads/gallery_img-01.jpg" class="img-responsive" alt="Image">
						<div class="img-overlay">
							<a href="uploads/gallery_img-01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_c gal_b">
					<div class="gallery-single fix">
						<img src="uploads/gallery_img-02.jpg" class="img-responsive" alt="Image">
						<div class="img-overlay">
							<a href="uploads/gallery_img-02.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_a gal_c">
					<div class="gallery-single fix">
						<img src="uploads/gallery_img-03.jpg" class="img-responsive" alt="Image">
						<div class="img-overlay">
							<a href="uploads/gallery_img-03.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_b gal_a">
					<div class="gallery-single fix">
						<img src="uploads/gallery_img-04.jpg" class="img-responsive" alt="Image">
						<div class="img-overlay">
							<a href="uploads/gallery_img-04.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_a gal_c">
					<div class="gallery-single fix">
						<img src="uploads/gallery_img-05.jpg" class="img-responsive" alt="Image">
						<div class="img-overlay">
							<a href="uploads/gallery_img-05.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_c gal_d">
					<div class="gallery-single fix">
						<img src="uploads/gallery_img-06.jpg" class="img-responsive" alt="Image">
						<div class="img-overlay">
							<a href="uploads/gallery_img-06.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
						</div>
					</div>
				</div>

                <div class="col-md-4 col-sm-6 gallery-grid gal_c gal_d">
                    <div class="gallery-single fix">
                        <img src="uploads/gallery_img-07.jpg" class="img-responsive" alt="Image">
                        <div class="img-overlay">
                            <a href="uploads/gallery_img-06.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 gallery-grid gal_c gal_d">
                    <div class="gallery-single fix">
                        <img src="uploads/gallery_img-08.jpg" class="img-responsive" alt="Image">
                        <div class="img-overlay">
                            <a href="uploads/gallery_img-06.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 gallery-grid gal_c gal_d">
                    <div class="gallery-single fix">
                        <img src="uploads/gallery_img-09.jpg" class="img-responsive" alt="Image">
                        <div class="img-overlay">
                            <a href="uploads/gallery_img-06.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        </div>
                    </div>
                </div>
			</div>
			</div>
		</div>
	</div>
	
    <div id="media" data-scroll-index="5" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Multimedia</h3>
                <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus.<br> Sed a tellus quis mi rhoncus dignissim.</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-4">
                    <div class="issuse-wrap2 clearfix">
                        <div class="post-media wow fadeIn">
                            <img src="uploads/news_01.jpg" alt="" class="img-responsive img-rounded">
                            <a href="http://www.youtube.com/watch?v=nrJtHemSPW4" data-rel="prettyPhoto[gal]" class="playbutton"><i class="flaticon-play-button"></i></a>
                        </div><!-- end media -->
                        <h4>"A Political News from Us! Don't forget Watch”</h4>
                        <p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet massa sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
                    </div><!-- end issue -->
                </div><!-- end col -->

                <div class="col-md-4">
                    <div class="issuse-wrap2 clearfix">
                        <div class="post-media wow fadeIn">
                            <img src="uploads/news_02.jpg" alt="" class="img-responsive img-rounded">
                            <a href="http://www.youtube.com/watch?v=nrJtHemSPW4" data-rel="prettyPhoto[gal]" class="playbutton"><i class="flaticon-play-button"></i></a>
                        </div><!-- end media -->
                        <h4>"Our Speaker Talking About Our Strategy! All plans!"</h4>
                        <p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet massa sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
                    </div><!-- end issue -->
                </div><!-- end col -->

                <div class="col-md-4">
                    <div class="issuse-wrap2 clearfix">
                        <div class="post-media wow fadeIn">
                            <img src="uploads/news_03.jpg" alt="" class="img-responsive img-rounded">
                            <a href="http://www.youtube.com/watch?v=nrJtHemSPW4" data-rel="prettyPhoto[gal]" class="playbutton"><i class="flaticon-play-button"></i></a>
                        </div><!-- end media -->
                        <h4>"Say Hello to our new politican : John DOE..”</h4>
                        <p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet massa sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
                    </div><!-- end issue -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	
	<div id="blog" data-scroll-index="6" class="section lb">
		<div class="container">
			<div class="section-title text-center">
				<span>Latest news</span>
                <h3>From Blog</h3>
                <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus.<br> Sed a tellus quis mi rhoncus dignissim.</p>
            </div><!-- end title -->
			
			<div class="row">
				<div class="col-md-4 col-sm-6 col-lg-4">
					<div class="post-box">
						<div class="post-thumb">
							<img src="uploads/politic_04.jpg" class="img-responsive" alt="post-img" />
							<div class="date">
								<span>06</span>
								<span>Aug</span>
							</div>
						</div>
						<div class="post-info">
							<h4>Maecenas bibendum tellus</h4>
							<ul>
                                <li>by admin</li>
                                <li>Apr 21, 2018</li>
                                <li><a href="#"><b> Comments</b></a></li>
                            </ul>
							<p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet massa sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-lg-4">
					<div class="post-box">
						<div class="post-thumb">
							<img src="uploads/politic_05.jpg" class="img-responsive" alt="post-img" />
							<div class="date">
								<span>06</span>
								<span>Aug</span>
							</div>
						</div>
						<div class="post-info">
							<h4>Maecenas bibendum tellus</h4>
							<ul>
                                <li>by admin</li>
                                <li>Apr 21, 2018</li>
                                <li><a href="#"><b> Comments</b></a></li>
                            </ul>
							<p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet massa sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-lg-4">
					<div class="post-box">
						<div class="post-thumb">
							<img src="uploads/politic_06.jpg" class="img-responsive" alt="post-img" />
							<div class="date">
								<span>06</span>
								<span>Aug</span>
							</div>
						</div>
						<div class="post-info">
							<h4>Maecenas bibendum tellus</h4>
							<ul>
                                <li>by admin</li>
                                <li>Apr 21, 2018</li>
                                <li><a href="#"><b> Comments</b></a></li>
                            </ul>
							<p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet massa sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>

    <div id="donate" data-scroll-index="7" class="section db">
        <div class="container">
            <div class="section-title text-center">
                <h3>Contact</h3>
                <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus.<br> Sed a tellus quis mi rhoncus dignissim.</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactform" class="row" action="contact.php" name="contactform" method="post">
                            <fieldset class="row-fluid">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label class="sr-only">Select Service</label>
                                    <select name="select_service" id="select_service" class="selectpicker form-control" data-style="btn-white">
                                        <option value="12">Donate For?</option>
                                        <option value="Political Parties">Political Parties</option>
                                        <option value="For Politician">For Politician</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label class="sr-only">What is max price?</label>
                                    <select name="select_price" id="select_price" class="selectpicker form-control" data-style="btn-white">
                                        <option value="$100 - $2000">$10 - $100</option>
                                        <option value="$2000 - $4000">$100 - $1000</option>
                                        <option value="$4000 - $10000">$1000 - $10000</option>
                                    </select>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Why you are donate us?"></textarea>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center">
                                    <button type="submit" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block">Pay Now via PayPal</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->



     <div id="donate" data-scroll-index="8" class="section db">
        <div class="container">
            <div class="section-title text-center">
                <h3>Contact</h3>
                <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus.<br> Sed a tellus quis mi rhoncus dignissim.</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactform" class="row" action="contact.php" name="contactform" method="post">
                            <fieldset class="row-fluid">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label class="sr-only">Select Service</label>
                                    <select name="select_service" id="select_service" class="selectpicker form-control" data-style="btn-white">
                                        <option value="12">Donate For?</option>
                                        <option value="Political Parties">Political Parties</option>
                                        <option value="For Politician">For Politician</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label class="sr-only">What is max price?</label>
                                    <select name="select_price" id="select_price" class="selectpicker form-control" data-style="btn-white">
                                        <option value="$100 - $2000">$10 - $100</option>
                                        <option value="$2000 - $4000">$100 - $1000</option>
                                        <option value="$4000 - $10000">$1000 - $10000</option>
                                    </select>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Why you are donate us?"></textarea>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center">
                                    <button type="submit" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block">Pay Now via PayPal</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">
                    <p class="footer-links">
                        <a href="#">Home</a>
                        <a href="#">Blog</a>
                        <a href="#">Pricing</a>
                        <a href="#">About</a>
                        <a href="#">Faq</a>
                        <a href="#">Contact</a>
                    </p>
                    <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">Elpolitic</a> Design By : 
					<a href="https://html.design/">html design</a></p>
                </div>

                <div class="footer-right">
                    <form method="get" action="#">
                        <input placeholder="Subscribe our newsletter.." name="search">
                        <i class="fa fa-envelope-o"></i>
                    </form>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
	<!-- Camera Slider -->
	<script src="js/jquery.mobile.customized.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script> 
	<script src="js/camera.min.js"></script>
	<script src="js/scrollIt.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/jquery.vide.js"></script>

</body>
</html>