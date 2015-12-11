<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Gallery</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
	
	
	<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
	
	<?php 
  if(isset($_SESSION['usrid']))
                      include('headeruser.php');
                  else
                     include('header.php') ;

?>
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Gallery
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Gallery</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->


		<div id="main_area">
                <!-- Slider -->
                <div class="row">
                    <div class="span12" id="slider">
                        <!-- Top part of the slider -->
                        <div class="row">
                            <div class="span8" id="carousel-bounding-box">
                                <div class="carousel slide" id="myCarousel">
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
                                        <div class="active item" data-slide-number="0">
                                        <img src="http://localhost/codeigniter-3.0.0/images/gallery/0.jpg"></div>

                                        <div class="item" data-slide-number="1">
                                        <img src="http://localhost/codeigniter-3.0.0/images/gallery/1.jpg"></div>

                                        <div class="item" data-slide-number="2">
                                        <img src="http://localhost/codeigniter-3.0.0/images/gallery/2.jpg"></div>

                                        <div class="item" data-slide-number="3">
                                        <img src="http://localhost/codeigniter-3.0.0/images/gallery/3.jpg"></div>

                                        <div class="item" data-slide-number="4">
                                        <img src="http://localhost/codeigniter-3.0.0/images/gallery/4.jpg"></div>

                                        <div class="item" data-slide-number="5">
                                        <img src="http://localhost/codeigniter-3.0.0/images/gallery/5.jpg"></div>
                                    </div><!-- Carousel nav -->
                                    <a class="carousel-control left" data-slide="prev" href="#myCarousel">‹</a> <a class="carousel-control right" data-slide="next" href="#myCarousel">›</a>
                                </div>
                            </div>

                            <div class="span4" id="carousel-text"></div>

                            <div id="slide-content" style="display: none;">
                                <div id="slide-content-0">
                                    <h2>Slider One</h2>
                                    <p>Lorem Ipsum Dolor</p>
                                    <p class="sub-text">October 24 2012 - <a href="#">Read more</a></p>
                                </div>

                                <div id="slide-content-1">
                                    <h2>Slider Two</h2>
                                    <p>Lorem Ipsum Dolor</p>
                                    <p class="sub-text">October 24 2012 - <a href="#">Read more</a></p>
                                </div>

                                <div id="slide-content-2">
                                    <h2>Slider Three</h2>
                                    <p>Lorem Ipsum Dolor</p>
                                    <p class="sub-text">October 24 2012 - <a href="#">Read more</a></p>
                                </div>

                                <div id="slide-content-3">
                                    <h2>Slider Four</h2>
                                    <p>Lorem Ipsum Dolor</p>
                                    <p class="sub-text">October 24 2012 - <a href="#">Read more</a></p>
                                </div>

                                <div id="slide-content-4">
                                    <h2>Slider Five</h2>
                                    <p>Lorem Ipsum Dolor</p>
                                    <p class="sub-text">October 24 2012 - <a href="#">Read more</a></p>
                                </div>

                                <div id="slide-content-5">
                                    <h2>Slider Six</h2>
                                    <p>Lorem Ipsum Dolor</p>
                                    <p class="sub-text">October 24 2012 - <a href="#">Read more</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/Slider-->

                <div class="row hidden-phone" id="slider-thumbs">
                    <div class="span12">
                        <!-- Bottom switcher of slider -->

                        <ul class="thumbnails">
                            <li class="span2">
                                <a class="thumbnail" id="carousel-selector-0"><img src="http://localhost/codeigniter-3.0.0/images/gallery/0s.jpg"></a>
                            </li>

                            <li class="span2">
                                <a class="thumbnail" id="carousel-selector-1"><img src="http://localhost/codeigniter-3.0.0/images/gallery/1s.jpg"></a>
                            </li>

                            <li class="span2">
                                <a class="thumbnail" id="carousel-selector-2"><img src="http://localhost/codeigniter-3.0.0/images/gallery/2s.jpg"></a>
                            </li>

                            <li class="span2">
                                <a class="thumbnail" id="carousel-selector-3"><img src="http://localhost/codeigniter-3.0.0/images/gallery/3s.jpg"></a>
                            </li>

                            <li class="span2">
                                <a class="thumbnail" id="carousel-selector-4"><img src="http://localhost/codeigniter-3.0.0/images/gallery/4s.jpg"></a>
                            </li>

                            <li class="span2">
                                <a class="thumbnail" id="carousel-selector-5"><img src="http://localhost/codeigniter-3.0.0/images/gallery/5s.jpg"></a>
                            </li>
                        </ul>
                    </div>
                </div>
        </div>
		
		
		
</div>
<script type="text/javascript">
  jQuery(document).ready(function($) {
 
        $('#myCarousel').carousel({
                interval: 1500
        });
 
        $('#carousel-text').html($('#slide-content-0').html());
 
        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click( function(){
                var id_selector = $(this).attr("id");
                var id = id_selector.substr(id_selector.length -1);
                var id = parseInt(id);
                $('#myCarousel').carousel(id);
        });
 
 
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid', function (e) {
                var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
});
</script>