<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio</title>
    <!-- ================ CSS Files ================= -->
    <link rel="stylesheet" href="{{ asset('css/color-1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- ============ Style switcher================ -->

    <link rel="stylesheet" href="{{ asset('css/color-1.css') }}" class="alternate-style" title="color-1" disabled>
    <link rel="stylesheet" href="{{ asset('css/color-2.css') }}" class="alternate-style" title="color-2" disabled>
    <link rel="stylesheet" href="{{ asset('css/color-3.css') }}" class="alternate-style" title="color-3" disabled>
    <link rel="stylesheet" href="{{ asset('css/color-4.css') }}" class="alternate-style" title="color-4" disabled>
    <link rel="stylesheet" href="{{ asset('css/color-5.css') }}" class="alternate-style" title="color-5" disabled>
    <link rel="stylesheet" href="{{ asset('css/style-switcher.css') }}">
</head>

<body>
    <!-- ========= Main Container Start ============== -->
    <div class="main-container">
        <!-- =========== Aside Start ============= -->
        <div class="aside">
            <div class="logo">
                <a href="#"><span>P</span>hong</a>
            </div>

            <div class="nav-toggler">
                <span>

                </span>
            </div>
            <ul class="nav">
                <li><a href="#home" class="active"><i class="fa fa-home"></i>Home</a></li>
                <li><a href="#about"><i class="fa fa-user"></i>About</a></li>
                <li><a href="#services"><i class="fa fa-list"></i>Services</a></li>
                <li><a href="#portfolio"><i class="fa fa-briefcase"></i>Portfolio</a></li>
                <li><a href="#contact"><i class="fa fa-comments"></i>Contact</a></li>
            </ul>
        </div>
        <!-- =========== Aside End ============= -->
        <!-- =========== Main Content Start ========== -->
        <div class="main-content">
            <!-- =============Home Section Start=============== -->
            <section class="home active section" id="home">
                <div class="container">
                    <div class="row">
                        <div class="home-info padd-15">
                            <h3 class="hello">Hello, my name is <span class="name">Hoai Phong</span></h3>
                            <h3 class="my-profession">I'm a <span class="typing"></span></h3>
                            <p>A self-introduction should include your name and occupation (or desired occupation) and
                                key facts
                                that will help you make an impression on the person you're speaking to. In a few
                                sentences, cover the most important things that others need to know about you.</p>
                            <a href="{{ asset('files/MyCV_LuuHoaiPhong.pdf') }}" class="btn" download>Download CV</a>
                        </div>

                        <div class="home-img padd-15">
                            <img src="{{ asset('img/aboutme.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <!-- =============Home Section End=============== -->

            <!-- =============About Section Start=============== -->
            <section class="about section" id="about">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>About Me</h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="about-content padd-15">
                            <div class="row">
                                <div class="about-text padd-15">
                                    <h3>I'm Hoai Phong and <span class="typings"></span></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores error ullam
                                        atque excepturi reprehenderit laborum. Vitae rerum asperiores natus doloremque
                                        aspernatur reiciendis velit tempora ipsum commodi, perferendis quod sapiente
                                        porro incidunt voluptas iusto sequi culpa quasi accusamus quo ratione fugiat
                                        illum ducimus. Nobis quia, obcaecati ad a commodi quidem. Fugiat laudantium
                                        ducimus consequatur animi molestiae?</p>

                                </div>
                            </div>

                            <div class="row">
                                <div class="personal-info padd-15">
                                    <div class="row">
                                        <div class="info-item padd-15">
                                            <p>Birthday : <span>March 1, 2001</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Age : <span>21</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Website : <span>www.facebook.com</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Email : <span>luuhoaiphong147@gmail.com</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Degree : <span>Greenwich</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Phone : <span>+84 398 371050</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>City : <span>Can Tho City</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Freelance : <span>Available</span></p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="buttons padd-15">
                                            <a href="#contact" data-section-index="1" class="btn hire-me">Hire Me</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="skills padd-15">
                                    <div class="row">
                                        <div class="skill-item padd-15">
                                            <h5>CSS</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 76%;">
                                                    <div class="skill-percent">76%</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="skill-item padd-15">
                                            <h5>HTML</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 80%;">
                                                    <div class="skill-percent">90%</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="skill-item padd-15">
                                            <h5>Javascript</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 76%;">
                                                    <div class="skill-percent">60%</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="skill-item padd-15">
                                            <h5>ReactJS</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 50%;">
                                                    <div class="skill-percent">50%</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="skill-item padd-15">
                                            <h5>ReactJS</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 50%;">
                                                    <div class="skill-percent">50%</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="skill-item padd-15">
                                            <h5>ReactJS</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 50%;">
                                                    <div class="skill-percent">50%</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="education padd-15">
                                    <h3 class="title">Education</h3>

                                    <div class="row">
                                        <div class="timeline-box padd-15">
                                            <div class="timeline shadow-dark">
                                                <!-- ===========timeline items============ -->
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i>2013-2015
                                                    </h3>
                                                    <h4 class="timeline-title">Master in Computer Science</h4>
                                                    <p class="timeline-text">Lorem ipsum dolor sit amet consectetur
                                                        adipisicing elit. Rerum voluptates repudiandae tempore earum
                                                        rem dolores ratione, quam fugiat? Quasi magni ea libero
                                                        omnis earum voluptatibus laborum, odit quaerat. Fugiat
                                                        officiis nam fugit, eos facere harum. Quod, doloribus
                                                        laboriosam. Ratione consectetur autem vero ut. Dolores
                                                        placeat nobis ex quisquam voluptatem vero iste quod magni
                                                        eaque modi?</p>
                                                </div>
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i>2013-2015
                                                    </h3>
                                                    <h4 class="timeline-title">Master in Computer Science</h4>
                                                    <p class="timeline-text">Lorem ipsum dolor sit amet consectetur
                                                        adipisicing elit. Rerum voluptates repudiandae tempore earum
                                                        rem dolores ratione, quam fugiat? Quasi magni ea libero
                                                        omnis earum voluptatibus laborum, odit quaerat. Fugiat
                                                        officiis nam fugit, eos facere harum. Quod, doloribus
                                                        laboriosam. Ratione consectetur autem vero ut. Dolores
                                                        placeat nobis ex quisquam voluptatem vero iste quod magni
                                                        eaque modi?</p>
                                                </div>
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i>2013-2015
                                                    </h3>
                                                    <h4 class="timeline-title">Master in Computer Science</h4>
                                                    <p class="timeline-text">Lorem ipsum dolor sit amet consectetur
                                                        adipisicing elit. Rerum voluptates repudiandae tempore earum
                                                        rem dolores ratione, quam fugiat? Quasi magni ea libero
                                                        omnis earum voluptatibus laborum, odit quaerat. Fugiat
                                                        officiis nam fugit, eos facere harum. Quod, doloribus
                                                        laboriosam. Ratione consectetur autem vero ut. Dolores
                                                        placeat nobis ex quisquam voluptatem vero iste quod magni
                                                        eaque modi?</p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="experience padd-15">
                                    <h3 class="title">Experience</h3>
                                    <div class="row">
                                        <div class="timeline-box padd-15">
                                            <div class="timeline shadow-dark">
                                                <!-- ===========timeline items============ -->
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i>2013-2015
                                                    </h3>
                                                    <h4 class="timeline-title">Master in Computer Science</h4>
                                                    <p class="timeline-text">Lorem ipsum dolor sit amet consectetur
                                                        adipisicing elit. Rerum voluptates repudiandae tempore earum
                                                        rem dolores ratione, quam fugiat? Quasi magni ea libero
                                                        omnis earum voluptatibus laborum, odit quaerat. Fugiat
                                                        officiis nam fugit, eos facere harum. Quod, doloribus
                                                        laboriosam. Ratione consectetur autem vero ut. Dolores
                                                        placeat nobis ex quisquam voluptatem vero iste quod magni
                                                        eaque modi?</p>
                                                </div>
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i>2013-2015
                                                    </h3>
                                                    <h4 class="timeline-title">Master in Computer Science</h4>
                                                    <p class="timeline-text">Lorem ipsum dolor sit amet consectetur
                                                        adipisicing elit. Rerum voluptates repudiandae tempore earum
                                                        rem dolores ratione, quam fugiat? Quasi magni ea libero
                                                        omnis earum voluptatibus laborum, odit quaerat. Fugiat
                                                        officiis nam fugit, eos facere harum. Quod, doloribus
                                                        laboriosam. Ratione consectetur autem vero ut. Dolores
                                                        placeat nobis ex quisquam voluptatem vero iste quod magni
                                                        eaque modi?</p>
                                                </div>
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i>2013-2015
                                                    </h3>
                                                    <h4 class="timeline-title">Master in Computer Science</h4>
                                                    <p class="timeline-text">Lorem ipsum dolor sit amet consectetur
                                                        adipisicing elit. Rerum voluptates repudiandae tempore earum
                                                        rem dolores ratione, quam fugiat? Quasi magni ea libero
                                                        omnis earum voluptatibus laborum, odit quaerat. Fugiat
                                                        officiis nam fugit, eos facere harum. Quod, doloribus
                                                        laboriosam. Ratione consectetur autem vero ut. Dolores
                                                        placeat nobis ex quisquam voluptatem vero iste quod magni
                                                        eaque modi?</p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- =============About Section End=============== -->

            <!-- =============Services Section Start=============== -->
            <section class="service section" id="services">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Services</h2>
                        </div>
                    </div>

                    <div class="row">
                        <!-- ===========Service items start============== -->

                        <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-mobile-alt"></i>
                                </div>
                                <h4>Web design</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi ipsum saepe, quisquam
                                    a ullam omnis natus totam sit, illo consectetur necessitatibus, amet ratione..</p>
                            </div>
                        </div>

                        <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-laptop-code"></i>
                                </div>
                                <h4>Web design</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi ipsum saepe, quisquam
                                    a ullam omnis natus totam sit, illo consectetur necessitatibus, amet ratione. </p>
                            </div>
                        </div>

                        <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-palette"></i>
                                </div>
                                <h4>Web design</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi ipsum saepe, quisquam
                                    a ullam omnis natus totam sit, illo consectetur necessitatibus, amet ratione.</p>
                            </div>
                        </div>

                        <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-code"></i>
                                </div>
                                <h4>Web design</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi ipsum saepe, quisquam
                                    a ullam omnis natus totam sit, illo consectetur necessitatibus, amet ratione</p>
                            </div>
                        </div>

                        <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-bullhorn"></i>
                                </div>
                                <h4>Web design</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi ipsum saepe, quisquam
                                    a ullam omnis natus totam sit, illo consectetur necessitatibus, amet ratione.</p>
                            </div>
                        </div>

                        <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-search"></i>
                                </div>
                                <h4>Web design</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi ipsum saepe, quisquam
                                    a ullam omnis natus totam sit, illo consectetur necessitatibus, amet ratione</p>
                            </div>
                        </div>
                        <!-- ===========Service items end============== -->
                    </div>
                </div>
            </section>
            <!-- =============Services Section End=============== -->



            <!-- =============Portfolio Section Start=============== -->
            <section class="portfolio section" id="portfolio">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Portfolio</h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="portfoilio-heading padd-15">
                            <h2>My Last Projects :</h2>
                        </div>
                    </div>

                    <div class="row">
                        <!-- ==================== Portfolio items start ================ -->
                        <div class="portfolio-item padd-15">
                            <div class="portfolio-item-inner shadow-dark">
                                <div class="portfolio-img">
                                    <img src="./img/portfolio1.jpg" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="portfolio-item padd-15">
                            <div class="portfolio-item-inner shadow-dark">
                                <div class="portfolio-img">
                                    <img src="./img/portfolio2.jpg" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="portfolio-item padd-15">
                            <div class="portfolio-item-inner shadow-dark">
                                <div class="portfolio-img">
                                    <img src="./img/portfolio3.jpg" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="portfolio-item padd-15">
                            <div class="portfolio-item-inner shadow-dark">
                                <div class="portfolio-img">
                                    <img src="./img/portfolio1.jpg" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="portfolio-item padd-15">
                            <div class="portfolio-item-inner shadow-dark">
                                <div class="portfolio-img">
                                    <img src="./img/portfolio2.jpg" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="portfolio-item padd-15">
                            <div class="portfolio-item-inner shadow-dark">
                                <div class="portfolio-img">
                                    <img src="./img/portfolio3.jpg" alt="">
                                </div>
                            </div>
                        </div>

                        <!-- ==================== Portfolio items end ================ -->
                    </div>
                </div>
            </section>
            <!-- =============Portfolio Section End=============== -->

            <!-- =============Contact Section Start=============== -->
            <section class="contact section" id="contact">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Contact me</h2>
                        </div>
                    </div>

                    <h3 class="contact-title padd-15">Have you any questions ?</h3>
                    <h4 class="contact-sub-title padd-15">I'm at your services</h4>
                    <div class="row">
                        <!-- ==============Contact info item start=============== -->
                        <div class="contact-info-item padd-15">
                            <div class="icon"><i class="fa fa-phone"></i></div>
                            <h4>Call us on</h4>
                            <p>+84 3983 71050</p>
                        </div>

                        <div class="contact-info-item padd-15">
                            <div class="icon"><i class="fa fa-map-marker-alt"></i></div>
                            <h4>Located in</h4>
                            <p>Phu Nhuan, Ho Chi Minh city</p>
                        </div>

                        <div class="contact-info-item padd-15">
                            <div class="icon"><i class="fa fa-envelope"></i></div>
                            <h4>Email</h4>
                            <p>luuhoaiphong147@gmail.com</p>
                        </div>

                        <div class="contact-info-item padd-15">
                            <div class="icon"><i class="fa fa-globe-europe"></i></div>
                            <h4>Website</h4>
                            <p>facebook.com</p>
                        </div>

                        <!-- ==============Contact info item end=============== -->
                    </div>
                    <h3 class="contact-title padd-15">SEND ME AN EMAIL</h3>
                    <h4 class="contact-sub-title padd-15">I'M VERY RESPOSEIVE TO MESSAGES</h4>

                    <!-- ===============Contact Form ==============  -->
                    <div class="row">
                        <div class="contact-form padd-15">
                            <form action="{{ route('send.mail') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="form-item col-6 padd-15">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Your name" name="name">
                                        </div>
                                    </div>
                                    <div class="form-item col-6 padd-15">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email" name="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-item col-12 padd-15">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Subject" name="subject">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-item col-12 padd-15">
                                        <div class="form-group">
                                            <textarea class="form-control" id="" placeholder="Message" name="message"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-item col-12 padd-15">
                                        <div class="form-group">
                                            <button type="submit" class="btn">Send message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>


            <!-- =============Contact Section end=============== -->
        </div>
        <!-- =========== Main Content End ========== -->
    </div>
    <!-- ========= Main Container End ============== -->

    <!-- =============Style switcher start================= -->
    <div class="style-switcher">
        <div class="style-switcher-toggler s-icon">
            <i class="fa fa-palette"></i>
        </div>
        <div class="day-night s-icon">
            <i class="fas "></i>
        </div>
        <h4>Theme colors</h4>
        <div class="colors">
            <span class="color-1" onclick="setActiveStyle('color-1')"></span>
            <span class="color-2" onclick="setActiveStyle('color-2')"></span>
            <span class="color-3" onclick="setActiveStyle('color-3')"></span>
            <span class="color-4" onclick="setActiveStyle('color-4')"></span>
            <span class="color-5" onclick="setActiveStyle('color-5')"></span>
        </div>
    </div>

    <!-- =============Style switcher end================= -->

    <!-- ================== JS Files =================== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/style-switcher.js') }}"></script>

</body>

</html>
