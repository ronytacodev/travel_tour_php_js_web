<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <!-- swiper cdn link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/styles.css">

</head>

<body>

    <!-- header section starts -->

    <section class="header">

        <div>
            <!-- <a href="home.php" class="logo">travelero</a> -->
            <a href="home.php"><img src="images/logo_travel.png" alt=""></a>
        </div>

        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>
    <!-- header section ends -->

    <!-- home section starts -->

    <section class="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background: url(images/home-slide-1.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>travel around the world</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(images/home-slide-2.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>discover new places</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(images/home-slide-3.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>make your tour worthwhile</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>


    </section>

    <!-- home section ends -->

    <!-- services section starts -->

    <section class="services">

        <h1 class="heading-title">our services</h1>

        <div class="box-container">

            <div class="box">
                <img src="images/icon-1.png" alt="">
                <h3>adventure</h3>
            </div>

            <div class="box">
                <img src="images/icono2.png" alt="">
                <h3>tour guide</h3>
            </div>

            <div class="box">
                <img src="images/icono-3.png" alt="">
                <h3>trekking</h3>
            </div>

            <div class="box">
                <img src="images/icono-4.png" alt="">
                <h3>camp fire</h3>
            </div>

            <div class="box">
                <img src="images/icono-5.png" alt="">
                <h3>off road</h3>
            </div>

            <div class="box">
                <img src="images/icon-6.png" alt="">
                <h3>camping</h3>
            </div>

        </div>

    </section>

    <!-- services section ends -->

    <!-- home about section starts -->

    <section class="home-about">

        <div class="image">
            <img src="images/about-img.jpg" alt="">
        </div>

        <div class="content">
            <h3>about us</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium asperiores numquam totam dicta omnis voluptatem magnam eveniet laborum quos commodi adipisci eligendi magni molestias vero, molestiae odit accusantium quidem.</p>
            <a href="about.php" class="btn">read more</a>
        </div>

    </section>

    <!-- home about section ends -->

    <!-- home packages section starts -->

    <section class="home-packages">

        <h1 class="heading-title"> our packages</h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/img1.jpg" alt="">
                </div>

                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img2.jpg" alt="">
                </div>

                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img3.jpg" alt="">
                </div>

                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

        </div>

        <div class="load-more"><a href="package.php" class="btn">load more</a></div>

    </section>

    <!-- home packages section ends -->

    <!-- home offer section starts -->

    <section class="home-offer">
        <div class="content">
            <h3>up to 50% off</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis modi voluptatum sapiente ad optio quos sequi ullam labore necessitatibus excepturi? Facilis cupiditate totam consequuntur eveniet voluptates cumque molestias aperiam libero.</p>
            <a href="book.php" class="btn">book now</a>
        </div>
    </section>

    <!-- home offer section ends -->

    <!-- footer section starts -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
                <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
                <a href="#"><i class="fas fa-angle-right"></i>about us</a>
                <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
                <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"><i class="fas fa-phone"></i> +123-456-7890</a>
                <a href="#"><i class="fas fa-phone"></i> +111-222-333</a>
                <a href="#"><i class="fas fa-envelope"></i> rtacodev@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i> Lima- Perú</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i> facebook</a>
                <a href="#"><i class="fab fa-twitter"></i> twitter</a>
                <a href="#"><i class="fab fa-instagram"></i> instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i> linkedin</a>
            </div>

        </div>

        <div class="credit"> created by <span>Rony Taco Dev 2023</span> | all rights reserved! </div>

    </section>

    <!-- footer section ends -->

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".home-slider", {
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>


    <!-- custom js file link -->
    <script src="js/main.js"></script>

</body>

</html>