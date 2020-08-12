<?php
    session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="vendor/css/owl.carousel.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" />
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script src="infiniteslidev2.js"></script>
    <title>Document</title>
</head>
<script type="text/javascript">
    $(function(){
        $('.scroll1').infiniteslide();
    });
</script>
<body>
<div class="home_renovation">
    <div class="menu">
        <h2 class="homer">Homer Renovation</h2>
        <img src="images/burger.svg">
    </div>
    <div class="first_block">
        <div class="blue_area">
            <h2>A radically smarter & easier way to renovate your bathroom, today.</h2>
            <p class="paragraph">We're the first home renovation company that gets you beautiful architect designed
                renovations
                completed reliably & managed for you in the one place. Free from cost overruns, horrible designs,
                missed deadlines, and unreliable contractors. Now that’s why everyone is talking about us.</p>
            <button class="blue_button" data-toggle="modal" data-target="#myModal">Get Free Estimate <img src="images/arrow.svg"></button>
            <div class="dots">
                <img src="images/dot-estimate.svg">
            </div>
        </div>
        <div class="right_img">
			<div class="slideshow-container">
				<div class="mySlides fade">
					<img src="images/main2.jpg" style="width:100%">
				</div>
				<div class="mySlides fade">
					<img src="images/main.jpg" style="width:100%">
				</div>
				<div class="mySlides fade">
					<img src="images/main1.jpg" style="width:100%">
				</div>
				<div class="mySlides fade">
					<img src="images/main3.jpg" style="width:100%">
				</div>
				<div class="mySlides fade">
					<img src="images/main4.jpg" style="width:100%">
				</div>
			</div>
	</div>
	<br>
	<div style="text-align:center">
		<span class="dot"></span>
		<span class="dot"></span>
		<span class="dot"></span>
		<span class="dot"></span>
		<span class="dot"></span>
	</div>
