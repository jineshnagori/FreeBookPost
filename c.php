<?php
    session_start();
    if (isset($_SESSION['username']))
        echo '';
    else
        header('location:login.php');
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="e-books, free books, books, programming, hacking, html, css, javascript, reactjs, Engineering, technical, tech, python, R, C, C++">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Electronic library. Download books free. Finding books</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="Electronic library. Download books free. Finding books">
    <meta name="description" content="Electronic library. Download books free. Finding books | FreeBookPost. Download books for free. Find books">
    <meta name="robots" content="index,all">
    <meta name="author" content="FreeBookPost">
    <meta name="distribution" content="global">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="pragma" content="no-cache">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link REL="SHORTCUT ICON" HREF="img/favicon.png">
    <link rel="canonical" href="http://freebookpost.ml">
</head>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5f243e841a544e2a7275b8d0/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
<!--End of Tawk.to Script-->

<body>
    <!-- Page Preloder
    <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <!-- <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div> -->
        <div class="humberger__menu__widget">
            <!-- <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div> -->
            <div class="header__top__right__auth">
                <a href="logout.php"><i class="fa fa-user"></i> Logout</a>
            </div>
            
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.php">Home</a></li>
                <!-- <li><a href="./shop-grid.php">Shop</a></li> -->
                <li><a href="#">Engineering</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="#first">1st year</a></li>
                        <li><a href="#second">2nd year</a></li>
                        <li><a href="#third">3rd year</a></li>
                        <li><a href="#fourth">4th year</a></li>
                    </ul>
                </li>
                <!-- <li><a href="./blog.php">Blog</a></li> -->
                <li><a href="./contact.php">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i><a href="mailto:efreebookpost@gmail.com">contact@freebookpost.com</a></li>
                <li>Free e-Books for Everyone.</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i><a href="mailto:efreebookpost@gmail.com">contact@freebookpost.com</a></li>
                                <li>Free e-Books for Everyone.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                
                            </div>
                            <!-- <div class="header__top__right__language">
                                <img src="img/language.png" alt="">
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Spanis</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div> -->
                            <div class="header__top__right__auth">
                                <a href="logout.php"><i class="fa fa-user"></i> Logout</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.php"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./index.php">Home</a></li>
                            <!-- <li><a href="./shop-grid.php">Shop</a></li> -->
                            <li><a href="/index.php">Engineering</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="/index.php#first">1st year</a></li>
                                    <li><a href="/index.php#second">2nd year</a></li>
                                    <li><a href="/index.php#third">3rd year</a></li>
                                    <li><a href="/index.php#fourth">4th year</a></li>
                                </ul>
                            </li>
                            <!-- <li><a href="./blog.php">Blog</a></li> -->
                            <li><a href="./contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>$150.00</span></div>
                    </div>
                </div> -->
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                            <li><a href="hacking.php">Ethical Hacking</a></li>
                            <li><a href="hacking.php">Cyber Security</a></li>
                            <li><a href="index.php#Programming">Programming</a></li>
                            <li><a href="Website-Development.php">Website Development</a></li>
                            <li><a href="Android-&-IOS-Development.php">Android & IOS Development</a></li>
                            <li><a href="Software-Development.php">Software Development</a></li>
                            <li><a href="Data-Science.php">Data Science</a></li>
                            <li><a href="Digital-Marketing.php">Digital Marketing</a></li>
                            <li><a href="Digital-Marketing.php">Social Media Marketing</a></li>
                            <li><a href="novels.php">Novels</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="section-title">
                        <h2>C Language</h2>
                    </div>
                    <div class="section-title">
                        <p> C is a general-purpose, procedural computer programming language supporting structured programming, lexical variable scope, and recursion, with a static type system. By design, C provides constructs that map efficiently to typical machine instructions. It has found lasting use in applications previously coded in assembly language. Such applications include operating systems and various application software for computer architectures that range from supercomputers to PLCs and embedded systems.
                            <br><br>
                            A successor to the programming language B, C was originally developed at Bell Labs by Dennis Ritchie between 1972 and 1973 to construct utilities running on Unix. It was applied to re-implementing the kernel of the Unix operating system. During the 1980s, C gradually gained popularity. It has become one of the most widely used programming languages, with C compilers from various vendors available for the majority of existing computer architectures and operating systems. C has been standardized by the ANSI since 1989 (ANSI C) and by the International Organization for Standardization (ISO).</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Books</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <br />
                            <br />
                            <div class="row featured__filter">
                                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                                    <div class="featured__item">
                                        <a href="https://b-ok.asia/dl/3682896/2a45b5"><img src="img/c/C Programming Absolute Beginner???s Guide by Greg Perry Dean Miller (FreeBookPost).jpg"></a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood">
                                    <div class="featured__item">
                                        <a href="https://drive.google.com/file/d/1pf7Gpd5DqQGgwLEVfjd3t4EeizmUUcRk/view?usp=sharing"><img src="img/c/Let Us C, 16th edition by Yashavant Kanetkar (FreeBookPost).jpg"></a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fresh-meat">
                                    <div class="featured__item">
                                        <a href="https://b-ok.asia/dl/687057/6f6ab7"><img src="img/c/C Programming A Modern Approach, 2nd Edition(FreeBookPost).jpg"></a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood oranges">
                                    <div class="featured__item">
                                        <a href="https://drive.google.com/file/d/1THbWtdCEyNvn8JI12lK6Wj9nKGGrhpr-/view?usp=sharing"><img src="img/c/The C Programming Language (2nd Edition)(FreeBookPost).jpg"></a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
                                    <div class="featured__item">
                                        <a href=""><img src=""></a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fastfood">
                                    <div class="featured__item">
                                        <a href="https://b-ok.asia/dl/491852/6d04b7"><img src="img/c/Expert C Programming, Deep C Secrets by Peter van der Linden (FreeBookPost).jpg"></a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
                                    <div class="featured__item">
                                        <a href="https://b-ok.asia/dl/1239881/b4b93e"><img src="img/c/Head First C(FreeBookPost).jpg"></a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood vegetables">
                                    <div class="featured__item">
                                        <a href=""><img src=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- <li data-filter=".oranges">Oranges</li>
                            <li data-filter=".fresh-meat">Fresh Meat</li>
                            <li data-filter=".vegetables">Vegetables</li>
                            <li data-filter=".fastfood">Fastfood</li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.php"><img src="img/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: Somewhere in India</li>
                            <li>Phone: +91 123456789</li>
                            <a href="mailto:efreebookpost@gmail.com"><p>efreebookpost@gmail.com</p></a>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="hacking.php">Ethical Hacking</a></li>
                            <li><a href="hacking.php">Cyber Security</a></li>
                            <li><a href="index.php#Programming">Programming</a></li>
                            <li><a href="Website-Development.php">Website Development</a></li>
                            <li><a href="Android-&-IOS-Development.php">Android & IOS Development</a></li>
                        </ul>
                        <ul>
                            <li><a href="Software-Development.php">Software Development</a></li>
                            <li><a href="Data-Science.php">Data Science</a></li>
                            <li><a href="Digital-Marketing.php">Digital Marketing</a></li>
                            <li><a href="Digital-Marketing.php">Social Media Marketing</a></li>
                            <li><a href="novels.php">Novels</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest book and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p>&copy;Copyright <script>document.write(new Date().getFullYear());</script>. All Rights Reserved.</p></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>