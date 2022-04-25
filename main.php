
     <?php include('modal.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css?v=<?php echo time(); ?>" />
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js?v=<?php echo time(); ?>"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css?v=<?php echo time(); ?>" />

    <link rel="stylesheet" href="css/style_2.css?v=<?php echo time(); ?> ">
    
    
    <title>Tanzim Book Store</title>




</head>

<body>





    <!-- Header section -->
    <header class="header">

        <div class="header-1">
            <a href="#" class="logo">
                <i class="fa-solid fa-book-open-reader"> Garden of Eden</i>
            </a>
            <form action="" class="search-form">
                <input type="search" name="" placeholder="search here..." id="search-box">
                <label for="search-box" class="fas fa-search"></label>


            </form>
            <div class="icons">

                <div id="search-btn" class="fas fa-search"></div>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-shopping-cart"></a>
                <div id="login-btn" class="fas fa-user"> <a href="sign_up.php">Sign Up</a></div>

            </div>



        </div>


        <div class="header-2">
            <nav class="navbar">
                <a href="#home">Home</a>
                <a href="#featured">Featured</a>
                <a href="#arrivals">Arrivals</a>
                <a href="#reviews">Reviews</a>
                <a href="#blogs">Blogs</a>
            </nav>

        </div>


    </header>

    <!--Header Ends here-->
    <!--Bottom navbar-->
    <nav class="bottom-navbar">
        <a href="#home" class="fas fa-home"> </a>
        <a href="#featured" class="fas fa-list"></a>
        <a href="#arrivals" class="fas fa-tags"></a>
        <a href="#reviews" class="fas fa-comments"> </a>
        <a href="#blogs" class="fas fa-blog"></a>

    </nav>

    <!-- login form

    <div class="login-form-container">

        <div id="close-login-btn" class="fas fa-times">

        </div>
 -->

    <!-- 
        <form action="">
            <h3>Sign in</h3>

            <span>username</span>
            <input type="email" name="" class="box" placeholder="Enter your email" id="">

            <span>password</span>
            <input type="password" name="" class="box" placeholder="Enter your password" id="">

            <div class="checkbox">
                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me"> remember me </label>
            </div>

            <input type="submit" value="sign in" class="btn">

            <p>forget password ? <a href="#">click here</a></p>
            <p>don't have an account ? <a href="#">create one</a></p>

        </form>
    </div> -->
    <!-- for home section  start -->

    <section class="home" id="home">
        <div class="row">
            <div class="content">
                <h3>
                    upto 75%off
                </h3>
                <p>
                    Books express the improvement of the human mind.
                    The importance of books in arranging human life is immense.
                    We offer you the best quality books at the lowest prices.
                    Let us read books and play a role in shaping the country.
                    In every district of Bangladesh, at the fastest time, books are delivered.



                </p>
                <a href="#" class="btn"> shop now</a>
            </div>
            <div class="swiper books-slider"> 
                <div class="swiper-wrapper">
                    <a href="#" class="swiper-slide"> <img src="image/book-1.png" alt=""></a>
                    <a href="#" class="swiper-slide"> <img src="image/book-2.png" alt=""></a>
                    <a href="#" class="swiper-slide"> <img src="image/book-3.png" alt=""></a>
                    <a href="#" class="swiper-slide"> <img src="image/book-4.png" alt=""></a>
                    <a href="#" class="swiper-slide"> <img src="image/book-5.png" alt=""></a>
                    <a href="#" class="swiper-slide"> <img src="image/book-6.png" alt=""></a>
                </div>
               
               
                <img src="image/stand.png" class="stand" alt="">
 
            </div> 
        </div>

    </section>
    <!-- Home section ends -->
    <!-- icon section starts -->
    <section class="icons-container">

        <div class="icons">
            <i class="fas fa-plane">
                <div class="content">
                    <h3>
                        free shipping
                    </h3>
                    <p>
                        order over 700 tk
                    </p>

                </div>
            </i>

        </div>

        <div class="icons">
            <i class="fas fa-lock">
                <div class="content">
                    <h3>
                        secure payment
                    </h3>
                    <p>
                        100% secure payment
                    </p>

                </div>
            </i>

        </div>

        <div class="icons">
            <i class="fas fa-redo-alt">
                <div class="content">
                    <h3>
                        easy returns
                    </h3>
                    <p>
                        10 days returns
                    </p>

                </div>
            </i>

        </div>

        <div class="icons">
            <i class="fas fa-headset">
                <div class="content">
                    <h3>
                        24/7 support
                    </h3>
                    <p>
                        call us anytime
                    </p>

                </div>
            </i>

        </div>



    </section>

  
   
 

    <!-- icon section end -->

    <!-- Featured section starts -->

    <section class="featured" id="featured">
        <h1 class="heading">
            <span>
                featured books
            </span>
        </h1>
        <div class="swiper featured-slider">
            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"> </a>
                        <a href="#" class="fas fa-heart"> </a>
                        <a href="#" class="fas fa-eye"> </a>

                    </div>
                    <div class="image">
                        <img src="image/book-1.png" alt="">
                    </div>
                    <div class="content">
                        <h3>
                            featured books
                        </h3>
                        <div class="price">500 tk
                            <span>
                                1000 tk
                            </span>
                        </div>
                        <a href="#" class="btn"> add to cart</a>


                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"> </a>
                        <a href="#" class="fas fa-heart"> </a>
                        <a href="#" class="fas fa-eye"> </a>

                    </div>
                    <div class="image">
                        <img src="image/book-2.png" alt="">
                    </div>
                    <div class="content">
                        <h3>
                            featured books
                        </h3>
                        <div class="price">500 tk
                            <span>
                                1000 tk
                            </span>
                        </div>
                        <a href="#" class="btn"> add to cart</a>


                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"> </a>
                        <a href="#" class="fas fa-heart"> </a>
                        <a href="#" class="fas fa-eye"> </a>

                    </div>
                    <div class="image">
                        <img src="image/book-3.png" alt="">
                    </div>
                    <div class="content">
                        <h3>
                            featured books
                        </h3>
                        <div class="price">500 tk
                            <span>
                                1000 tk
                            </span>
                        </div>
                        <a href="#" class="btn"> add to cart</a>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"> </a>
                        <a href="#" class="fas fa-heart"> </a>
                        <a href="#" class="fas fa-eye"> </a>

                    </div>
                    <div class="image">
                        <img src="image/book-4.png" alt="">
                    </div>
                    <div class="content">
                        <h3>
                            featured books
                        </h3>
                        <div class="price">500 tk
                            <span>
                                1000 tk
                            </span>
                        </div>
                        <a href="#" class="btn"> add to cart</a>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"> </a>
                        <a href="#" class="fas fa-heart"> </a>
                        <a href="#" class="fas fa-eye"> </a>

                    </div>
                    <div class="image">
                        <img src="image/book-5.png" alt="">
                    </div>
                    <div class="content">
                        <h3>
                            featured books
                        </h3>
                        <div class="price">500 tk
                            <span>
                                1000 tk
                            </span>
                        </div>
                        <a href="#" class="btn"> add to cart</a>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"> </a>
                        <a href="#" class="fas fa-heart"> </a>
                        <a href="#" class="fas fa-eye"> </a>

                    </div>
                    <div class="image">
                        <img src="image/book-6.png" alt="">
                    </div>
                    <div class="content">
                        <h3>
                            featured books
                        </h3>
                        <div class="price">500 tk
                            <span>
                                1000 tk
                            </span>
                        </div>
                        <a href="#" class="btn"> add to cart</a>


                    </div>
                </div>



                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"> </a>
                        <a href="#" class="fas fa-heart"> </a>
                        <a href="#" class="fas fa-eye"> </a>

                    </div>
                    <div class="image">
                        <img src="image/book-7.png" alt="">
                    </div>
                    <div class="content">
                        <h3>
                            featured books
                        </h3>
                        <div class="price">500 tk
                            <span>
                                1000 tk
                            </span>
                        </div>
                        <a href="#" class="btn"> add to cart</a>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"> </a>
                        <a href="#" class="fas fa-heart"> </a>
                        <a href="#" class="fas fa-eye"> </a>

                    </div>
                    <div class="image">
                        <img src="image/book-8.png" alt="">
                    </div>
                    <div class="content">
                        <h3>
                            featured books
                        </h3>
                        <div class="price">500 tk
                            <span>
                                1000 tk
                            </span>
                        </div>
                        <a href="#" class="btn"> add to cart</a>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"> </a>
                        <a href="#" class="fas fa-heart"> </a>
                        <a href="#" class="fas fa-eye"> </a>

                    </div>
                    <div class="image">
                        <img src="image/book-9.png" alt="">
                    </div>
                    <div class="content">
                        <h3>
                            featured books
                        </h3>
                        <div class="price">500 tk
                            <span>
                                1000 tk
                            </span>
                        </div>
                        <a href="#" class="btn"> add to cart</a>


                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"> </a>
                        <a href="#" class="fas fa-heart"> </a>
                        <a href="#" class="fas fa-eye"> </a>

                    </div>
                    <div class="image">
                        <img src="image/book-10.png" alt="">
                    </div>
                    <div class="content">
                        <h3>
                            featured books
                        </h3>
                        <div class="price">500 tk
                            <span>
                                1000 tk
                            </span>
                        </div>
                        <a href="#" class="btn"> add to cart</a>


                    </div>
                </div>












            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>



        </div>









    </section>




    <!-- Featured section ends -->


    <!--Newsletter section starts-->

    <section class="newsletter">
        <form action="">
            <h3>
                Subscribe for updates
            </h3>
            <input type="email" name="" placeholder="Enter your email" id="" class="box">
            <input type="submit" value="subscribe" class="btn">

        </form>
    </section>

    <!--Newsletter section end-->
    <!-- Arrival section starts -->
   <section class="arrivals" id="arrivals">
        <h1 class="heading"><span>new arrivals</span></h1>

        <div class="swiper arrivals-slider">
            <div class="swiper-wrapper">

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-1.png" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">400Tk <span>500Tk</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>

                        </div>
                    </div>
                </a>
                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-2.png" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">400Tk <span>500Tk</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>

                        </div>
                    </div>
                </a>
                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-3.png" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">400Tk <span>500Tk</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>

                        </div>
                    </div>
                </a>
                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-4.png" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">400Tk <span>500Tk</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>

                        </div>
                    </div>
                </a>
                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-5.png" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">400Tk <span>500Tk</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>

                        </div>
                    </div>
                </a>




            </div>
        </div>


        <div class="swiper arrivals-slider">
            <div class="swiper-wrapper">



                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-6.png" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">400Tk <span>500Tk</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>

                        </div>
                    </div>
                </a>
                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-7.png" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">400Tk <span>500Tk</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>

                        </div>
                    </div>
                </a>
                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-8.png" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">400Tk <span>500Tk</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>

                        </div>
                    </div>
                </a>
                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-9.png" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">400Tk <span>500Tk</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>

                        </div>
                    </div>
                </a>
                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-10.png" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">400Tk <span>500Tk</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>

                        </div>
                    </div>
                </a>



            </div>
        </div>


    </section>



    <!-- Arrival section end -->

    <!--deal section starts-->
    <section class="deal">

        <div class="content">
            <h3>Deal of the day</h3>
            <h1>Upto 50% off</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur,
                adipisicing elit. Ad vitae vero quisquam quos,
                tenetur molestiae delectus autem, consequatur aliquam facere expedita harum,
                quidem at exercitationem obcaecati repudiandae voluptatibus eligendi omnis.
            </p>
            <a href="#" class="btn">Shop now</a>

        </div>
        <div class="image">
            <img src="image/deal-img.jpg" alt="">
        </div>
    </section>

    <!--deal section end-->

    <!--reviews section starts-->
    <section class="reviews" id="reviews">
        <h1 class="heading">
            <span>client's reviews </span>
        </h1>
        <div class="swiper reviews-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">

                    <img src="image/pic-1.png" alt="">
                    <h3>Rubel Hasan</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Culpa ab ea impedit similique adipisci, vel velit pariatur dolore repellat. Molestiae.

                    </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="image/pic-2.png" alt="">
                    <h3>Rohima Kawser</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Culpa ab ea impedit similique adipisci, vel velit pariatur dolore repellat. Molestiae.

                    </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="image/pic-3.png" alt="">
                    <h3>Sakib Al Hasan</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Culpa ab ea impedit similique adipisci, vel velit pariatur dolore repellat. Molestiae.

                    </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="image/pic-4.png" alt="">
                    <h3>Mehjabin</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Culpa ab ea impedit similique adipisci, vel velit pariatur dolore repellat. Molestiae.

                    </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="image/pic-5.png" alt="">
                    <h3>Mubin</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Culpa ab ea impedit similique adipisci, vel velit pariatur dolore repellat. Molestiae.

                    </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="image/pic-6.png" alt="">
                    <h3>Tailor swift</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Culpa ab ea impedit similique adipisci, vel velit pariatur dolore repellat. Molestiae.

                    </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>






            </div>
        </div>
    </section>
    <!--reviews section ends-->

    <!--blogs section start-->

    <section class="blogs" id="blogs">
        <h1 class="heading"><span>our blogs</span></h1>
        <div class="swiper blogs-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/blog-1.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>
                            Blog Title goes here
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Adipisci tempore, quia consectetur culpa suscipit voluptatem nulla similique
                            aliquam nostrum quam iure magnam consequuntur,
                            repudiandae fugiat ipsa aspernatur voluptatibus animi voluptas.
                        </p>
                        <a href="#" class="btn">Read more</a>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/blog-2.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>
                            Blog Title goes here
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Adipisci tempore, quia consectetur culpa suscipit voluptatem nulla similique
                            aliquam nostrum quam iure magnam consequuntur,
                            repudiandae fugiat ipsa aspernatur voluptatibus animi voluptas.
                        </p>
                        <a href="#" class="btn">Read more</a>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/blog-3.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>
                            Blog Title goes here
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Adipisci tempore, quia consectetur culpa suscipit voluptatem nulla similique
                            aliquam nostrum quam iure magnam consequuntur,
                            repudiandae fugiat ipsa aspernatur voluptatibus animi voluptas.
                        </p>
                        <a href="#" class="btn">Read more</a>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/blog-4.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>
                            Blog Title goes here
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Adipisci tempore, quia consectetur culpa suscipit voluptatem nulla similique
                            aliquam nostrum quam iure magnam consequuntur,
                            repudiandae fugiat ipsa aspernatur voluptatibus animi voluptas.
                        </p>
                        <a href="#" class="btn">Read more</a>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/blog-5.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>
                            Blog Title goes here
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Adipisci tempore, quia consectetur culpa suscipit voluptatem nulla similique
                            aliquam nostrum quam iure magnam consequuntur,
                            repudiandae fugiat ipsa aspernatur voluptatibus animi voluptas.
                        </p>
                        <a href="#" class="btn">Read more</a>
                    </div>
                </div>

            </div>
        </div>

    </section>





    

    <!--blogs section ends-->

    <!--footer section start-->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Our locations</h3>
                <a href="#">
                    <i class="fas fa-map-marker-alt">

                    </i>
                    CHITTAGONG
                </a>
                <a href="#">
                    <i class="fas fa-map-marker-alt">

                    </i>
                    DHAKA
                </a>
                <a href="#">
                    <i class="fas fa-map-marker-alt">

                    </i>
                    KHULNA
                </a>
                <a href="#">
                    <i class="fas fa-map-marker-alt">

                    </i>
                    RAJSHAHI
                </a>
                <a href="#">
                    <i class="fas fa-map-marker-alt">

                    </i>
                    BARISAL
                </a>
                <a href="#">
                    <i class="fas fa-map-marker-alt">

                    </i>
                    JESSORE
                </a>
            </div>
            <div class="box">
                <h3>quick links</h3>
                <a href="#">
                    <i class="fas fa-arrow-right">

                    </i>
                    home
                </a>

                <a href="#">
                    <i class="fas fa-arrow-right">

                    </i>
                    featured
                </a>
                <a href="#">
                    <i class="fas fa-arrow-right">

                    </i>
                    arrivals
                </a>
                <a href="#">
                    <i class="fas fa-arrow-right">

                    </i>
                    reviews
                </a>
                <a href="#">
                    <i class="fas fa-arrow-right">

                    </i>
                    blogs
                </a>



            </div>
            <div class="box">
                <h3>extra links</h3>
                <a href="#">
                    <i class="fas fa-arrow-right">

                    </i>
                    account info
                </a>
                <a href="#">
                    <i class="fas fa-arrow-right">

                    </i>
                    order items
                </a>
                <a href="#">
                    <i class="fas fa-arrow-right">

                    </i>
                    privacy policy
                </a>
                <a href="#">
                    <i class="fas fa-arrow-right">

                    </i>
                    payment method
                </a>
                <a href="#">
                    <i class="fas fa-arrow-right">

                    </i>
                    our services
                </a>



            </div>
            <div class="box">
                <h3>contact info</h3>
                <a href="#">
                    <i class="fas fa-phone">

                    </i>
                    01852110385
                </a>
                <a href="#">
                    <i class="fas fa-phone">

                    </i>
                    01752110385
                </a>
                <a href="#">
                    <i class="fas fa-envelope">

                    </i>
                    wazihullahtanzim@gmail.com
                </a>
                <img src="image/worldmap.png" class="map" alt="">

            </div>

        </div>


        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-pinterest"></a>

        </div>
        <div class="credit">
            created by <span>Mr. Wazih Ullah Tanzim </span>| all right reserved!
        </div>



    </section>


    <!--footer section ends-->
    <!--loader section start-->


    <!-- <div class="loader-container">
        <img src="image/loader-img.gif" alt="">
    </div>

     -->
    <!--loader section ends-->







 
    <script src="js/script.js?v=<?php echo time(); ?> "> </script>
           
    <script type="text/javascript">
        $(document).ready(function () {
            setTimeout(function () {
                $("#exampleModalCenter").modal("show");
            }, 2000);
        });
    </script>

    <!-- aos <script> -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>






</body>

</html>