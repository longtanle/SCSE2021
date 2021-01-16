<!-- views/index.ejs -->
<?php

$string = file_get_contents("data/general.json");
$track = file_get_contents("data/track.json");
if ($string === false) {
    // deal with error...
}

$json_a = json_decode($string, true);
$json_track = json_decode($track, true);
if ($json_a === null) {
    // deal with error...
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'partials/_head.php' ; ?>

    <title> 2021 SCSE | Home </title>
</head>

<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>

<body>

<div class="sb-site-container">
<div class="boxed">

<?php include 'partials/_header.php' ?>

<?php include 'partials/_nav.php' ?>

<!-- Carousel -->
<section class="carousel-section">
    <div id="carousel-example-generic" class="carousel carousel-razon slide" data-ride="carousel" data-interval="5000">
        <!-- Indicators -->
        <!--
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol> -->

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-7">
                            <div class="carousel-caption">
                                <div class="carousel-text">
                                   <h1 class="animated fadeInDownBig animation-delay-7 carousel-title"><b><?php echo $json_a['organization'] ?></b></h1>
                                   <h2 class="animated fadeInDownBig animation-delay-5  crousel-subtitle"><b> HCMUT, Ho Chi Minh City, Vietnam </b></h2>
                                   <ul class="list-unstyled carousel-list">
                                       <li class="animated bounceInLeft animation-delay-11"><i class="fa fa-check"></i><b>Submission - <?php echo $json_a['submission'] ?> </b></li>
                                       <li class="animated bounceInLeft animation-delay-13"><i class="fa fa-check"></i><b>Notification - <?php echo $json_a['acceptance'] ?></b></li>
                                       <li class="animated bounceInLeft animation-delay-15"><i class="fa fa-check"></i><b>Camera Ready - <?php echo $json_a['cameraready'] ?></b></li>
                                       <li class="animated bounceInLeft animation-delay-17"><i class="fa fa-check"></i><b>Registration - <?php echo $json_a['registration'] ?></b></li>
                                   </ul>
                               </div>
                            </div>
                        </div>
                    <!--    <div class="col-md-6 col-sm-5 hidden-xs carousel-img-wrap">
                            <div class="carousel-img">
                                <img src="assets/img/demo/pre.png" class="img-responsive animated bounceInUp animation-delay-3" alt="Image">
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            
        </div>

        <!-- Controls -->
<!--        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a> -->
    </div>
</section> <!-- carousel -->


<section class="margin-bottom">
    <!-- <p class="slogan text-center"> 28 - 30 Nov, 2019, Ho Chi Minh City, Vietnam </p> -->
    <!--<p class="slogan text-center"> Co-located with <span>FDSE2018</span></p> -->
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="content-box box-default animated fadeInUp animation-delay-16">
                    <span class="icon-ar icon-ar-lg icon-ar-round icon-ar-inverse"><i class="fa fa-bullhorn"></i></span>
                    <h4 class="content-box-title"><b>Call for Papers</b></h4>
                    <p> SCSE 2021 - The <strong> First Call for papers </strong> is now open.</p>
                    <a href="./data/CFPsSCSE2021.rtf" class="button button-rounded button-royal">Download</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="content-box box-default animated fadeInUp animation-delay-12">
                    <span class="icon-ar icon-ar-lg icon-ar-round icon-ar-inverse"><i class="fa fa-calendar"></i></span>
                    <h4 class="content-box-title"><b>Important Dates</b></h4>
                    <p>Paper submission deadline: <br> <strong> May 30, 2021 </strong> </p>
                    <a href="/committee/generalChair" class="button button-rounded button-primary">Detail</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="content-box box-default animated fadeInUp animation-delay-10">
                    <span class="icon-ar icon-ar-lg icon-ar-round icon-ar-inverse"><i class="fa fa-users"></i></span>
                    <h4 class="content-box-title"><b>Committees</b></h4>
                    <p>Take a look at our committees for the SCSE 2021! </p>
                    <a href="/committee/generalChair" class="button button-rounded button-caution">Detail</a>
                    <!-- <button type="button" class="btn btn-ar btn-lg btn-info">Check out</button> -->
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="content-box box-default animated fadeInUp animation-delay-14">
                    <span class="icon-ar icon-ar-lg icon-ar-round icon-ar-inverse"><i class="fa fa-comments"></i></span>
                    <h4 class="content-box-title"><b>Topics of Interest</b></h4>
                    <p>The conference will be organized into tracks with different topics.</p>
                    <a href="/committee/generalChair" class="button button-rounded button-highlight">Detail</a>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="section-lines">
    <div class="container">
        <section class="margin-bottom">
            <p class="lead lead-lg text-center primary-color margin-top margin-bottom"> <strong> About the </strong> <?php echo $json_a['fullname']?> <?php echo $json_a['year'] ?> </p>
           <div class="row">
                <div class="col-md-6">
                    <h1 class="no-margin-top"><b>Introduction</b></h1>
                    <p> <?php echo $json_a['description'] ?> </p>

                </div>
                <div class="col-md-6">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                      <div class="panel panel-default">
                        <div class="panel-heading panel-heading-link">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed">
                              <i class="fa fa-bookmark"></i> Conference Venue
                            </a>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                          <div class="panel-body">
                            <p><?php echo $json_a['venue'] ?></p>
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading panel-heading-link">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed">
                              <i class="fa fa-bookmark"></i> Publication
                            </a>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                          <div class="panel-body">
                             <p><?php echo $json_a['publication'] ?></p>
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading panel-heading-link">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed">
                              <i class="fa fa-bookmark"></i> Paper Submission
                            </a>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                          <div class="panel-body">
                             <p><?php echo $json_a['ppsubmission'] ?></p>
                          </div>
                        </div>
                      </div>                      
                    </div>
                </div>


           </div>
        </section>
    <!--    
        <div class="row">
            <div class="col-md-4">
                <div class="home-devices">
                    <h3>The template for all devices</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, sapiente, nam sunt rem beatae architecto cupiditate numquam consectetur dolorum aliquam suscipit adipisci expedita vel quaerat illum aperiam facere inventore officia.</p>
                    <p>Consequuntur sed ipsum eius minima eum velit soluta accusamus omnis maiores modi quae mollitia consectetur adipisci.</p>
                    <ul class="icon-devices">
                        <li class="active"><a href="#desktop" data-toggle="tab"><i class="fa fa-desktop"></i></a></li>
                        <li><a href="#laptop" data-toggle="tab"><i class="fa fa-laptop"></i></a></li>
                        <li><a href="#tablet" data-toggle="tab"><i class="fa fa-tablet"></i></a></li>
                        <li><a href="#mobile" data-toggle="tab"><i class="fa fa-mobile"></i></a></li>
                    </ul>

                </div>
            </div>
            <div class="col-md-8">
                <div class="tab-content">
                    <div class="tab-pane active" id="desktop">
                        <img src="assets/img/demo/mac.png" alt="" class="img-responsive">
                    </div>
                    <div class="tab-pane" id="laptop">
                        <img src="assets/img/demo/macpro.png" alt="" class="img-responsive">
                    </div>
                    <div class="tab-pane" id="tablet">
                        <img src="assets/img/demo/ipad.png" alt="" class="img-responsive">
                    </div>
                    <div class="tab-pane" id="mobile">
                        <img src="assets/img/demo/iphone.png" alt="" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
    -->
    </div>
</section>

<div class="container">
    <section class="margin-bottom">
         <p class="lead lead-lg text-center primary-color"> Topics of Interest </p> 
         <p class="lead lead-lg text-center margin-bottom"> 
            <strong> 
             The topics of interests include but are not limited to the tracks listed as follows:
            </strong>
        </p>

        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="pricign-box animated fadeInUp animation-delay-7">
                    <div class="pricing-box-header">
                        <h2> <br> <strong> Computer Science </strong> </h2>
                        <!-- <p>nisi anim mollit in labore ut esse</p> -->
                    </div>
                    <div class="pricing-box-price">
                        <h3>Track 1</h3>
                    </div>
                    <div class="pricing-box-content">
                        <ul>
                        <?php 
                            for($idx = 0; $idx < count($json_track['cs']); $idx++){
                                echo '<li><i class="fa fa-inbox"></i>'.$json_track['cs'][$idx].'</li>';
                            } 
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="pricign-box pricign-box-pro animated fadeInUp animation-delay-9">
                    <div class="pricing-box-header">
                        <h2> <br> <strong> Computer Engineering </strong> </h2>
                        <!-- <p>nisi anim mollit in labore ut esse</p> -->
                    </div>
                    <div class="pricing-box-price">
                        <h3>Track 2</h3>
                    </div>
                    <div class="pricing-box-content">
                        <ul>
                            <?php 
                                for($idx = 0; $idx < count($json_track['ce']); $idx++){
                                 echo '<li><i class="fa fa-inbox"></i>'.$json_track['ce'][$idx].'</li>';
                                } 
                            ?>
                        </ul>
                    </div>
                    <!--
                    <div class="pricing-box-footer">
                        <a href="#" class="btn btn-ar btn-primary">Detail</a>
                    </div>
                    -->
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="pricign-box animated fadeInUp animation-delay-8">
                    <div class="pricing-box-header">
                        <h2> <strong> Enabling Technologies for Smart City</strong> </h2>
                    </div>
                    <div class="pricing-box-price">
                        <h3>Special Track (Research School of HCMUT & UTS)</h3>
                    </div>
                    <div class="pricing-box-content">
                        <ul>
                        <?php 
                                for($idx = 0; $idx < count($json_track['special']); $idx++){
                                 echo '<li><i class="fa fa-inbox"></i>'.$json_track['special'][$idx].'</li>';
                                } 
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- row -->
    </section>
</div>
<div class="container">
    <section>
        <img src="./assets/img/conf/rev.jpg" alt="" class="img-responsive"/> 
        <p class="slogan text-center"> <span> Full-accepted papers will be published in a special issue of </span>
            REV Journal on Electronics and Communications, published by The Radio and Electronics Association of Vietnam, ISSN: 1859-378X.</p> 
        <!--
        <h1 class="section-title"><b>Sponsors</b></h1>
        <div class="row">
            <div class="col-md-6">
                <div class="bxslider-controls">
                     <span id="bx-prev5"></span>
                     <span id="bx-next5"></span>
                 </div>
                 <ul class="bxslider" id="home-block">
                    <li>
                        <blockquote class="blockquote-color">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                            <footer>Brian Krzanich, Intel CEO</footer>
                        </blockquote>
                    </li>
                    <li>
                        <blockquote class="blockquote-color">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                            <footer>Brian Krzanich, Intel CEO</footer>
                        </blockquote>
                    </li>
                    <li>
                        <blockquote class="blockquote-color">
                            <p>Dolore totam at ea reiciendis suscipit a tempore cum nisi aspernatur nisi alias posuere erat a ante posuere erat a ante ultricies ultricies nisi vel augue quam semper conse erat quuntur.</p>
                            <footer>Sheldon Cooper, Physical Quantum</footer>
                        </blockquote>
                    </li>
                    <li>
                        <blockquote class="blockquote-color">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                            <footer>Brian Krzanich, Intel CEO</footer>
                        </blockquote>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-6"><img src="assets/img/demo/intel.png" alt="" class="img-responsive"></div>
                    <div class="col-md-3 col-sm-3 col-xs-6"><img src="assets/img/demo/microsoft.png" alt="" class="img-responsive"></div>
                    <div class="col-md-3 col-sm-3 col-xs-6"><img src="assets/img/demo/nokia.png" alt="" class="img-responsive"></div>
                    <div class="col-md-3 col-sm-3 col-xs-6"><img src="assets/img/demo/samsung.png" alt="" class="img-responsive"></div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-6"><img src="assets/img/demo/anz.png" alt="" class="img-responsive"></div>
                    <div class="col-md-3 col-sm-3 col-xs-6"><img src="assets/img/demo/maxis.png" alt="" class="img-responsive"></div>
                    <div class="col-md-3 col-sm-3 col-xs-6"><img src="assets/img/demo/sony.png" alt="" class="img-responsive"></div>
                    <div class="col-md-3 col-sm-3 col-xs-6"><img src="assets/img/demo/hp.png" alt="" class="img-responsive"></div>
                </div>
            </div>
        </div>
        -->
   </section>

   <section class="margin-bottom">
       <h1 class="section-title"><b>Gallery</b></h1>
       <div class="bxslider-controls">
            <span id="bx-prev4"></span>
            <span id="bx-next4"></span>
        </div>
        <ul class="bxslider" id="latest-works">
          <li>
            <div class="img-caption-ar">
                <img src="./assets/img/hcmut/hcmut_1.jpg" class="img-responsive" alt="Image">
                <div class="caption-ar">
                    <div class="caption-content">
                        <a href="#" class="animated fadeInDown"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="img-caption-ar">
                <img src="./assets/img/hcmut/hcmut_2.jpg" class="img-responsive" alt="Image">
                <div class="caption-ar">
                    <div class="caption-content">
                        <a href="#" class="animated fadeInDown"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
          </li>
          <li>
            <div class="img-caption-ar">
                <img src="./assets/img/hcmut/hcmut_3.jpg" class="img-responsive" alt="Image">
                <div class="caption-ar">
                    <div class="caption-content">
                        <a href="#" class="animated fadeInDown"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="img-caption-ar">
                <img src="./assets/img/hcmut/hcmut_4.jpg" class="img-responsive" alt="Image">
                <div class="caption-ar">
                    <div class="caption-content">
                        <a href="#" class="animated fadeInDown"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
          </li>
          <li>
            <div class="img-caption-ar">
                <img src="./assets/img/hcmut/hcmut_5.jpg" class="img-responsive" alt="Image">
                <div class="caption-ar">
                    <div class="caption-content">
                        <a href="#" class="animated fadeInDown"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="img-caption-ar">
                <img src="./assets/img/hcmut/hcmut_6.jpg" class="img-responsive" alt="Image">
                <div class="caption-ar">
                    <div class="caption-content">
                        <a href="#" class="animated fadeInDown"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
          </li>
          <li>
            <div class="img-caption-ar">
                <img src="./assets/img/hcmut/hcmut_7.jpg" class="img-responsive" alt="Image">
                <div class="caption-ar">
                    <div class="caption-content">
                        <a href="#" class="animated fadeInDown"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="img-caption-ar">
                <img src="./assets/img/hcmut/hcmut_8.jpg"class="img-responsive" alt="Image">
                <div class="caption-ar">
                    <div class="caption-content">
                        <a href="#" class="animated fadeInDown"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
          </li>

        </ul>
   </section>

</div>



<?php include 'partials/_footer.php' ?>


</div> <!-- boxed -->
</div> <!-- sb-site -->


<div id="back-top">
    <a href="#header"><i class="fa fa-chevron-up"></i></a>
</div>
<!-- Scripts -->
<!-- Compiled in vendors.js -->
<!--
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.cookie.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap-switch.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/slidebars.min.js"></script>
<script src="assets/js/jquery.bxslider.min.js"></script>
<script src="assets/js/holder.js"></script>
<script src="assets/js/buttons.js"></script>
<script src="assets/js/jquery.mixitup.min.js"></script>
<script src="assets/js/circles.min.js"></script>
<script src="assets/js/masonry.pkgd.min.js"></script>
<script src="assets/js/jquery.matchHeight-min.js"></script>
-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js" integrity="sha512-DUC8yqWf7ez3JD1jszxCWSVB0DMP78eOyBpMa5aJki1bIRARykviOuImIczkxlj1KhVSyS16w2FSQetkD4UU2w==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha512-iztkobsvnjKfAtTNdHkGVjAYTrrtlC7mGp/54c40wowO7LhURYl3gVzzcEqGl/qKXQltJ2HwMrdLcNUdo+N/RQ==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.4/owl.carousel.min.js" integrity="sha512-rNeh6QiM0fv82N5V7elDHDIZAmUOB6XCat3a/pNTCP6zFqZJ1yEoCtWVmkp223CsmeJfpyXfPu5z9bWu3cWF0Q==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slidebars/0.10.2/slidebars.min.js" integrity="sha512-oZ58DKJJ/u3wEAaJkYB004Y7QeY/csaOffOA0zYrGj3Yh1xN59bY7Uqn9MCEZ+anryy85psUAPmm+OH/YkS2EA==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.5/jquery.bxslider.min.js" integrity="sha512-RL9+3lg9YMEuSok7ABCDRbm721a3mDhQCSCfByBx+B8FeFwkTBH66OsLeBjRiW3vgm4fIPZwHIFCeWBdtf/p5g==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Buttons/2.0.0/js/buttons.min.js" integrity="sha512-OePhzcaFFXGLdDj/yvKLhWhTtYvnwLDRXk5atU2i0PTjl8AXhWciYNcVwT7o1qF8JYFw/UhIMqeBIQm7IrjCDQ==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.0/imagesloaded.pkgd.min.js" integrity="sha512-HB4QJI9RdFpdJ6NTpN+adbfqe8o2AQNs0rGZZjzlBkFcOcfX2EC5ulKNb8NugNm0Rpo/WxxrfVW94huEO9kErw==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js" integrity="sha512-/bOVV1DV1AQXcypckRwsR9ThoCj7FqTV2/0Bm79bL3YSyLkVideFLE3MIZkq1u5t28ke1c0n31WYCOrO01dsUg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js" integrity="sha512-JRlcvSZAXT8+5SQQAvklXGJuxXTouyq8oIMaYERZQasB8SBDHZaUbeASsJWpk0UUrf89DP3/aefPPrlMR1h1yQ==" crossorigin="anonymous"></script>
<!--<script type="text/javascript" src="assets/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
<script type="text/javascript" src="assets/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>-->


<!-- Syntaxhighlighter -->
<script src="./assets/js/syntaxhighlighter/shCore.js"></script>
<script src="./assets/js/syntaxhighlighter/shBrushXml.js"></script>
<script src="./assets/js/syntaxhighlighter/shBrushJScript.js"></script>

<script src="./assets/js/DropdownHover.js"></script>
<script src="./assets/js/app.js"></script>
<script src="./assets/js/holder.js"></script>
<script src="./assets/js/index.js"></script>

<script src="./assets/js/flipclock.js"></script>

<script type="text/javascript">
            var clock;

            $(document).ready(function() {

                // Grab the current date
                var currentDate = new Date();

                // Set some date in the future. In this case, it's always Jan 1
                //var futureDate  = new Date(currentDate.getFullYear() + 1, 0, 1);
                var futureDate = new Date(2021,10,23);

                // Calculate the difference in seconds between the future and current date
                var diff = futureDate.getTime() / 1000 - currentDate.getTime() / 1000;

                // Instantiate a coutdown FlipClock
                clock = $('.clock').FlipClock(diff, {
                    clockFace: 'DailyCounter',
                    countdown: true,
                    showSeconds: false,
                });
            });
</script>


</body>

</html>