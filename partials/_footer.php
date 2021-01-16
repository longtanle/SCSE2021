<!-- views/layout/_footer.ejs -->

<!-- Footer -->
<aside id="footer-widgets">
    <div class="container">
        <div class="row">
                   
            <div class="col-md-3">
                <div class="footer-widget">
                    <h3 class="footer-widget-title"><?php echo $json_a['name'] ?> <span> <?php echo $json_a['year'] ?>  </span></h3>
                    <div class="row">
                        <div class="col-lg-8 col-md-6 col-sm-3 col-xs-6">
                            <a href="#" class="thumbnail"><img src="./assets/img/logo_hcmut.png" class="img-responsive" alt="Image"></a>
                        </div>
                        <!--
                        <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6">
                            <a href="#" class="thumbnail"><img src="/assets/img/demo/wf2.jpg" class="img-responsive" alt="Image"></a>
                        </div>
                    -->
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <h3 class="footer-widget-title">Contact</h3>
                <p> <strong> Address: </strong> <?php echo $json_a['address'] ?></p>
                <p> <strong> Phone: </strong> <?php echo $json_a['phone'] ?></p>
                <p> <strong> Fax: </strong> <?php echo $json_a['fax'] ?></p>
                <p> <strong> Email: </strong> <?php echo $json_a['email'] ?></p>
                <p> <strong> Website: </strong> <?php echo $json_a['web'] ?></p>
            </div>
            
            <div class="col-md-3">
                <div class="footer-widget">
                    <h3 class="footer-widget-title">Sitemap</h3>
                    <ul class="list-unstyled three_cols">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="committee.php">Commitee</a></li>
                        <li><a href="submission.php">Submission</a></li>
                        <li><a href="track.php">Topics & Tracks</a></li>
                        <li><a href="coming.php">Program</a></li>
                        <li><a href="coming.php">Authors</a></li>
                        <li><a href="coming.php">Sponsor</a></li>
                        <li><a href="coming.php">Contact</a></li>
                    </ul>
                </div>
            </div>

        </div> <!-- row -->
    </div> <!-- container -->
</aside> <!-- footer-widgets -->
<footer id="footer">
    <p>&copy; 2021 <a href="#">The CSE Faculty, HCMUT</a>, inc. All rights reserved.</p>
</footer>
