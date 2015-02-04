<?php include "header.php" ?>

	<!-- +++++ Welcome Section +++++ -->
	<div id="ww">
	    <div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 centered">
					<img src="Image/test.gif" alt="" width="155" height="155">
					<h1>Hi, my name is Yano!</h1>
					<p>Hello everybody. my name is Yano,and this is my resume.</p>
					<p>Please, consider to follow  <a href="http://twitter.com/yanoandri">my twitter</a> to be updated with my activity and project also other stuff you can checkout.  Regards!.</p>
                </div><!-- /col-lg-8 -->
            </div><!-- /row -->
        </div> <!-- /container -->
    </div><!-- /ww -->


	
	<!-- +++++ Projects Section +++++ -->
	
<!--	<div class="container pt">-->
<!--		<div class="row mt centered">	-->
<!--			<div class="col-lg-12">-->
<!--				<a class="zoom green centered" href="work01.php"><img class="img-responsive" src="../Resume/image/portfolio/port01.jpg" alt="" /></a>-->
<!--				<p>APE</p>-->
<!--			</div>-->
<!--        </div><!-- /row -->
<!--    </div><!-- /container -->

<div id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="item active">
            <img src="Image/audit%20mainpage.jpg" class="img-responsive" width="1500" height="500">
            <div class="container">
                <div class="carousel-caption">
                    <h1>My Work</h1>
                    <p>Find out what i've been working on.</p>
                    <p><a class="btn btn-lg btn-primary" href="work.php">Find Out!</a>
                    </p></pthis></div>
            </div>
        </div>
        <div class="item">
            <img src="Image/IMG_4912.JPG" class="img-responsive" width="1500" height="500">
            <div class="container">
                <div class="carousel-caption">
                    <h1>About Me</h1>
                    <p>Find out what i made of.</p>
                    <p><a class="btn btn-large btn-primary" href="about.php">Learn more</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="Image/gallery/381962_2734439767824_1462205004_32835904_1848521093_n.jpg" class="img-responsive" width="1500" height="500">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Gallery</h1>
                    <p>See what i made of. </p>
                    <p><a class="btn btn-large btn-primary" href="Gallery.php">Gallery</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</div>
	
	<!-- +++++ Footer Section +++++ -->

<?php include "footer.php" ?>
