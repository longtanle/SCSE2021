<!-- views/index.ejs -->
<?php

$string = file_get_contents("data/general.json");
$track = file_get_contents("data/track.json");
$committee = file_get_contents("data/chair.json");
if ($string === false) {
    // deal with error...
}

$json_a = json_decode($string, true);
$json_track = json_decode($track, true);
$json_committee = json_decode($committee , true);
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

<header class="main-header">
    <div class="container">
        <h1 class="page-title">Submission Guidelines</h1>

        <ol class="breadcrumb pull-right">
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Authors</a></li>
            <li class="active">Submission Guidelines</li>
        </ol>
    </div>
</header>

<div class="container">
    <section class="css-section">
        <div class="row">
            <h2 class="section-title">Paper Submission</h2>
            <div class="panel panel-border">
                <div class="panel-body">
                    <h3><small> <?php echo $json_a['ppsubmission'] ?> </small> </h3>
                </div>
            </div>
        </div>
    </section>

    <section class="css-section">
        <div class="row">
            <h2 class="section-title">Important Dates</h2>
            <div class="col-md-6">
                <div class="list-group">
                    <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading"><strong> Submission </strong> </h4>
                    <h3 class="list-group-item-text"> <?php echo $json_a['submission'] ?> </h3>
                    </a>
                    <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading"><strong> Notification of Acceptance </strong> </h4>
                    <h3 class="list-group-item-text"><?php echo $json_a['acceptance'] ?></h3>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="list-group">
                    <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading"><strong> Camera Ready</strong> </h4>
                    <h3 class="list-group-item-text"><?php echo $json_a['cameraready'] ?></h3>
                    </a>
                    <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading"><strong>Registration</strong></h4>
                    <h3 class="list-group-item-text"><?php echo $json_a['registration'] ?></h3>
                    </a>
                </div>
            </div>
        </div>
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