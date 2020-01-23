<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-117689748-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-117689748-1');
</script>


<?php
//require_once '../rohwess_upload_4/bootstrap.php';
//require_once '../rohwess_upload_4/connection.php';
////require_once "admin/bootstrap2.php";
//?>

<header class="sticky-header">
    <div class="container">
        <div class="sixteen columns">

            <!-- Logo -->
            <div id="logo">
                <h1><a href="https://deloway.com"><img src="../images/deloway.png" alt="deloway"/></a></h1>
            </div>

            <!-- Menu -->
            <nav id="navigation" class="menu">
                <ul id="responsive">

                    <li><a href="../learning">LEARNING</a>
                        <ul>
                            <li><a href="../learning">Academic Resources</a></li>
                            <li><a href="../browse-resources">Past Papers</a></li>
                            <li><a href="../explore/academics">Student Guides</a></li>
                            <li><a href="../explore/study-guides">Study Guides</a></li>
                            <li><a href="../explore/careers">Career Guides</a></li>
                        </ul>
                    </li>

                    <li><a href="schools">A-Z SCHOOLS</a>
                        <ul>
                            <li><a href="../schools">All Schools</a></li>
                            <li>
                                <a href="https://www.deloway.com/schools/school-search.php?public=Public&univ=University">Public
                                    Universities</a></li>
                            <li>
                                <a href="https://www.deloway.com/schools/school-search.php?public=Private&univ=University">Private
                                    Universities</a></li>
                        </ul>
                    </li>

                    <li><a href="../freelance">FREELANCING</a>
                        <ul>
                            <li><a href="../freelance">Get a Freelancer</a></li>
                            <li><a href="../academic-help">Academic Help</a></li>
                            <li><a href="index.php">Get a freelancer</a></li>
                            <li><a href="business-cards.php">Freelancer Details</a></li>
                            <li><a href="freelancers.php">Freelancers</a></li>
                            <li><a href="profile.php">Profile</a></li>
                            <li><a href="add-job.php">Post Job</a></li>
                            <li><a href="become-a-freelancer.php">Become-a-freelancer</a></li>
                        </ul>
                    </li>

                    <li><a href="../market" target="_blank">BACK2SCHOOL </a></li>

                </ul>


<!--                --><?php //if (isAuthenticated()): ?>
<!--                    <ul class="float-right">-->
<!---->
<!--                        <li><a href="../user.php"><i class="fa fa-user"></i>Account | --><?php //echo user('first_name'); ?>
<!--                            </a></li>-->
<!--                        <li><a href="../rohwess_upload_4/logout.php"><i class="fa fa-logout"></i> Log Out</a></li>-->
<!--                    </ul>-->
<!--                --><?php //else: ?>
<!--                    <ul class="float-right">-->
<!--                        <li><a href="../reg"><i class="fa fa-lock"></i> Log In</a></li>-->
<!--                        <li><a href="../sign-up"><i class="fa fa-user"></i> Sign Up</a></li>-->
<!---->
<!--                    </ul>-->
<!--                --><?php //endif; ?>

            </nav>

            <!-- Navigation -->
            <div id="mobile-navigation">
                <a href="#menu" class="menu-trigger"><i class="fa fa-reorder"></i> Menu</a>
            </div>

        </div>
    </div>
</header>
<div class="clearfix"></div>