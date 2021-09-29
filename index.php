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
            <h6>Network more efficiently and meaningfully. Join us now and stay up to date on our launch.</h6>
            <button onclick="document.location='waitlistRegister.php' " class="signup">I want better networking now</button>

        </div>
        <div class="animationGrid">
            <div class="gradEclipse"></div>
            <div class="gradPlanet"></div>
            <img src="icons/animationGridPhotoNoGrad.png" alt="">
        </div>


    </div>
    <!-- Section 1 End -->
    <!-- Section 1_2-->
    <div class="section1_2">

        <div class="section1_2Container">
            <div class="indexDecor hidden">
                <img id="ImgDec1Pyr" src="icons/index Decor/image 12IndexDecor.svg" alt="">
                <img id="ImgDec2Cone" src="icons/index Decor/image 22IndexDecor.svg" alt="">
                <img id="ImgDec3Cyl" src="icons/index Decor/image 30IndexDecor.svg" alt="">

            </div>
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
                <h3>Tap Intelligent assistant</h3>
            </div>
            <div class="section1_3Container_content">
                <div class="section1_3Container_content_image">
                    <video autoplay loop width="250px">
                        <source src="icons/Tapnetwork phone animation/tapWork animation.mp4" type="video/mp4"> 
                    </video>
                </div>
                <div class="section1_3Container_content_writeUp">
                    <p>TapWorking AI recognizes and adresses trends across the industry, creating a unique journey for you in 3 steps. </p>
                </div>
                <div class="section1_3Container_content_icons">
                    <div class="section1_3Container_content_icons_box">
                        <img src="icons/sec1_3Icon 3.svg" alt="">
                        <p>Identify your networking needs</p>
                    </div>

                    <div class="section1_3Container_content_icons_box">
                        <img src="icons/sec1_3Icon 2.svg" alt="">
                        <p>Curate a personalized networking strategy</p>
                    </div>

                    <div class="section1_3Container_content_icons_box">
                        <img src="icons/sec1_3Icon 1.svg" alt="">
                        <p>Fits automatically into your schedule</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section 1_2 End -->

    <!-- Section 2 -->
    <div class="section2">
        <div class="section2Pre_container">
            <h2>Control your own identity</h2>
            <p>Networking through our Tap cards allows you to share only and all the information you want. Express your identity by fully customizing your profile through our widgets with infinite possiblities. We don’t care what line of work you do, show everyone who you are.</p>
        </div>
        <div class="section2container hidden">
            <div class="sec2Label">
                <li class="up-button hidden"><i class="fas fa-arrow-up"></i></li>
                <div id="nonResponsive" class="sec2LabelLink">
                    <li class="current-link">Create a unique profile</li>
                    <li>Streamline your connections</li>
                    <li>Custom Widgets</li>
                    <li>Down to the detail</li>

                </div>
                <li class="down-button hidden"><i class="fas fa-arrow-down"></i></li>
            </div>
            <div class="sec2image">
                <div class="displayBoxImage">
                    <div class="displayBoxImageAgain">
                        <img class="current-image" src="icons/PhoneSec2/AddContactPhone(white).png" alt="">
                        <img class=" vanish-image  " src="icons/PhoneSec2/ShowOffPhone(white).png" alt="">
                        <img class=" vanish-image " src="icons/PhoneSec2/CustomWidgPhone(white).png" alt="">
                        <img class=" vanish-image " src="icons/PhoneSec2/PersonalizePhone(white).png" alt="">

                    </div>

                </div>



            </div>
            <div class="sec2writeUp">
                <div class="displayBoxWriteUp">
                    <div class="displayBoxWriteUpAgain">
                        <div class="contact anim current-image">
                            <h2>Create a unique profile</h2>
                            <p>Tell people exactly how you are. Customize your name, phone number, email, and profile photo, along with your business logo and a photo or video cover photo. </p>
                        </div>
                        <div class="works anim vanish-image">

                            <h2>Streamline your connections</h2>
                            <p>Transition between your chosen links URL seamsly. Add direct links to any URLs, such as your website, a presentation, and more.</p>
                        </div>
                        <div class="widget anim vanish-image">

                            <h2>Custom Widgets</h2>
                            <p>With custom widgets, show and hide any information you want. From payment profiles to resume uploads. </p>
                        </div>
                        <div class="colors anim vanish-image">

                            <h2>Down to the detail</h2>
                            <p>Add colors that match your business or personal brand. Control everything your connections sees.</p>
                        </div>

                    </div>


                </div>


            </div>
        </div>
        <div class="sec2ResponsiveContainer responsiveHidden">
            <div class="slider-container">
                <div class="slide active"> <img src="icons/PhoneSec2/AddContactPhone(white).png" alt="" />
                </div>
                <div class="slide "> <img src="icons/PhoneSec2/ShowOffPhone(white).png" alt="" />
                </div>
                <div class="slide "> <img src="icons/PhoneSec2/CustomWidgPhone(white).png" alt="" />
                </div>
                <div class="slide "> <img src="icons/PhoneSec2/PersonalizePhone(white).png" alt="" />
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
                    <h2>Create a unique profile</h2>
                    <p>Tell people exactly how you are. Customize your name, phone number, email, and profile photo, along with your business logo and a photo or video cover photo. </p>
                </div>
                <div class="slider-writeUp-writeUp">
                    <h2>Streamline your connections</h2>
                    <p>Transition between your chosen links URL seamsly. Add direct links to any URLs, such as your website, a presentation, and more.</p>
                </div>
                <div class="slider-writeUp-writeUp">
                    <h2>Custom Widgets</h2>
                    <p>With custom widgets, show and hide any information you want. From payment profiles to resume uploads. </p>
                </div>
                <div class="slider-writeUp-writeUp">
                    <h2>Down to the detail</h2>
                    <p>Add colors that match your business or personal brand. Control everything your connections sees.</p>
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
                <h3>Never loose track of your connections</h3>
                <p>Do you ever meet with someone and misplaced their business card or forgot to follow up. We get it. Leave it to us, never loose someones contact or forget to follow up.</p>
            </div>
            <div class="sec4image">
                <img class="desktopDashboard hidden" src="icons/section4 Dashboard.png">
                <img class="phoneDashboard responsiveHidden" src="icons/Phone Dashboard(white).png" alt="">
            </div>
        </div>

    </div>

    <!-- Section 4 End -->



    <div class="section5_2">
        <div class="sec5_2Content">
            <h1>Help the environment</h1>
            <p>Our Tap cards are made of 100% recycled materials so we can network better and help the environment at the same time.</p>
            <div class="sec5_2Content_middle">
                <h2 id="counter" class="counter-count">0</h2>
                <p>tress are cut down each year to produce traditional business cards.</p>
            </div>

            <div class="sec5_2Content_bottom">
                <h2>88% </h2>
                <p>of all paper business cards are thrown out in the first week of receiving them. </p>

            </div>


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
                <div class="section1_3Container_content_icons section6Container_content_icons ">
                    <div class="section1_3Container_content_icons_box">
                        <img src="icons/sec6Icon1.svg" alt="">
                        <p>Register and create your profile</p>
                    </div>

                    <div class="section1_3Container_content_icons_box">
                        <img src="icons/sec6Icon2.svg" alt="">
                        <p>Invite friends to receive a free Tap card</p>
                    </div>

                    <div class="section1_3Container_content_icons_box">
                        <img src="icons/sec6Icon3.svg" alt="">
                        <p>Stay Tuned</p>
                    </div>
                </div>

            </div>
            <button onclick="document.location='waitlistRegister.php' " class="signup">I want better networking now</button>


        </div>
    </div>
    <?php

    include_once 'footer.php';

    ?>
</div>

</div>
<!-- Sec6 End -->



<script src="js/sec2Animation.js"></script>
<script src="js/navBarRes.js"></script>

<script src="js/sec2AnimationResponsiveSlider.js"></script>


<script src="js/windowScroll.js"></script>
<script src="js/sec5_2Animation.js"></script>

</body>

</html>