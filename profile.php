<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Work Scout</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/colors/green.css" id="colors">

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>
<div id="wrapper">


    <!-- Header
    ================================================== -->
    <?php
    include "headerc.php";

    include_once "config/Database.php";
    include_once "model/Freelancer.php";

    $db = new Database();
    $conn = $db->connect();

    try {
        $freelancer = new Freelancer($conn);
        $freelancers = $freelancer->getFreelancerById();
    } catch (Exception $e) {
        echo "<h1>{$e->getMessage()}</h1>";
    }
    ?>


    <!-- Titlebar
    ================================================== -->
    <div id="titlebar" class="resume">
        <div class="container">
            <div class="ten columns">
                <div class="resume-titlebar">
                    <img src="images/resumes-list-avatar-01.png" alt="">
                    <div class="resumes-list-content">
                        <h4><?php echo $freelancer['name']; ?> <span><?php echo $freelancer['title']; ?></span></h4>
                        <span><i class="fa fa-map-marker"></i> <?php echo $freelancer['location']; ?></span>
                        <span><i class="fa fa-money"></i> <?php echo $freelancer['pricing']; ?></span>
                        <p><?php echo $freelancer['about']; ?></p>

                        <div class="skills">
                            <?php foreach (explode(',', $freelancer['skills']) as $skill): ?>
                                <span><?php echo $skill?></span>
                            <?php endforeach; ?>
                        </div>
                        <div class="clearfix"></div>

                    </div>
                </div>
            </div>

            <div class="six columns">
                <div class="two-buttons">

                    <a href="#small-dialog" class="popup-with-zoom-anim button"><i class="fa fa-envelope"></i> Send
                        Message</a>

                    <div id="small-dialog" class="zoom-anim-dialog mfp-hide apply-popup">
                        <div class="small-dialog-headline">
                            <h2>Send Message to John Doe</h2>
                        </div>

                        <div class="small-dialog-content">
                            <form action="#" method="get">
                                <input type="text" placeholder="Full Name" value=""/>
                                <input type="text" placeholder="Email Address" value=""/>
                                <textarea placeholder="Message"></textarea>

                                <button class="send">Send Application</button>
                            </form>
                        </div>

                    </div>
                    <a href="#" class="button dark"><i class="fa fa-star"></i> Bookmark This Resume</a>


                </div>
            </div>

        </div>
    </div>


    <!-- Content
    ================================================== -->
    <div class="container">
        <!-- Recent Jobs -->
        <div class="eight columns">
            <div class="padding-right">

                <h3 class="margin-bottom-15">About Me</h3>

                <p class="margin-reset">
                    <?php echo $freelancer->about; ?>
                </p>

            </div>
        </div>


        <!-- Widgets -->
        <div class="eight columns">

            <h3 class="margin-bottom-20">Education</h3>

            <!-- Resume Table -->
            <dl class="resume-table">
                <dt>
                    <small class="date">2012 - 2015</small>
                    <strong>Bsc Computing at College of West Anglia</strong>
                </dt>
                <dd>
                    <p>Captain, why are we out here chasing comets? Maybe we better talk out here; the observation
                        lounge has turned into a swamp. Ensign Babyface!</p>
                </dd>


                <dt>
                    <small class="date">2006 - 2010</small>
                    <strong>GCSE something at King Edward 7th</strong>
                </dt>
                <dd>
                    <p>Captain, why are we out here chasing comets? Maybe we better talk out here; the observation
                        lounge has turned into a swamp. Ensign Babyface!</p>
                </dd>


                <dt>
                    <small class="date">2004 - 2006</small>
                    <strong>Test 2 at Test</strong>
                </dt>
                <dd>
                    <p>Phasellus vestibulum metus orci, ut facilisis dolor interdum eget. Pellentesque magna sem,
                        hendrerit nec elit sit amet, ornare efficitur est.</p>
                </dd>

            </dl>

        </div>

    </div>


    <!-- Footer
    ================================================== -->
    <?php
    include "footerc.php";
    ?>
    <!-- Wrapper / End -->


    <!-- Scripts
    ================================================== -->
    <script src="scripts/jquery-2.1.3.min.js"></script>
    <script src="scripts/custom.js"></script>
    <script src="scripts/jquery.superfish.js"></script>
    <script src="scripts/jquery.themepunch.tools.min.js"></script>
    <script src="scripts/jquery.themepunch.revolution.min.js"></script>
    <script src="scripts/jquery.themepunch.showbizpro.min.js"></script>
    <script src="scripts/jquery.flexslider-min.js"></script>
    <script src="scripts/chosen.jquery.min.js"></script>
    <script src="scripts/jquery.magnific-popup.min.js"></script>
    <script src="scripts/waypoints.min.js"></script>
    <script src="scripts/jquery.counterup.min.js"></script>
    <script src="scripts/jquery.jpanelmenu.js"></script>
    <script src="scripts/stacktable.js"></script>
    <script src="scripts/slick.min.js"></script>
    <script src="scripts/headroom.min.js"></script>


    <!-- Style Switcher
    ================================================== -->


</body>
</html>