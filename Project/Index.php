<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="./Css/Index.css">
    <title>Edulogy | Home</title>
    <style>
        .dropdown {
            position: relative;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background: #02082B;
            min-width: 200px;
            z-index: 1;
            font-size: 14px;
        }

        .dropdown-content a {
            color: rgb(255, 250, 250);
            padding: 8px 10px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #354de9;
            color: #ff0000;
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="header">
            <div class="header-contact">
                <span><i class='bx bx-phone icon '></i></span>
                <a href="#">+923-1234567890</a>
                <span><i class='bx bx-envelope icon'></i></span><a href="mailto:abc@gmail.com">info@Edulogy.com</a>
            </div>

            <div class="social-icons">
                <span><i class='bx bxl-facebook media-icons' id="facebook"></i></span>
                <span><i class='bx bxl-instagram media-icons' id="instagram"></i></span>
                <span><i class='bx bxl-twitter media-icons' id="twitter"></i></span>
                <span><i class='bx bxl-pinterest media-icons' id="pintrest"></i></span>
                <span><i class='bx bxl-linkedin media-icons' id="linkedin"></i></span>
                <span><i class='bx bxl-google-plus media-icons' id="google"></i></span>
            </div>

        </div>
        <div class="header-menu">
            <div class="logo">
                <h1>Edulogy</h1>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Courses</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Blogs</a></li>
                    <li><a href="#">Contact</a></li>
                    <li>
                        <div class="dropdown">
                            <div class="dropbtn"><span><a href="#">Login Now</a></span></div>
                            <div class="dropdown-content">
                                <a href="./StudentLogin.php">Student</a>
                                <a href="./TeacherLogin.php">Teacher</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="info">
            <h1>Learning Management System</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum, <br>
                velit optio. Dolorum ex ratione porro ab delectus repudiandae odit rerum quasi consequuntur a?</p>
            <button id="btn1">Read More</button>
            <button id="btn2">Join Now</button>
        </div>
        <div class="header-video">
            <div id="video_background_video_0" style="z-index: -1; position: absolute; inset: 0px; overflow: hidden;">
                <video width="1350px" height="759" autoplay loop>
                    <source src="./video/preview.mp4" type="video/mp4">
                </video>
            </div>
        </div>

        <div class="courses-intro">
            <div class="couse-card">
                <i class='bx bx-laptop courses-icon'></i>
                <h5>Online Traning</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod eligendi.</p>

            </div>

            <div class="couse-card">
                <i class='bx bx-book-alt  courses-icon'></i>
                <h5>E-Books</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod eligendi.</p>

            </div>

            <div class="couse-card">
                <i class='bx bxs-videos courses-icon'></i>
                <h5>Creative learning video</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod eligendi.</p>

            </div>

            <div class="couse-card">
                <i class='bx bx-headphone  courses-icon'></i>
                <h5>Audio learning</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod eligendi.</p>

            </div>
        </div>
        <div class="courses">
            <h2>Top Courses</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, modi! Illo magni harum eius
                delectus!</p>

            <div class="courses-cards">
                <div class="courses-cards-info">
                    <img src="./Images/webdesign.jpg" alt="">
                    <h3>WEB Designing</h3>
                    <button>Enroll Now</button>
                </div>

                <div class="courses-cards-info">
                    <img src="./Images//wordpress.jpg" alt="">
                    <h3>WordPress</h3>
                    <button>Enroll Now</button>
                </div>


                <div class="courses-cards-info">
                    <img src="./Images/angularjs.jpg" alt="">
                    <h3>Angular</h3>
                    <button>Enroll Now</button>
                </div>

                <div class="courses-cards-info">
                    <img src="./Images/javascript.jpg" alt="">
                    <h3>Java Script</h3>
                    <button>Enroll Now</button>
                </div>


                <div class="courses-cards-info">
                    <img src="./Images/photoshop.jpg" alt="">
                    <h3>Photo Shop</h3>
                    <button>Enroll Now</button>
                </div>


                <div class="courses-cards-info">
                    <img src="./Images/reactjs.jpg" alt="">
                    <h3>React Js</h3>
                    <button>Enroll Now</button>
                </div>
            </div>
        </div>

        <div class="faculty-info">
            <div class="info-cards">
                <h6><span id="std_count">10230</span></h6>
                <i class='bx bxs-graduation f-icon'></i>
                <h1>Happy Students</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo libero laudantium fugit pariatur
                    repellendus, saepe at voluptates quod?</p>
            </div>

            <div class="info-cards">
                <h6><span id="courses_count"></span>120</h6>
                <i class='bx bx-book-reader f-icon'></i>
                <h1>Courses</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo libero laudantium fugit pariatur
                    repellendus, saepe at voluptates quod?</p>
            </div>


            <div class="info-cards">
                <h6><span class="teacher_count">50</span></h6>
                <i class='bx bx-buildings f-icon'></i>
                <h1>Capmuses</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo libero laudantium fugit pariatur
                    repellendus, saepe at voluptates quod?</p>
            </div>
        </div>
        <h2 id="h2">Recent Blogs</h2>
        <div class="blogs">

            <div class="belogs-cards">
                <img src="./Images/image_1.jpg" alt="">
                <h2>Skills Develop to your Child</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                    the blind texts.</p>
                <button class="read_more">Reade More <i class='bx bxs-right-arrow-alt'></i></button>
            </div>

            <div class="belogs-cards">
                <img src="./Images/image_2.jpg" alt="">
                <h2>Skills Develop to your Child</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                    the blind texts.</p>
                <button class="read_more">Reade More<i class='bx bxs-right-arrow-alt'></i></button>
            </div>

            <div class="belogs-cards">
                <img src="./Images/image_3.jpg" alt="">
                <h2>Skills Develop to your Child</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                    the blind texts.</p>
                <button class="read_more">Reade More<i class='bx bxs-right-arrow-alt'></i></button>
            </div>
        </div>

        <div class="contact-us">
            <h1>Contact us</h1>
            <div class="contact">
                <div class="register">
                    <form action="">
                        <input type="text" placeholder="Enter Your Name" required autocomplete="off">
                        <input type="email" placeholder="Enter Your Email" required autocomplete="off">
                        <textarea name="" id="" cols="73" rows="5" placeholder="Enter Message Here..." autocomplete="off" required></textarea>
                        <button type="submit" class="btn btn-primary register_btn">Send</button>
                    </form>
                </div>

                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3401.121550919235!2d74.34949107484212!3d31.520821347121146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391904f8c765bccb%3A0xb4de1637adb11427!2sOxford%20University%20Press!5e0!3m2!1sen!2s!4v1694291294244!5m2!1sen!2s" width="670" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

        <div class="comunity">
            <h1>Join Our Community Now!</h1>
            <p>ipsum dolor sit amet consectetur adipisicing elit. Sit eaque optio dolore officiis fuga neque quidem
                ipsum modi voluptate necessitatibus!</p>
            <button class="color">Register Now</button>
        </div>

        <div class="footer">
            <div class="news_letter">
                <h2>Subscribe our News Letter</h2>
                <p>You can opt out of our newsletters at any time. <br>See our privacy policy.</p>
                <form action="">
                    <input type="email" placeholder="Enter Your Email" autocomplete="off" required>
                    <button><i class='bx bxs-send send'></i></button>
                </form>
                <div class="plateform">
                    <h2>Avaliable on</h2>
                    <i class='bx bxl-android icon'></i>
                    <i class='bx bxl-apple icon'></i>
                    <i class='bx bx-podcast icon'></i>
                    <i class='bx bxl-youtube icon'></i>
                    <i class='bx bxl-microsoft-teams icon'></i>
                </div>
            </div>


            <div class="join">
                <h2>Join us today</h2>
                <p>Would you like to earn your profits by joining our team? Join us without losing time.</p>
                <button> <a href="./Registration.php" target="_blank">Become a Teacher <i class='bx bx-right-arrow-alt teacher_icon'></i></a></button>
                <button> <a href="./Student Registration.php" target="_blank">Become a Part of Alumni <i class='bx bx-right-arrow-alt teacher_icon'></i></a></button>
            </div>

            <div class="footer_menu">
                <ul>
                    <li><a href="#">Awards<i class='bx bx-chevron-right footer-menu-icon'></i></a></li>
                    <li><a href="#">Home<i class='bx bx-chevron-right footer-menu-icon'></i></a></li>
                    <li><a href="#">Blog<i class='bx bx-chevron-right footer-menu-icon'></i></a></li>
                    <li><a href="#">Scolarships<i class='bx bx-chevron-right footer-menu-icon'></i></a></li>
                    <li><a href="#">Privacy Policy<i class='bx bx-chevron-right footer-menu-icon'></i></a></li>
                    <li><a href="#">Terms & Conditions<i class='bx bx-chevron-right footer-menu-icon'></i></a></li>
                </ul>
            </div>

            <div class="address">

                <i class='bx bxs-map'></i>
                <p>Edulogy University Press</p><br>
                <i class='bx bx-mobile'></i></i>
                <p> Phone: +92-123456790</p><br>
                <i class='bx bx-phone'></i></i>
                <p>(+92) 80-192-897</p><br>
                <i class='bx bxs-buildings'></i>
                <p>Fax: +92-42-0973645</p><br>
                <i class='bx bx-envelope'></i>
                <p> Email: Edulogy@.edu.pk</p><br>
            </div>
        </div>
        <div class="copy-right">
            <p>Copyright ©2023 All rights reserved by Edulogy</p>
        </div>
    </div>
    <script src="./Index.js"></script>
</body>

</html>