</div>
    <div class="under_logos">
        <h2 class="general">We finally reimagined home renovations because we manage everything for you under the one
            roof.</h2>
        <p class="paragraph">We flipped home renovations on it’s head with all-inclusive packages that we manage
            for you from start to finish. Free from cost overruns, horrible design, missed deadlines,
            and dodgy unreliable contractors.</p>
    </div>
    <div class="industry">
        <div class="roof">
            <div class="tabs">
                <div class="line_left"></div>
                <div class="line_right"></div>
                <div class="tab_line">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home"
                           role="tab" aria-controls="v-pills-home" aria-selected="true">Stunning Design</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                           role="tab" aria-controls="v-pills-profile" aria-selected="false">Quality Materials</a>
                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages"
                           role="tab" aria-controls="v-pills-messages" aria-selected="false">Elevated Construction</a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings"
                           role="tab" aria-controls="v-pills-settings" aria-selected="false">Smart Technology</a>
                        <a class="nav-link" id="v-pills-pricing-tab" data-toggle="pill" href="#v-pills-pricing"
                           role="tab" aria-controls="v-pills-pricing" aria-selected="false">Transparent Pricing</a>
                        <a class="nav-link" id="v-pills-guarantee-tab" data-toggle="pill" href="#v-pills-guarantee"
                           role="tab" aria-controls="v-pills-guarantee" aria-selected="false">Price-Match Guarantee</a>
                    </div>
                </div>
            </div>
            <div class="tabs_content">
                <img src="images/roof-dots.svg">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                         aria-labelledby="v-pills-home-tab">
                        <h2>Stunning Design</h2>
                        <p>We work with the leading designers in house to give you beautiful architect designed
                            bathrooms.</p>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                         aria-labelledby="v-pills-profile-tab">
                        <h2>Quality Materials</h2>
                        <p>We use quality materials of brands you & everybody else already know & trust.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                         aria-labelledby="v-pills-messages-tab">
                        <h2>Elevated Construction</h2>
                        <p>We put every contractor we work with through our 99 point Homer test to ensure quality,
                            accountability, and efficiency. That’s unlike traditional methods of calling around for
                            whoever is available to do the job.</p>
                    </div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                         aria-labelledby="v-pills-settings-tab">
                        <h2>Smart Technology</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                            a galley of type and scrambled it to make a type specimen book. It has survived not only
                            five
                            centuries, but also the leap into electronic typesetting, remaining essentially
                            unchanged.</p>
                    </div>
                    <div class="tab-pane fade" id="v-pills-pricing" role="tabpanel"
                         aria-labelledby="v-pills-pricing-tab">
                        <h2>Transparent Pricing</h2>
                        <p> Unlike traditional contractors we don’t use hidden tricks to make profit after working
                            together.
                            We ensure a fair price upfront, and any changes we guarantee not to profit from.</p>
                    </div>
                    <div class="tab-pane fade" id="v-pills-guarantee" role="tabpanel"
                         aria-labelledby="v-pills-guarantee-tab">
                        <h2>Price-Match Guarantee</h2>
                        <p> We pride ourselves on efficiency. If you find a reputable general contractor that charges
                            25% less we’ll work with them, and pass along the savings to you.
                            Smart Technology; We use smart technology to know what provides the best ROI as well as
                            getting access to smart upgrades like under tile heating.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="designers">
            <div class="designers_left">
                <img class="girl" src="images/Image1.svg">
                <img class="dot_img" src="images/small-dot.svg">
            </div>
            <div class="designers_right">
                <h2>Industry Leading Designers <br>
                    Love Us!</h2>
                <p class="comment">"I've designed hundreds of homes for Australian celebrities, and more...
                    but Homer Renovation is my secret weapon that I'd use for my own home."</p>
                <p class="name">Jenna H. 'Plant Mama'</p>
                <p class="address">Interior Designer/Architect</p>
                <p class="address"><img src="images/social-media-instagram.png"> IG 45,000+ followers</p>
            </div>
        </div>
        <h2 class="how_it_work">How it Works</h2>
        <div class="block_content">
            <div class="point">
                <span>1</span>
                <h2>Get a Free Estimate</h2>
            </div>
            <p class="free">Get a free starting estimate in just under two minutes after you’ve told us a little bit
                about your dream project.</p>
        </div>
        <div class="number_block">
            <div class="number_block_left">
                <img src="images/bathroom1 (1).jpg" class="estimate_img">
            </div>
            <div class="number_block_right">
                <div class="estimate">
                    <h3>Your Bathroom Estimate</h3>
                    <ul>
                        <li><p>Design</p>
                            <p>$3,000</p></li>
                        <li><p>Materials</p>
                            <p>$4,000</p></li>
                        <li><p>Project Management</p>
                            <p>$4,000</p></li>
                        <li><p>Construction</p>
                            <p>$9,000</p></li>
                        <li><p>Estimated Total</p>
                            <p>$20,000</p></li>
                    </ul>
                    <h2>Homer Renovation</h2>
                </div>
            </div>
        </div>
        <div class="proposal">
            <div class="point">
                <span>2</span>
                <h2>Bespoke Proposal</h2>
            </div>
            <p class="free">We give you a unique proposal based on your space & goals. After working with one of our
                leading designers you get one package with everything you need for your renovation: design,
                detailed drawings, all finish materials, permits, and scheduled delivery.</p>
            <div class="proposal_img">
                <div class="proposal_left">
                    <img class="furniture" src="images/bathroom333.jpeg">
                    <img class="furniture_dots" src="images/get-dot.svg">
                </div>
                <div class="proposal_right">
                    <img class="pop" src="images/bathroom2.jpg">
                    <img src="images/bathroom555(1).jpg">
                </div>
            </div>
        </div>
        <div class="dream_home">
            <div class="point">
                <span>3</span>
                <h2>Sit back & relax whilst<br/>
                    your new dream home is built</h2>
            </div>
            <p class="free">With everything already prepared you get matched with one of our Homer certified & licensed
                builder to get the job done on time, in an average of just 4 weeks. No overruns, no cost increases,
                and now you finally get peace of mind.</p>
            <div class="home">
                <div class="home_left">
                    <img src="images/bathroom6 (1).jpeg">
                </div>
                <div class="lamp">
                    <img src="images/bathroom44 (1).jpg">
                    <img class="home_dots" src="images/get-dot.svg">
                </div>
            </div>
        </div>
    </div>
    <div class="why_homer">
        <h2 class="why">Why Homer?</h2>
        <div class="experience">
            <div class="homer_content">
                <div class="typical_experience">
                    <h2>Typical Experience</h2>
                    <ul>
                        <li><span>Design</span>
                            <p>Do it yourself</p></li>
                        <li class="materials"><span>Materials</span>
                            <p>Order yourself</p></li>
                        <li><span>Project Management</span>
                            <p>Complete chaos and management hell</p></li>
                        <li><span>Construction</span>
                            <p>Unvetted contractors with no incentive to do the job property.</p></li>
                        <li><span>Build Time</span>
                            <p>Around 4 months total</p></li>
                        <li><span>Pricing</span>
                            <p>Hidden tricks to increase profit after building begins</p></li>
                    </ul>
                </div>
                <div class="homer_way">
                    <h2> The Homer Way</h2>
                    <ul>
                        <li><img src="images/check.svg">
                            <p>Leading designers in house</p></li>
                        <li><img src="images/check.svg">
                            <p>Our dedicated procurement team handles everything for you.</p></li>
                        <li><img src="images/check.svg">
                            <p>End-to-end dedicated support</p></li>
                        <li><img src="images/check.svg">
                            <p>Homer certified, vetted & licensed contractors</p></li>
                        <li><img src="images/check.svg">
                            <p>On average just 4 weeks</p></li>
                        <li><img src="images/check.svg">
                            <p>Transparent upfront pricing with no profit from changes, guaranteed</p></li>
                    </ul>
                </div>
                <div class="homer_way1 typical_experience">
                    <h2> The Homer Way</h2>
                    <ul>
                        <li><span>Design</span><img src="images/check.svg">
                            <p>Leading designers in house</p></li>
                        <li><span>Materials</span><img src="images/check.svg">
                            <p>Our dedicated procurement team handles everything for you.</p></li>
                        <li><span>Project Management</span><img src="images/check.svg">
                            <p>End-to-end dedicated support</p></li>
                        <li><span>Construction</span><img src="images/check.svg">
                            <p>Homer certified, vetted & licensed contractors</p></li>
                        <li><span>Build Time</span><img src="images/check.svg">
                            <p>On average just 4 weeks</p></li>
                        <li><span>Pricing</span><img src="images/check.svg">
                            <p>Transparent upfront pricing with no profit from changes, guaranteed</p></li>
                    </ul>
                    <div class="started started1">
                        <a href="#">Ready to get started?</a>
                        <button class="blue_button">Get Estimate <img src="images/arrow.svg"></button>
                    </div>
                </div>
            </div>
            <div class="started">
                <a href="#">Ready to get started?</a>
                <button class="blue_button">Get Estimate <img src="images/arrow.svg"></button>
            </div>
        </div>
    </div>

    <div class="elevated">
        <h2 class="general"> Elevated Designs</h2>
        <p class="paragraph"> We’ve worked with top interior designers and architects to create design collections as
           starting points that adapt to your needs, wants, and style.</p>
    </div>
	<ul class="scroll1 slides">
		<li><img src="images/main.jpg">
			<div class="position">
                <p>Melbourne, Australia</p>
                <button class="blue_button" data-toggle="modal" data-target="#myModal">Get Free Estimate <img src="images/arrow.svg"></button>
			</div>
		</li>
		<li><img src="images/main1.jpg">
			<div class="position">
                <p>Melbourne, Australia</p>
                <button class="blue_button" data-toggle="modal" data-target="#myModal">Get Free Estimate <img src="images/arrow.svg"></button>
			</div>
		</li>
		<li><img src="images/main2.jpg">
			<div class="position">
                <p>Melbourne, Australia</p>
                <button class="blue_button" data-toggle="modal" data-target="#myModal">Get Free Estimate <img src="images/arrow.svg"></button>
			</div>
		</li>
		<li><img src="images/main3.jpg">
			<div class="position">
                <p>Melbourne, Australia</p>
                <button class="blue_button" data-toggle="modal" data-target="#myModal">Get Free Estimate <img src="images/arrow.svg"></button>
			</div>
		</li>
		<li><img src="images/main4.jpg">
			<div class="position">
				<p>Melbourne, Australia</p>
                <button class="blue_button" data-toggle="modal" data-target="#myModal">Get Free Estimate <img src="images/arrow.svg"></button>
			</div>
		</li>
	</ul>
    <div class="before_after">
        <div class="contractors">
            <p class="about">"Together, our contractors have experience building over hundreds of new upgraded
                bathrooms."</p>
            <div class="user">
                <div class="contractors_img">
                    <img src="images/user.png">
                </div>
                <div class="contractors_contact">
                    <h2>Contractor Spotlight</h2>
                    <p class="cont_name">Tom R.</p>
                    <p class="contact">Built over 50+ bathrooms.</p>
                </div>
            </div>
        </div>
        <div class="cont_cont">
            <div class="before">
                <img src="images/before.png">
                <div>BEFORE</div>
            </div>
            <div class="before_after_dots_section">
                <img src="images/before_after_section_dot.png" alt="">
            </div>
            <div class="after">
                <img src="images/after.png">
                <div>AFTER</div>
            </div>
        </div>
    </div>
    <div class="upgrade">
        <div class="upgrade_content">
            <div class="learn_more">
                <h2>Upgrade your home today</h2>
                <p>Learn more & see what’s possible.</p>
            </div>
            <div class="email">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Enter email address"
                           aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button type="button">Continue</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="faq">
        <h2>FAQ</h2>
        <div class="accordion_content">
            <button class="accordion"><span></span>How does payment work?</button>
            <div class="panel">
                <p>Homer Renovation has standard payment terms. We ask for $1000 deposit to reserve your renovation.
                    After, the renovation is paid for in installments.
                <p>
                <p> The first installment occurs at the end of the design process when you’re 100% happy.
                    The second installment is to cover the materials cost, which we will ask when we provide the
                    receipt.</p>
                <p> The construction phase is paid for in three installments. Beginning, middle & end. Super simple.
                    We accept cash, & bank transfer.</p>
            </div>
        </div>
        <div class="accordion_content">
            <button class="accordion"><span></span>How long do renovations take?</button>
            <div class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.</p>
            </div>
        </div>
        <div class="accordion_content">
            <button class="accordion"><span></span>Who are Homer Renovation Contractors?</button>
            <div class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.</p>
            </div>
        </div>
        <div class="accordion_content">
            <button class="accordion"><span></span>What happens when something goes wrong?</button>
            <div class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.</p>
            </div>
        </div>
        <div class="accordion_content">
            <button class="accordion"><span></span>Can I do my own design?</button>
            <div class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.</p>
            </div>
        </div>
    </div>
    <div class="about_homer_renovation">
        <div>
            <h2>Homer Renovation</h2>
            <p>@homerenovation</p>
        </div>
        <div class="address_footer_section">
            <div>
                <h2>Address </h2>
                <p>Counter Delivery, Carters Beach</p>
                <p>Post Centre, Westport</p>
            </div>
            <div class="social_btn">
                <div class="facebook_btn"></div>
                <div class="instagram_btn"></div>
                <div class="twitter_btn"></div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal submit fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <form action="contact.php" id="contact_form" method="post">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input name="name" type="text" class="form-control" id="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input name="email" type="email" class="form-control" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="budget">Budget:</label>
                        <input name="budget" type="text" class="form-control" id="budget" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success" form="contact_form">Submit</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

<!-- Modal Success-->
<div class="modal send fade" id="modalSuccess" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <h4>Message sent successfully</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
            </div>
        </div>

    </div>
</div>

<!-- Modal Error-->
<div class="modal error fade" id="modalError" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <h4>Failed to send message</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
            </div>
        </div>

    </div>
</div>

<div class="module">
	<div class="jquery-script-ads" style="margin:30px auto;">
	</div>
</div>

<script src="script.js"></script>
<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 1500); // Change image every 2 seconds
    }

    google_ad_client = "ca-pub-2783044520727903";
    /* jQuery_demo */
    google_ad_slot = "2780937993";
    google_ad_width = 728;
    google_ad_height = 90;

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script>
<script type="text/javascript"
		src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

<?php
if(isset($_SESSION['success'])){
    ?>
    <script>
        $(window).load(function(){
            $('#modalSuccess').modal('show');
        });
    </script>
<?php
}
elseif(isset($_SESSION['error'])){
?>
    <script>
        $(window).load(function(){
            $('#modalError').modal('show');
        });
    </script>


    <?php
}

session_destroy();
?>

</body>
</html>






