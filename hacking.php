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
                        <li><a href="index.php#first">1st year</a></li>
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
                            <li><a href="./index.php">Home</a></li>
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
                        <h2>Ethical Hacking | Cyber Security</h2>
                    </div>
                    <div class="section-title">
                        <p> <b>Ethical Hacker :</b> Hacker who uses his/her skills to find the loopholes of the given system. The reason behind calling him/her ethical is the server / system admin himself grant permission them to find the loopholes in it. Generally an MoU is signed between the ethical hacker and system admin regarding the level of sensitive information accessibility so that they can't get cyber bullied by them.<br>USES HIS SKILLS OFFENSIVELY.
                            <br>
                            <br>
                            <b>Cyber Security Expert :</b> They are the security expert who secure the system from the real hacker. They monitor the system and regularly watching the firewall. They trace the real hacker whenever the security of the system is compromised by them.<br>USES HIS SKILLS DEFENSIVELY.</p>
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
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="featured__item">
                                        <a href="https://b-ok.asia/dl/2884045/db70a6"><img src="img/hacking/Advanced Penetration Testing - Hacking the World's Most Secure Networks(FreeBookPost).jpg"></a>
                                    </div>
                                </div><div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="featured__item">
                                        <a href="https://b-ok.asia/dl/5266200/4f10da"><img src="img/hacking/Computer Hacking Beginners Guide How to Hack Wireless Network, Basic Security and Penetration Testing, Kali Linux, Your First Hack(FreeBookPost).jpg"></a>
                                    </div>
                                </div><div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="featured__item">
                                        <a href="https://b-ok.asia/dl/1053096/dc0318"><img src="img/hacking/Hacking The Art of Exploitation, 2nd Edition(FreeBookPost).jpg"></a>
                                    </div>
                                </div><div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="featured__item">
                                        <a href="https://b-ok.asia/dl/2951816/2788eb"><img src="img/hacking/The Hacker Playbook 2 Practical Guide To Penetration Testing(FreeBookPost).jpg"></a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="featured__item">
                                        <a href="https://b-ok.asia/dl/463424/fffb67"><img src="img/hacking/A Beginners Guide To Hacking Computer Systems (FreeBookPost).jpg"></a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="featured__item">
                                        <a href="https://b-ok.asia/dl/2482934/59f10f"><img src="img/hacking/Penetration Testing A Hands-On Introduction to Hacking(FreeBookPost).jpg"></a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fresh-meat">
                                    <div class="featured__item">
                                        <a href="https://b-ok.asia/dl/2334697/1c1abb"><img src="img/hacking/Android Hacker's Handbook [Drake, Oliva, Lanier, Mulliner, Ridley & Wicherski 2014-03-31](FreeBookPost).jpg"></a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood oranges">
                                    <div class="featured__item">
                                        <a href="https://b-ok.asia/dl/2475649/265af9"><img src="img/hacking/Black Hat Python Python Programming for Hackers and Pentesters by Justin Seitz (FreeBookPost).jpg"></a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
                                    <div class="featured__item">
                                        <a href="https://b-ok.asia/dl/5216810/c0245b"><img src="img/hacking/CEH v10 Certified Ethical Hacker Study Guide by Ric Messier (FreeBookPost).jpg"></a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fastfood">
                                    <div class="featured__item">
                                        <a href="https://b-ok.asia/dl/550692/0cdc77"><img src="img/hacking/Computer Forensics For Dummies by Linda Volonino, Reynaldo Anzaldua (FreeBookPost).jpg"></a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
                                    <div class="featured__item">
                                        <a href="https://b-ok.asia/dl/2369326/d120cd"><img src="img/hacking/Ethical Hacking and Penetration Testing Guide by Rafay Baloch (FreeBookPost).jpg"></a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood vegetables">
                                    <div class="featured__item">
                                        <a href="https://b-ok.asia/dl/610566/fafae7"><img src="img/hacking/Gray Hat Python Python Programming for Hackers and Reverse Engineers by Justin Seitz (FreeBookPost).jpg"></a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="featured__item">
                                        <a href="https://b-ok.asia/dl/5604420/0df92a"><img src="img/hacking/Hacking The Unlocking of Transparency Security is a myth??? by Ashutosh Pratap Singh (Joker) (FreeBookPost).jpg"></a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="featured__item">
                                        <a href="https://b-ok.asia/dl/458893/5ed3e9"><img src="img/hacking/Hacking Wireless Networks For Dummies(FreeBookPost).jpg"></a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="featured__item">
                                        <a href="https://b-ok.asia/dl/1274723/520aec"><img src="img/hacking/Practical Malware Analysis The Hands-On Guide to Dissecting Malicious Software(FreeBookPost).jpg"></a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="featured__item">
                                        <a href="https://drive.google.com/file/d/14bwZ4YkQ_b3ajdFoSKQH1ZXC-p8KXqXy/view?usp=sharing"><img src="img/hacking/Prophet Hacker Android Hacking Blog Book(FreeBookPost).jpg"></a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="featured__item">
                                        <a href="https://b-ok.asia/dl/1185518/5038a8"><img src="img/hacking/The Basics of Hacking and Penetration Testing Ethical Hacking and Penetration Testing Made Easy(FreeBookPost).jpg"></a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="featured__item">
                                        <a href="https://b-ok.asia/dl/5532774/f93baf"><img src="img/hacking/The Beginner's Complete Guide to Computer Hacking(FreeBookPost).jpg"></a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="featured__item">
                                        <a href="https://b-ok.asia/dl/737736/fc8f5b"><img src="img/hacking/The New Hacker's Dictionary (FreeBookPost).jpg"></a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="featured__item">
                                        <a href="https://b-ok.asia/dl/606838/a750fb"><img src="img/hacking/The Shellcoder's Handbook Discovering and Exploiting Security Holes(FreeBookPost).jpg"></a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="featured__item">
                                        <a href="https://b-ok.asia/dl/3401544/a6ae5b"><img src="img/hacking/The Web Application Hackers Handbook Finding and Exploiting Security Flaws by Dafydd Stuttard, Marcus Pinto (FreeBookPost).jpg"></a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="featured__item">
                                        <a href="https://drive.google.com/file/d/1MMiSJsTQw1M_ZOecrDUqlKZAySND6lKr/view?usp=sharing"><img src="img/hacking/ubuntu_linux_toolbox_1000__commands_for_power_users(FreeBookPost).jpg"></a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="featured__item">
                                        <a href="https://drive.google.com/file/d/1un-rw4dDsL5NF2JR_X5tcBzKO4f8RMaW/view?usp=sharing"><img src="img/hacking/Vulnerability Management for Dummies(FreeBookPost),jpg.PNG"></a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="featured__item">
                                        <a href="https://drive.google.com/file/d/1KABJ6dFrDPf2C8giwP_YEKZupKonTKcY/view?usp=sharing"><img src="img/hacking/WiFi Hacking for Beginners - James Wells(FreeBookPost).jpg"></a>
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