<?php
include_once 'header.php';
?>


<!-- Section 1 -->
<div id="wholeContainer" class="WholeContainer">
    <?php
    include_once 'indexDecor.php';
    ?>
    <div class="Sec1Container">

        <div class="writeUps">
            <p>The Future of Networking</p>
            <br>
            <h6> Network more efficiently. Join us now and stay up to date on our launch.
            </h6>
            <button onclick="document.location='waitlistRegister.php' " class="signup">Get Started Free</button>

        </div>
        <div class="animationGrid">
            <img src="icons/animationGridPhoto.png" alt="">
        </div>


    </div>
    <!-- Section 1 End -->
    <!-- Section 1_2-->
    <div class="section1_2">
        <div class="section1_2Container">
            <div class="section1_2Container_header">
                <h3>Connect with just a tap</h3>
            </div>
            <div class="section1_2Container_content">
                <img src="icons/section1_2Img.svg" alt="">
            </div>
            <div class="section1_2Container_footer">
                <p>Connect with our smart business cards. Just tap the card on a phone and connect. This way you actually have time to network!</p>
            </div>
        </div>
    </div>
    <!-- Section 1_2 End -->
    <!-- Section 1_2-->
    <div class="section1_3">
        <div class="section1_3Container">
            <div class="section1_3Container_header">
                <h3>An intelligent networking assistant</h3>
            </div>
            <div class="section1_3Container_content">
                <div class="section1_3Container_content_image">
                    <img src="icons/sec1_3 Circle.svg" alt="">
                </div>
                <div class="section1_3Container_content_writeUp">
                    <p>TapWorking observes networking trends across the board and identifies your specific needs. The Tap intelligent assistent will curate a personalized networking journey for you while considering your busy schedule.</p>
                </div>
                <div class="section1_3Container_content_icons">
                    <img src="icons/sec1_3Icon 1.svg" alt="">
                    <img src="icons/sec1_3Icon 2.svg" alt="">
                    <img src="icons/sec1_3Icon 3.svg" alt="">


                </div>
            </div>
        </div>
    </div>
    <!-- Section 1_2 End -->

    <!-- Section 2 -->
    <div class="section2">
        <div class="section2Pre_container">
            <h2>Control your own identity</h2>
            <p>Networking through our Tap cards allows you to share only the information you want to. Express your identity by fully customizing your profile through our widgets with infinate possiblities. We don’t care if you work in finance or you are a musicial, we have something for you.</p>
        </div>
        <div class="section2container hidden">
            <div class="sec2Label">
                <li class="up-button hidden"><i class="fas fa-arrow-up"></i></li>
                <div id="nonResponsive" class="sec2LabelLink">
                    <li class="current-link">Contact</li>
                    <li>Show Off</li>
                    <li>Custom Widgets</li>
                    <li>Personalise Colors</li>

                </div>
                <li class="down-button hidden"><i class="fas fa-arrow-down"></i></li>
            </div>
            <div class="sec2image">
                <div class="displayBoxImage">
                    <div class="displayBoxImageAgain">
                        <img class="current-image" src="icons/PhoneSec2/AddContactPhone.svg" alt="">
                        <img class=" vanish-image  " src="icons/PhoneSec2/ShowOffPhone.svg" alt="">
                        <img class=" vanish-image " src="icons/PhoneSec2/CustomWidgPhone.svg" alt="">
                        <img class=" vanish-image " src="icons/PhoneSec2/Personalize Phone New Version.png" alt="">

                    </div>

                </div>



            </div>
            <div class="sec2writeUp">
                <div class="displayBoxWriteUp">
                    <div class="displayBoxWriteUpAgain">
                        <div class="contact anim current-image">
                            <h2>Add Contact Information</h2>
                            <p>Add your basic contact information such as your name, phone number, email, and profile photo, along
                                with your business
                                logo and a photo or video cover photo.</p>
                        </div>
                        <div class="works anim vanish-image">

                            <h2>Show off your works</h2>
                            <p>Add direct links to any URLs, such as your website, a presentation, and more.</p>
                        </div>
                        <div class="widget anim vanish-image">

                            <h2>Custom Widgets</h2>
                            <p>Add and customize your widgets to show any information you want, such as payment profiles or resume
                                uploads.</p>
                        </div>
                        <div class="colors anim vanish-image">

                            <h2>Personalize your brand colors</h2>
                            <p>Add colors to your profile page to match those of your business or personal brand.</p>
                        </div>

                    </div>


                </div>


            </div>
        </div>
        <div class="sec2ResponsiveContainer responsiveHidden">
            <div class="slider-container">
                <div class="slide active"> <img src="icons/PhoneSec2/AddContactPhone.png" alt="" />
                </div>
                <div class="slide "> <img src="icons/PhoneSec2/ShowOffPhone.png" alt="" />
                </div>
                <div class="slide "> <img src="icons/PhoneSec2/CustomWidgPhone.png" alt="" />
                </div>
                <div class="slide "> <img src="icons/PhoneSec2/Personalize Phone New Version.png" alt="" />
                </div>






            </div>
            <div class="slider-navPoint">
                <li><i class="fas fa-circle slider-navPoint-Point active"></i></li>
                <li><i class=" fas fa-circle slider-navPoint-Point"></i></li>
                <li><i class="fas fa-circle slider-navPoint-Point"></i></li>
                <li><i class="fas fa-circle slider-navPoint-Point"></i></li>
            </div>
            <div class="slider-writeUp">
                <div class="slider-writeUp-writeUp active">
                    <h2>Add Contact Information</h2>
                    <h4>Add your basic contact information such as your name, phone number, email, and profile photo, along with your business logo and a photo or video cover photo.</h4>
                </div>
                <div class="slider-writeUp-writeUp">
                    <h2>Show off your works</h2>
                    <h4>Add direct links to any URLs, such as your website, a presentation, and more.</h4>
                </div>
                <div class="slider-writeUp-writeUp">
                    <h2>Custom Widgets</h2>
                    <h4>Add and customize your widgets to show any information you want, such as payment profiles or resume
                        uploads.</h4>
                </div>
                <div class="slider-writeUp-writeUp">
                    <h2>Personalize your brand colors</h2>
                    <h4>Add colors to your profile page to match those of your business or personal brand.</h4>
                </div>

            </div>
            <!-- <div class="slider-container">
                
            </div> -->
        </div>
    </div>


    <!-- Section 2 end -->





    <!--Sec3 End-->

    <!-- Section 4 -->
    <div class="section4">
        <div class="Sec4Container">
            <div class="sec4Writeup">
                <h3>Never loose track of your network</h3>
                <p> Have you ever connected with someone and misplaced their business card or forgot to follow up? We get it. Leave it to us, never loose someones contact or forget to follow up because we will remind you. </p>
            </div>
            <div class="sec4image">
                <img class="desktopDashboard hidden" src="icons/section4 Dashboard.png">
                <img class="phoneDashboard responsiveHidden" src="icons/Phone Dashboard.svg" alt="">
            </div>
        </div>

    </div>

    <!-- Section 4 End -->



    <div class="section5_2">
        <div class="sec5_2Content">
            <h1>Help the environment</h1>
            <p>Our Tap cards are made of 100% recycled materials so we can network better and help the environment at the same time.</p>
            <h1>88% </h1>
            <h3>of all paper business cards are trown out in the first week of receiving them. </h3>
            <h1 id="counter" class="counter-count">0</h1>
            <h3>trees are cut down each year to produce paper business cards.</h3>
        </div>
       
    </div>

    <!--Sec5 End-->

    <!-- Sec6 Start -->
    <div class="section1_3">
        <div class="section6Container">
            <div class="section1_3Container_header">
                <h3>How to get started</h3>
            </div>
            <div class="section6Container_content">
                <div class="section1_3Container_content_writeUp">
                    <p>The first 1000 members to join us will receive a free Tap card and will be given acccess to all our premium features for a limited time. Get on our waitlist to secure your spot! </p>
                </div>
                <div class="section6Container_content_icons">
                    <img src="icons/sec6Icon1.svg" alt="">
                    <img src="icons/sec6Icon2.svg" alt="">
                    <img src="icons/sec6Icon3.svg" alt="">
                </div>
                <button onclick="document.location='waitlistRegister.php' " class="signup">Get Started Free</button>


            </div>
        </div>
    </div>
    <!-- Sec6 End -->
    <?php

    include_once 'footer.php';

    ?>
</div>


<script src="js/sec2Animation.js"></script>
<script src="js/navBarRes.js"></script>

<script src="js/sec2AnimationResponsiveSlider.js"></script>


<script src="js/windowScroll.js"></script>
<script src="js/sec5_2Animation.js"></script>

</body>

</html>