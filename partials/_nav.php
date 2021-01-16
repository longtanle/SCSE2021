<!-- view/layout/_nav.ejs -->

<!-- Nav -->
<nav class="navbar navbar-default navbar-header-full navbar-dark yamm navbar-static-top" role="navigation" id="header">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-bars"></i>
            </button>
            <a id="ar-brand" class="navbar-brand hidden-lg hidden-md hidden-sm" href="/"><%= date.name %> <span> <%= date.year %></span></a>
        </div> <!-- navbar-header -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <!--
        <div class="pull-right">
            <a href="javascript:void(0);" class="sb-icon-navbar sb-toggle-right"><i class="fa fa-bars"></i></a>
        </div>
        -->

        <div class="pull-right">
            <a href="#" class="dropdown-toggle sb-icon-navbar " data-toggle="dropdown"><i class="fa fa-search"></i></a>
            <div class="dropdown-menu dropdown-menu-right dropdown-search-box animated fadeInUp">
                    <form role="form">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-ar btn-primary" type="button">Go!</button>
                            </span>
                        </div><!-- /input-group -->
                    </form>
            </div>
        </div>


        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="index.php"><b>HOME</b></a>
                </li>

                <li>
                    <a href="committee.php" ><b>COMMITTEE</b></a>
                    <!--
                    <ul class="dropdown-menu dropdown-menu-left animated-2x animated fadeIn">
                        <li><a href="/committee/generalChair">General Chairs</a></li>
                        <li><a href="/committee/steeringCommittee">Steering Committee</a></li>
                        <li><a href="/committee/programChair">Program Chairs</a></li>
                        <li><a href="/committee/publicityChair">Publicity Chairs</a></li>
                        <li><a href="/committee/localOrganizing">Local Organizing Committee</a></li>
                        <li><a href="/committee/technicalProgram">Technical Program Committee</a></li>
                    </ul>
                    -->
                </li>                

                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><b>AUTHORS</b></a>
                    <ul class="dropdown-menu dropdown-menu-left animated-2x animated fadeIn">
                        <li><a href="data/CFPsSCSE2021.rtf">Call for Papers </a></li>
                        <li><a href="submission.php">Submission Guidelines</a></li>
                    </ul>
                </li>    

                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><b>PROGRAM</b></a>
                    <ul class="dropdown-menu dropdown-menu-left animated-2x animated fadeIn">
                        <li><a href="track.php">Tracks & Topics</a></li>
                        <li><a href="coming.php">Accepted Papers </a></li>
                        <li><a href="coming.php">Tentative Program </a></li>

                    </ul> 
                </li>                

                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><b>REGISTRATION</b></a>
                    <ul class="dropdown-menu dropdown-menu-left animated-2x animated fadeIn">
                        <li><a href="coming.php">Registration Fee </a></li>
                        <li><a href="coming.php">Policies and Procedures </a></li>
                    </ul> 
                </li>         

                <li>
                    <a href="coming.php"><b>SPONSORS</b></a>
                    <!--
                    <ul class="dropdown-menu dropdown-menu-left animated-2x animated fadeIn">
                        <li><a href="/comingsoon">Exhibitors and Publisher </a></li>                      
                        <li><a href="/comingsoon">List of Sponsors</a></li>
                    </ul> 
                    -->
                </li>  

                <li>
                    <a href="coming.php" ><b>CONTACT</b></a>
                    <!--
                    <ul class="dropdown-menu dropdown-menu-left animated-2x animated fadeIn">
                        <li><a href="/comingsoon">SCSE Series </a></li>                      
                        <li><a href="/comingsoon">FAQ & Support</a></li>
                        <li><a href="/comingsoon">Visa</a></li>                        
                    </ul> 
                    -->
                </li>      

             </ul>
        </div><!-- navbar-collapse -->
    </div><!-- container -->
</nav>