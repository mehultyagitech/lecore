<?php
    $title = " HOME | 100Plywood";
     $meta ="HOME | 100Plywood";
   
  ?>
<?php include('inc/header.php')?>






        <!-- Page Banner Section Start -->
        <div class="page-banner-section section bg-image" data-bg="assets/images/bg/breadcrumb.png">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="page-banner text-left">
                            <h2>Contact</h2>
                            <ul class="page-breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li>Contact</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Page Banner Section End -->
        <!--Contact section start-->
        <div class="conact-section section pt-85 pt-lg-65 pt-md-55 pt-sm-45 pt-xs-35  pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
            <div class="container">

                <div class="row">
                    <div class="col-12">
                        <div class="contact-form-wrap">
                            <h3 class="contact-title">Write Us</h3>
                            <form id="contact-form" action="https://demo.hasthemes.com/nelson-preview/nelson/assets/php/mail.php" method="post">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="name-fild-padding mb-sm-30 mb-xs-30">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="contact-form-style mb-20">
                                                        <label class="fild-name">Name</label>
                                                        <input name="name" placeholder="" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="contact-form-style mb-20">
                                                        <label class="fild-name">Email</label>
                                                        <input name="email" placeholder="" type="email">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="check-box">
                                                        <input type="checkbox" id="create_account">
                                                        <label for="create_account">I am not a robot</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="contact-form-style bl">
                                            <label class="fild-name pl-15">Message</label>
                                            <textarea class="pl-15" name="message" placeholder="Type your message here.."></textarea>
                                            <button class="btn" type="submit"><span>Send message</span></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--Contact section end-->
        <!--Contact Map section start-->
        <div class="contact-map-section section">
            <div id="contact-map" class="contact-map"></div>
        </div>
        <!--Contact Map section End-->
        <!-- Newsletter Section Start -->
        <div class="newsletter-section section bg-gray-two pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-95 pb-lg-75 pb-md-65 pb-sm-60 pb-xs-50">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="newsletter-content">
                            <h2>Subscribe Our Newsletter</h2>
                            <p>Subscribe Today for free and save 10% on your first purchase.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="newsletter-wrap">
                            <div class="newsletter-form">
                                <form id="mc-form" class="mc-form">
                                    <input type="email" placeholder="Enter Your Email Address Here..." required>
                                    <button type="submit" value="submit">SUBSCRIBE!</button>
                                </form>

                            </div>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div>
                            <!-- mailchimp-alerts end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter Section End -->




<?php include('inc/footer.php')?>