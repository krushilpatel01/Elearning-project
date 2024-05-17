<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="shortcut icon" href="images/logo-default.png" type="image/x-icon"> -->
    <!-- Custome CSS -->
    <link rel="stylesheet" href="CSS/style.css">
    <!-- Custome Responsive -->
    <link rel="stylesheet" href="CSS/responsive.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <title>Home Page</title>
    <!-- google fonts link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="main">
        <?php
        include ("components/header.php");
        ?>

        <!-- slider start -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide image-1">
                    <div class="text">
                        <h2>What To Do Learn.</h2>
                        <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to
                            demonstrate the visual form of a document or a typeface without relying on meaningful
                            content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>
                    </div>
                </div>
                <div class="swiper-slide image-2">
                    <div class="text">
                        <h2>What To Do Learn.</h2>
                        <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to
                            demonstrate the visual form of a document or a typeface without relying on meaningful
                            content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>
                    </div>
                </div>
                <div class="swiper-slide image-3">
                    <div class="text">
                        <h2>What To Do Learn.</h2>
                        <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to
                            demonstrate the visual form of a document or a typeface without relying on meaningful
                            content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>
                    </div>
                </div>

            </div>
            <div class="swiper-button-next" style="color:white"></div>
            <div class="swiper-button-prev" style="color:white"></div>
        </div>
        <!-- slider end -->


        <!-- facalities start -->
        <section class="facalities">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-4 facality d-flex my-2 t-center">
                        <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="76" height="76"
                                viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="m13 21l2-1l2 1v-7h-4m4-5V7l-2 1l-2-1v2l-2 1l2 1v2l2-1l2 1v-2l2-1m1-7H4a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h7v-2H4V5h16v10h-1v2h1a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2m-9 5H5V6h6m-2 5H5V9h4m2 5H5v-2h6Z" />
                            </svg></div>
                        <div class="icons-details mx-3">
                            <h3>Certificates</h3>
                            <h6>Value All Over The World</h6>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 facality d-flex my-2">
                        <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="76" height="76"
                                viewBox="0 0 256 256">
                                <path fill="currentColor"
                                    d="M216 40H40a16 16 0 0 0-16 16v144a16 16 0 0 0 16 16h13.39a8 8 0 0 0 7.23-4.57a48 48 0 0 1 86.76 0a8 8 0 0 0 7.23 4.57H216a16 16 0 0 0 16-16V56a16 16 0 0 0-16-16M80 144a24 24 0 1 1 24 24a24 24 0 0 1-24-24m136 56h-56.57a64.39 64.39 0 0 0-28.83-26.16a40 40 0 1 0-53.2 0A64.39 64.39 0 0 0 48.57 200H40V56h176ZM56 96V80a8 8 0 0 1 8-8h128a8 8 0 0 1 8 8v96a8 8 0 0 1-8 8h-16a8 8 0 0 1 0-16h8V88H72v8a8 8 0 0 1-16 0" />
                            </svg></div>
                        <div class="icons-details mx-3">
                            <h3>Expert Teacher</h3>
                            <h6>Best & Highly Qualitfied</h6>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 facality d-flex my-2">
                        <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="76" height="76"
                                viewBox="0 0 2048 2048">
                                <path fill="currentColor"
                                    d="M384 1536h128v128H256V384H128v1408h384v128H0V256h256V128h384q88 0 169 27t151 81q69-54 150-81t170-27h384v128h256v819l-128-58V384h-128v575l-128-59V256h-256q-71 0-136 24t-120 71v608l-128 58V351q-54-46-119-70t-137-25H384zm1408 255l-448 225l-448-225q0-36 1-76t8-81t20-77t36-67l-193-88v582H640v-640l704-320l704 320l-321 146l8 11q21 31 32 67t17 73t7 76t1 74m-448-627l-395 180l395 180l395-180zm0 709l320-161q-1-26-4-47t-11-41t-16-39t-23-42l-266 121l-266-121q-15 24-24 43t-16 38t-9 40t-4 49z" />
                            </svg></div>
                        <div class="icons-details mx-3">
                            <h3>Learn Skill</h3>
                            <h6>With Unlimited Courses</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- facalities end -->

        <!-- about company -->
        <section class="company-detail">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-7 company-img"><img src="images/company1.jpg" alt="" srcset=""></div>
                    <div class="col-12 col-lg-5 about-company">
                        <h5>About <span>iAcademy</span></h5>
                        <h2>Welcome to the Online Learning Center</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, simply free text by injected humour.</p>
                        <ul>
                            <li>Get unlimited access to 66000+ of our top courses</li>
                            <li>Explore a variety of fresh educational topics</li>
                            <li>Find the best qualitfied teacher for you</li>
                            <li>Transform access to education</li>
                        </ul>
                        <button type="submit" class="btn btn-primary">Read More</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="courcses">
            <div class="container">
                <div class="row title">
                    <h2>Our Popular Courses</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, ipsum.</p>
                </div>
                <div class="row course-list d-flex my-3">
                    <div class="col-12 col-md-6 col-lg-3 course">
                        <div class="img"><img src="images/cat-1.jpg" alt="" srcset=""></div>
                        <div class="icons">
                            <ul>
                                <li><i class="fa-regular fa-heart"></i></li>
                            </ul>
                        </div>
                        <div class="order-btn">
                            <button type="submit" class="btn-primary">Order Now</button>
                        </div>
                        <div class="course-detail">
                            <h3>Digital Leadership</h3>
                            <h5>Edward Bowman</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 course">
                        <div class="img"><img src="images/cat-2.jpg" alt="" srcset=""></div>
                        <div class="icons">
                            <ul>
                                <li><i class="fa-regular fa-heart"></i></li>
                            </ul>
                        </div>
                        <div class="order-btn">
                            <button type="submit" class="btn-primary">Order Now</button>
                        </div>
                        <div class="course-detail">
                            <h3>World Cultures</h3>
                            <h5>Edward Bowman</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 course">
                        <div class="img"><img src="images/cat-3.jpg" alt="" srcset=""></div>
                        <div class="icons">
                            <ul>
                                <li><i class="fa-regular fa-heart"></i></li>
                            </ul>
                        </div>
                        <div class="order-btn">
                            <button type="submit" class="btn-primary">Order Now</button>
                        </div>
                        <div class="course-detail">
                            <h3>Business English</h3>
                            <h5>Edward Bowman</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 course">
                        <div class="img"><img src="images/cat-4.jpg" alt="" srcset=""></div>
                        <div class="icons">
                            <ul>
                                <li><i class="fa-regular fa-heart"></i></li>
                            </ul>
                        </div>
                        <div class="order-btn">
                            <button type="submit" class="btn-primary">Order Now</button>
                        </div>
                        <div class="course-detail">
                            <h3>Social Computing</h3>
                            <h5>Edward Bowman</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="our-teacher">
            <div class="container">
                <div class="row title mt-5 mx-0">
                    <h2>Top Tutors in Every Subject.</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, ipsum.</p>
                </div>
                <div class="row teachers-list justify-content-between mx-auto">
                    <div class="col-12 col-sm-5 col-lg-3 teacher">
                        <div class="iamges">
                            <img src="images/teacher (2).jpg" alt="" srcset="">
                        </div>
                        <div class="teacher-detail">
                            <h3>Edward Bowman</h3>
                            <h5>Associate Professor</h5>
                        </div>
                    </div>
                    <div class="col-12 col-sm-5 col-lg-3 teacher">
                        <div class="iamges">
                            <img src="images/teacher (1).jpg" alt="" srcset="">
                        </div>
                        <div class="teacher-detail">
                            <h3>Denise Wood</h3>
                            <h5>Assistant Professor</h5>
                        </div>
                    </div>
                    <div class="col-12 col-sm-5 col-lg-3 teacher">
                        <div class="iamges">
                            <img src="images/teacher (3).jpg" alt="" srcset="">
                        </div>
                        <div class="teacher-detail">
                            <h3>Kathryn Webb</h3>
                            <h5>Teaching Assistant</h5>
                        </div>
                    </div>
                    <div class="col-12 col-sm-5 col-lg-3 teacher">
                        <div class="iamges">
                            <img src="images/teacher (4).jpg" alt="" srcset="">
                        </div>
                        <div class="teacher-detail">
                            <h3>Jennifer Powell</h3>
                            <h5>Associate Professor</h5>
                        </div>
                    </div>
                    <div class="col-12 col-sm-5 col-lg-3 teacher">
                        <div class="iamges">
                            <img src="images/teacher (5).jpg" alt="" srcset="">
                        </div>
                        <div class="teacher-detail">
                            <h3>Dave Robbins</h3>
                            <h5>Associate Professor</h5>
                        </div>
                    </div>
                    <div class="col-12 col-sm-5 col-lg-3 teacher">
                        <div class="iamges">
                            <img src="images/teacher (6).jpg" alt="" srcset="">
                        </div>
                        <div class="teacher-detail">
                            <h3>Keith Taylor</h3>
                            <h5>Associate Professor</h5>
                        </div>
                    </div>
                    <div class="col-12 col-sm-5 col-lg-3 teacher">
                        <div class="iamges">
                            <img src="images/teacher (7).jpg" alt="" srcset="">
                        </div>
                        <div class="teacher-detail">
                            <h3>Jennie King</h3>
                            <h5>Associate Professor</h5>
                        </div>
                    </div>
                    <div class="col-12 col-sm-5 col-lg-3 teacher">
                        <div class="iamges">
                            <img src="images/teacher (8).jpg" alt="" srcset="">
                        </div>
                        <div class="teacher-detail">
                            <h3>David Sanders</h3>
                            <h5>Associate Professor</h5>
                        </div>
                    </div>
                    <div class="col-12 col-sm-5 col-lg-3 teacher">
                        <div class="iamges">
                            <img src="images/teacher (9).jpg" alt="" srcset="">
                        </div>
                        <div class="teacher-detail">
                            <h3>Preston Marshall</h3>
                            <h5>Associate Professor</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="our-blog">
            <div class="container">
                <div class="row my-5">
                    <div class="part-1 col-12 col-sm-6">
                        <div class="row title2 t-start">
                            <h2>From Our Blog</h2>
                            <p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudinlorem quis bibendum
                                auci elit consequat ipsutis sem</p>
                        </div>
                        <div class="row blogs-list">
                            <div class="blog d-flex my-2">
                                <div class="images"><img src="images/blog (2).jpg" alt="" srcset=""></div>
                                <div class="blog-detail">
                                    <h2>Intercultural communication</h2>
                                    <h4>Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit
                                        amet orci eget eros...</h4>
                                    <h6>June 6, 2017</h6>
                                </div>
                            </div>
                            <div class="blog d-flex my-2">
                                <div class="images"><img src="images/blog (1).jpg" alt="" srcset=""></div>
                                <div class="blog-detail">
                                    <h2>Learning principles</h2>
                                    <h4>Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit
                                        amet orci eget eros...</h4>
                                    <h6>June 6, 2017</h6>
                                </div>
                            </div>
                            <div class="blog d-flex my-2">
                                <div class="images"><img src="images/blog (2).jpg" alt="" srcset=""></div>
                                <div class="blog-detail">
                                    <h2>Intercultural communication</h2>
                                    <h4>Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit
                                        amet orci eget eros...</h4>
                                    <h6>June 6, 2017</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="part-2 col-12 col-sm-6">
                        <img src="images/h1-img-8.jpg" alt="" srcset="">
                    </div>
                </div>
            </div>
        </section>


        <section class="clients-review">
            <div class="row title-back mt-5 mx-0">
                <h4>Our testimonials</h4>
                <h1>What they saying?</h1>
            </div>
            <div class="container">
                <div class="row review-list">
                    <!-- <div class="swiper mySwiper2 reviews">
                    <div class="row swiper-wrapper review-list">
                        <div class="col-12 col-sm-4 swiper-slide review-box">
                            <h3 class="main-title">Our Client's Said about us:</h3>
                            <p class="client-review">I was very impresed by the kitecx service lorem ipsum is simply
                                free
                                text used by copy
                                typing refreshing. Neque porro est qui dolorem ipsum. <span><a href="#">Read
                                        more</a></span>
                            </p>
                            <div class="client-id d-flex">
                                <div class="images"><img src="images/testimonial.png" alt="" srcset=""></div>
                                <div class="client-info">
                                    <h3 class="c-name">Chabhadiya krushil</h3>
                                    <h5 class="occupation">Web & Graphic DEsigner</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 swiper-slide review-box">
                            <h3 class="main-title">Our Client's Said about us:</h3>
                            <p class="client-review">I was very impresed by the kitecx service lorem ipsum is simply
                                free
                                text used by copy
                                typing refreshing. Neque porro est qui dolorem ipsum. <span><a href="#">Read
                                        more</a></span>
                            </p>
                            <div class="client-id d-flex">
                                <div class="images"><img src="images/testimonial.png" alt="" srcset=""></div>
                                <div class="client-info">
                                    <h3 class="c-name">Chabhadiya krushil</h3>
                                    <h5 class="occupation">Web & Graphic DEsigner</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 swiper-slide review-box">
                            <h3 class="main-title">Our Client's Said about us:</h3>
                            <p class="client-review">I was very impresed by the kitecx service lorem ipsum is simply
                                free
                                text used by copy
                                typing refreshing. Neque porro est qui dolorem ipsum. <span><a href="#">Read
                                        more</a></span>
                            </p>
                            <div class="client-id d-flex">
                                <div class="images"><img src="images/testimonial.png" alt="" srcset=""></div>
                                <div class="client-info">
                                    <h3 class="c-name">Chabhadiya krushil</h3>
                                    <h5 class="occupation">Web & Graphic DEsigner</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div> -->
                    <div class="col-12 col-sm-4 review-box">
                        <h3 class="main-title">Our Client's Said about us:</h3>
                        <p class="client-review">I was very impresed by the kitecx service lorem ipsum is simply free
                            text used by copy
                            typing refreshing. Neque porro est qui dolorem ipsum. <span><a href="#">Read more</a></span>
                        </p>
                        <div class="client-id d-flex">
                            <div class="images"><img src="images/testimonial.png" alt="" srcset=""></div>
                            <div class="client-info">
                                <h3 class="c-name">Chabhadiya krushil</h3>
                                <h5 class="occupation">Web & Graphic DEsigner</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 review-box">
                        <h3 class="main-title">Our Client's Said about us:</h3>
                        <p class="client-review">I was very impresed by the kitecx service lorem ipsum is simply free
                            text used by copy
                            typing refreshing. Neque porro est qui dolorem ipsum. <span><a href="#">Read more</a></span>
                        </p>
                        <div class="client-id d-flex">
                            <div class="images"><img src="images/testimonial.png" alt="" srcset=""></div>
                            <div class="client-info">
                                <h3 class="c-name">Chabhadiya krushil</h3>
                                <h5 class="occupation">Web & Graphic DEsigner</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 review-box">
                        <h3 class="main-title">Our Client's Said about us:</h3>
                        <p class="client-review">I was very impresed by the kitecx service lorem ipsum is simply free
                            text used by copy
                            typing refreshing. Neque porro est qui dolorem ipsum. <span><a href="#">Read more</a></span>
                        </p>
                        <div class="client-id d-flex">
                            <div class="images"><img src="images/testimonial.png" alt="" srcset=""></div>
                            <div class="client-info">
                                <h3 class="c-name">Chabhadiya krushil</h3>
                                <h5 class="occupation">Web & Graphic DEsigner</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="happy-clients">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6 clients-brands">
                        <h4>They Trusted us</h4>
                        <h2>Our Happy Clients</h2>
                        <p>There are many text variations of passages of Lorem Ipsum available, but the majority have
                            suffered.</p>
                        <ul class="brands-feature">
                            <li>Suspe ndisse suscipit sagittis leo.</li>
                            <li>Entum estibulum dignissim epeat.</li>
                            <li>There cursus massa at urnaaculis</li>
                            <li>Lorem Ipsum is not simply random text</li>
                        </ul>
                        <div class="project-ratio d-flex align-items-center">
                            <div class="images"><img src="images/company1.jpg" alt="" srcset=""></div>
                            <div class="project-detail">
                                <h2>40,780</h2>
                                <h5>Project Success</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="row justify-content-evenly">
                            <div class="col-5 brands m-1"><img src="images/brand (2).png" alt="" srcset=""></div>
                            <div class="col-5 brands m-1"><img src="images/brand (4).png" alt="" srcset=""></div>
                            <div class="col-5 brands m-1"><img src="images/brand (6).png" alt="" srcset=""></div>
                            <div class="col-5 brands m-1"><img src="images/brand (8).png" alt="" srcset=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- custome js -->
        <script src="js/own.js"></script>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
        <!-- fontawesome js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js"
            integrity="sha512-u3fPA7V8qQmhBPNT5quvaXVa1mnnLSXUep5PS1qo5NRzHwG19aHmNJnj1Q8hpA/nBWZtZD4r4AX6YOt5ynLN2g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper(".mySwiper", {
                spaceBetween: 30,
                centeredSlides: true,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
        </script>
        <script>
            var swiper = new Swiper(".mySwiper2", {
                slidesPerView: 3,
                spaceBetween: 30,
                freeMode: true,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
            });
        </script>
    </div>
</body>

</html>