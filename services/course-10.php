<?php

$title = 'Web Page Design & Development - Frontend - Verbum Networks Limited';
include_once '../public/include/header.php';

?>

<!-- start page-title -->
<section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <h2>Web Page Design & Development - Frontend</h2>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<!-- end page-title -->


<!-- start blog-single-section -->
<section class="blog-single-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-md-8">
                <div class="blog-content">
                    <div class="post format-standard-image">
                        <div class="entry-media">
                            <img src="courseimage/2.jpg" alt="">
                        </div>
                        <p></p>
                        <h2>Web Page Design & Development - Frontend</h2>
                        <p>
                        <p>Learn to design &amp; develop websites using Web design tools such as:</p>
                        <ul>
                            <li>HTML</li>
                            <li>Macromedia Dreamweaver</li>
                            <li>CSS</li>
                            <li>JavaScripting</li>
                            <li>Learn web hosting</li>
                        </ul>

                    </div>
                    <div class="more-posts">
                        <div class="previous-post">
                            <a href="course-9.php">
                                <span class="post-control-link">For Whom</span>
                                <span class='post-name'>Individuals interested in Web design, development and Web applications.
                                    Individuals interested in digital marketing.</span>
                            </a>
                        </div>
                        <div class='next-post'>
                            <a href="course-11.php">
                                <span class='post-control-link'>Duration</span>
                                <span class='post-name'> 6 Weeks</span> </a>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col col-md-4">
                <div class="blog-sidebar">


                <?php
                include_once 'courses-aside.php';
                ?>


                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end blog-single-section -->


<?php

include_once '../public/include/footer.php';

?>