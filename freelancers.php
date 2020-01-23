<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Freelancers</title>
    <link rel="shortcut icon" href="../images/icon.png"/>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/colors/green.css" id="colors">


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
        $freelancers = $freelancer->getFreelancers();
    } catch (Exception $e) {
        echo "<h1>{$e->getMessage()}</h1>";
    }
    ?>

    <!-- Titlebar
    ================================================== -->
    <div id="titlebar">
        <div class="container">
            <div class="ten columns">
                <span>Work with the best professionals:</span>
                <h2>They are just a click away!</h2>
            </div>

            <div class="six columns">
                <a href="#" class="button">Request a quote, It’s Free!</a>
            </div>

        </div>
    </div>


    <!-- Content
    ================================================== -->
    <div class="container">
        <!-- Recent Jobs -->
        <div class="eleven columns">
            <div class="padding-right">

                <ul class="resumes-list alternative">
                    <?php foreach ($freelancers as $freelancer) : ?>
                        <li><a href="profile.php?freelancer=<?php echo $freelancer['id'] ?>">
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
                            </a>
                            <div class="clearfix"></div>
                        </li>
                    <?php endforeach; ?>


                </ul>
                <div class="clearfix"></div>

                <div class="pagination-container">
                    <nav class="pagination">
                        <ul>
                            <li><a href="#" class="current-page">1</a></li>
                            <li><a href="#">2</a></li>
                            <li class="blank">...</li>
                            <li><a href="#">4</a></li>
                        </ul>
                    </nav>

                    <nav class="pagination-next-prev">
                        <ul>
                            <li><a href="#" class="prev">Previous</a></li>
                            <li><a href="#" class="next">Next</a></li>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>


        <!-- Widgets -->
        <div class="five columns">

            <!-- Sort by -->
            <div class="widget">
                <h4>Sort by</h4>

                <!-- Select -->
                <select data-placeholder="Choose Category" class="chosen-select-no-single">
                    <option selected="selected" value="recent">Relevance</option>
                    <option value="">Hourly Rate – Highest First</option>
                    <option value="">Hourly Rate – Lowest First</option>
                </select>

            </div>

            <!-- Skills -->
            <div class="widget">
                <h4>Skills</h4>

                <!-- Select -->
                <form action="#" method="get">
                    <select data-placeholder="Select Skills" class="chosen-select" multiple>
                        <option value="">Adobe Photoshop</option>
                        <option value="">PHP</option>
                        <option value="">HTML</option>
                        <option value="">CSS</option>
                        <option value="">JavaScript</option>
                        <option value="">jQuery</option>
                        <option value="">MySQL</option>
                        <option value="">WordPress</option>
                    </select>
                    <div class="margin-top-15"></div>
                    <button class="button">Filter</button>
                </form>
            </div>

            <!-- Location -->
            <div class="widget">
                <h4>Location</h4>
                <form action="#" method="get">
                    <input type="text" placeholder="State / Province" value=""/>
                    <input type="text" placeholder="City" value=""/>

                    <input type="text" class="miles" placeholder="Miles" value=""/>
                    <label for="zip-code" class="from">from</label>
                    <input type="text" id="zip-code" class="zip-code" placeholder="Zip-Code" value=""/><br>

                    <button class="button">Filter</button>
                </form>
            </div>


        </div>
        <!-- Widgets / End -->


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