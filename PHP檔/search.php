<!DOCTYPE html>
<html lang="en">
<head>
    <title>查詢結果</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- ElegantFonts CSS -->
    <link rel="stylesheet" href="css/elegant-fonts.css">

    <!-- themify-icons CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
    <!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<style type="text/css">
     ul { /* 取消ul預設的內縮及樣式 */
        margin: 0;
        padding: 0;
        list-style: none;
    }

    ul.drop-down-menu {
        
        display: inline-block;
        font-family: 'Open Sans', Arial, sans-serif;
        font-size: 13px;
        color: white;
        background-color: white;

    }

    ul.drop-down-menu li {
        position: relative;
        white-space: nowrap;
        border-right: lightgreen 1px solid;
    }

    ul.drop-down-menu > li:last-child {
        border-right: none;
    }

    ul.drop-down-menu > li {
        float: left; /* 只有第一層是靠左對齊*/
    }

     ul.drop-down-menu a {
        
        display: block;
        padding: 0 30px;
        text-decoration: none;
        line-height: 40px;
        background-color: white;

    }
    ul.drop-down-menu a:hover { /* 滑鼠滑入按鈕變色*/
        background-color: lightgreen;
        color: white;

    }
    ul.drop-down-menu li:hover > a { /* 滑鼠移入次選單上層按鈕保持變色*/
        background-color: lightgreen;
        color: white;
        
    }
     ul.drop-down-menu ul {
        border: #ccc 1px solid;
        position: absolute;
        z-index: 99;
        left: -1px;
        top: 100%;
       min-width: 180px;
    }

    ul.drop-down-menu ul li {
        border-bottom: #ccc 1px solid;
    }

    ul.drop-down-menu ul li:last-child {
        border-bottom: none;
    }

    ul.drop-down-menu ul ul { /*第三層以後的選單出現位置與第二層不同*/
        z-index: 999;
        top: 10px;
        left: 90%;
    }
      ul.drop-down-menu ul { /*隱藏次選單*/
        display: none;
    }

    ul.drop-down-menu li:hover > ul { /* 滑鼠滑入展開次選單*/
        display: block;
    }
</style>
</head>
<body class="contact-page">
    <div class="page-header">
        <header class="site-header">
            <div class="top-header-bar">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-lg-6 d-none d-md-flex flex-wrap justify-content-center justify-content-lg-start mb-3 mb-lg-0">
                            
                        </div><!-- .col -->

                        <div class="col-12 col-lg-6 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center">
                            <div class="header-bar-search">
                                <form class="flex align-items-stretch">
                                    <input type="search" placeholder="今天想學習什麼課程？">
                                    <button type="submit" value="" class="flex justify-content-center align-items-center"><i class="fa fa-search"></i></button>
                                </form>
                            </div><!-- .header-bar-search -->

                            <div class="header-bar-menu">
                                <ul class="flex justify-content-center align-items-center py-2 pt-md-0">
                                    <li><a href="register.html">註冊</a></li>
                                    <li><a href="login.html" style="color:lightgreen;">登入</a></li>
                                </ul>
                            </div><!-- .header-bar-menu -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .container-fluid -->
            </div><!-- .top-header-bar -->

            <div class="nav-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-9 col-lg-6">
                            <div class="site-branding">
                                <h1 class="site-title"><a href="index.html" rel="home">學習<span>王</span></a></h1>
                            </div><!-- .site-branding -->
                        </div><!-- .col -->

                        
                   <div class="align-items-stretch col-5 col-lg-6">
                           
                                <ul class="drop-down-menu">
        <li><a href="index.html">首頁</a> 
        </li>


        <li><a href="about.html">個人頁面</a>
            <ul>
                <li><a href="favorite.html">我的收藏</a>
                </li>
                <li><a href="history.html">最近觀看</a>
                </li>
            </ul>
        </li>



        <li><a href="course.html">課程</a></li>
        <li><a href="blog.html">上傳區</a></li>
        <li><a href="contact.html">聯絡</a></li>       
        
    </ul>



                                <div class="hamburger-menu d-lg-none">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div><!-- .hamburger-menu -->

                            </nav><!-- .site-navigation -->
                        </div><!-- .col -->
                   
                </div><!-- .container -->
        </header><!-- .site-header -->

        <div class="page-header-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <header class="entry-header">
                            <h1>查詢結果</h1>
                        </header><!-- .entry-header -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .page-header-overlay -->
    </div><!-- .page-header -->

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs">
                    <ul class="flex flex-wrap align-items-center p-0 m-0">
                        <li><a href="index.html"><i class="fa fa-home"></i> 首頁</a></li>
                        <li>查詢結果</li>
                    </ul>
                </div><!-- .breadcrumbs -->
            </div><!-- .col -->
        </div><!-- .row -->

        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="blog-posts">
                    <div class="row mx-m-25">
                        <div class="col-12 col-md-6 px-25">
                            <div class="blog-post-content">
                                <figure class="blog-post-thumbnail position-relative m-0">
                                    <a href="#"><img src="images/b-1.jpg" alt=""></a>

                                    <div class="posted-date position-absolute">
                                        <div class="day">23</div>
                                        <div class="month">mar</div>
                                    </div>
                                </figure><!-- .blog-post-thumbnail -->

                                <div class="blog-post-content-wrap">
                                    <header class="entry-header">
                                        <h2 class="entry-title"><a href="#">計算機概論</a></h2>

                                        <div class="entry-meta flex align-items-center">
                                            <div class="post-author"><a href="#">台灣大學 李XX教授 </a></div>

                                            <div class="post-comments"><a href="#">02 Comments</a></div>
                                        </div><!-- .entry-meta -->
                                    </header><!-- .entry-header -->

                                    <div class="entry-content">
                                        <p >C++是一種被廣泛使用的計算機程序設計語言。它是一種通用程序設計語言，支援多重編程模式，例如程序化程序設 …</p>
                                    </div><!-- .entry-content -->
                                    <div class="course-ratings flex justify-content-end align-items-center">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star-o"></span>

                                        <span class="course-ratings-count">(4 votes)</span>
                                    </div><!-- .course-ratings -->
                                </div><!-- .blog-post-content-wrap -->
                            </div><!-- .blog-post-content -->
                        </div><!-- .col -->

                        <div class="col-12 col-md-6 px-25">
                            <div class="blog-post-content">
                                <figure class="blog-post-thumbnail position-relative m-0">
                                    <a href="#"><img src="images/b-2.jpg" alt=""></a>

                                    <div class="posted-date position-absolute">
                                        <div class="day">23</div>
                                        <div class="month">mar</div>
                                    </div>
                                </figure><!-- .blog-post-thumbnail -->

                                <div class="blog-post-content-wrap">
                                    <header class="entry-header">
                                        <h2 class="entry-title"><a href="#">計算機程式設計</a></h2>

                                        <div class="entry-meta flex align-items-center">
                                            <div class="post-author"><a href="#">台灣大學 王XX教授 </a></div>

                                            <div class="post-comments"><a href="#">02 Comments</a></div>
                                        </div><!-- .entry-meta -->
                                    </header><!-- .entry-header -->

                                    <div class="entry-content">
                                        <p>C++是一種被廣泛使用的計算機程序設計語言。它是一種通用程序設計語言，支援多重編程模式，例如程序化程序設 …</p>
                                    </div><!-- .entry-content -->
                                    <div class="course-ratings flex justify-content-end align-items-center">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star-o"></span>

                                        <span class="course-ratings-count">(4 votes)</span>
                                    </div><!-- .course-ratings -->
                                </div><!-- .blog-post-content-wrap -->
                            </div><!-- .blog-post-content -->
                        </div><!-- .col -->

                        <div class="col-12 col-md-6 px-25">
                            <div class="blog-post-content">
                                <figure class="blog-post-thumbnail position-relative m-0">
                                    <a href="#"><img src="images/b-3.jpg" alt=""></a>

                                    <div class="posted-date position-absolute">
                                        <div class="day">23</div>
                                        <div class="month">mar</div>
                                    </div>
                                </figure><!-- .blog-post-thumbnail -->

                                <div class="blog-post-content-wrap">
                                    <header class="entry-header">
                                        <h2 class="entry-title"><a href="#">計算機概論與程式設計</a></h2>

                                        <div class="entry-meta flex align-items-center">
                                            <div class="post-author"><a href="#">台灣大學 王XX教授 </a></div>

                                            <div class="post-comments"><a href="#">02 Comments</a></div>
                                        </div><!-- .entry-meta -->
                                    </header><!-- .entry-header -->

                                    <div class="entry-content">
                                        <p>C++是一種被廣泛使用的計算機程序設計語言。它是一種通用程序設計語言，支援多重編程模式，例如程序化程序設 …</p>
                                    </div><!-- .entry-content -->
                                    <div class="course-ratings flex justify-content-end align-items-center">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star-o"></span>

                                        <span class="course-ratings-count">(4 votes)</span>
                                    </div><!-- .course-ratings -->
                                </div><!-- .blog-post-content-wrap -->
                            </div><!-- .blog-post-content -->
                        </div><!-- .col -->

                        <div class="col-12 col-md-6 px-25">
                            <div class="blog-post-content">
                                <figure class="blog-post-thumbnail position-relative m-0">
                                    <a href="#"><img src="images/b-4.jpg" alt=""></a>

                                    <div class="posted-date position-absolute">
                                        <div class="day">23</div>
                                        <div class="month">mar</div>
                                    </div>
                                </figure><!-- .blog-post-thumbnail -->

                                <div class="blog-post-content-wrap">
                                    <header class="entry-header">
                                        <h2 class="entry-title"><a href="#">計算機概論與程式設計</a></h2>

                                        <div class="entry-meta flex align-items-center">
                                            <div class="post-author"><a href="#">台灣大學 王XX教授 </a></div>

                                            <div class="post-comments"><a href="#">02 Comments</a></div>
                                        </div><!-- .entry-meta -->
                                    </header><!-- .entry-header -->

                                    <div class="entry-content">
                                        <p>C++是一種被廣泛使用的計算機程序設計語言。它是一種通用程序設計語言，支援多重編程模式，例如程序化程序設 …</p>
                                    </div><!-- .entry-content -->
                                    <div class="course-ratings flex justify-content-end align-items-center">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star-o"></span>

                                        <span class="course-ratings-count">(4 votes)</span>
                                    </div><!-- .course-ratings -->
                                </div><!-- .blog-post-content-wrap -->
                            </div><!-- .blog-post-content -->
                        </div><!-- .col -->

                        <div class="col-12 col-md-6 px-25">
                            <div class="blog-post-content">
                                <figure class="blog-post-thumbnail position-relative m-0">
                                    <a href="#"><img src="images/b-5.jpg" alt=""></a>

                                    <div class="posted-date position-absolute">
                                        <div class="day">23</div>
                                        <div class="month">mar</div>
                                    </div>
                                </figure><!-- .blog-post-thumbnail -->

                                <div class="blog-post-content-wrap">
                                    <header class="entry-header">
                                        <h2 class="entry-title"><a href="#">計算機概論與程式設計</a></h2>

                                        <div class="entry-meta flex align-items-center">
                                            <div class="post-author"><a href="#">台灣大學 王XX教授 </a></div>

                                            <div class="post-comments"><a href="#">02 Comments</a></div>
                                        </div><!-- .entry-meta -->
                                    </header><!-- .entry-header -->

                                    <div class="entry-content">
                                        <p>C++是一種被廣泛使用的計算機程序設計語言。它是一種通用程序設計語言，支援多重編程模式，例如程序化程序設 …</p>
                                    </div><!-- .entry-content -->
                                    <div class="course-ratings flex justify-content-end align-items-center">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star-o"></span>

                                        <span class="course-ratings-count">(4 votes)</span>
                                    </div><!-- .course-ratings -->
                                </div><!-- .blog-post-content-wrap -->
                            </div><!-- .blog-post-content -->
                        </div><!-- .col -->

                        <div class="col-12 col-md-6 px-25">
                            <div class="blog-post-content">
                                <figure class="blog-post-thumbnail position-relative m-0">
                                    <a href="#"><img src="images/b-6.jpg" alt=""></a>

                                    <div class="posted-date position-absolute">
                                        <div class="day">23</div>
                                        <div class="month">mar</div>
                                    </div>
                                </figure><!-- .blog-post-thumbnail -->

                                <div class="blog-post-content-wrap">
                                    <header class="entry-header">
                                        <h2 class="entry-title"><a href="#">計算機概論與程式設計</a></h2>

                                        <div class="entry-meta flex align-items-center">
                                            <div class="post-author"><a href="#">台灣大學 王XX教授 </a></div>

                                            <div class="post-comments"><a href="#">02 Comments</a></div>
                                        </div><!-- .entry-meta -->
                                    </header><!-- .entry-header -->

                                    <div class="entry-content">
                                        C++是一種被廣泛使用的計算機程序設計語言。它是一種通用程序設計語言，支援多重編程模式，例如程序化程序設 …</p>
                                    </div><!-- .entry-content -->
                                    <div class="course-ratings flex justify-content-end align-items-center">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star-o"></span>

                                        <span class="course-ratings-count">(4 votes)</span>
                                    </div><!-- .course-ratings -->
                                </div><!-- .blog-post-content-wrap -->
                            </div><!-- .blog-post-content -->
                        </div><!-- .col -->
                    </div><!-- .blog-posts -->
                </div><!-- .col -->

                <div class="pagination flex flex-wrap justify-content-between align-items-center">
                    <div class="col-12 col-lg-4 order-2 order-lg-1 mt-3 mt-lg-0">
                        <ul class="flex flex-wrap align-items-center order-2 order-lg-1 p-0 m-0">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div>

                    <div class="col-12 flex justify-content-start justify-content-lg-end col-lg-8 order-1 order-lg-2">
                        <div class="pagination-results flex flex-wrap align-items-center">
                            <p class="m-0">Showing 1–3 of 12 results</p>

                            <form>
                                <select>
                                    <option>Show: 06</option>
                                    <option>Show: 12</option>
                                    <option>Show: 18</option>
                                    <option>Show: 24</option>
                                </select>
                            </form>
                        </div><!-- .pagination-results -->
                    </div>
                </div><!-- .pagination -->
            </div><!-- .col -->

            <div class="col-12 col-lg-4">
                <div class="sidebar">
                    <div class="search-widget">
                        <form class="flex flex-wrap align-items-center">
                            <input type="search" placeholder="搜尋...">
                            <button type="submit" class="flex justify-content-center align-items-center"><i class="fa fa-search"></i></button>
                        </form><!-- .flex -->
                    </div><!-- .search-widget -->

                    <div class="cat-links">
                        <h2>分類</h2>

                        <ul class="p-0 m-0">
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Marketing</a></li>
                            <li><a href="#">MBA Courses</a></li>
                            <li><a href="#">Technology</a></li>
                            <li><a href="#">Web Development</a></li>
                        </ul>
                    </div><!-- .cat-links -->

                    <div class="latest-courses">
                        <h2>最新課程</h2>

                        <ul class="p-0 m-0">
                            <li class="flex flex-wrap justify-content-between align-items-start">
                                <img src="images/t-1.jpg" alt="">

                                <div class="content-wrap">
                                    <h3><a href="#">計算機概論與程式設計1</a></h3>

                                    <div class="course-cost free-cost"></div>
                                </div><!-- .content-wrap -->
                            </li>

                            <li class="flex flex-wrap justify-content-between align-items-start">
                                <img src="images/t-2.jpg" alt="">

                                <div class="content-wrap">
                                    <h3><a href="#">計算機概論與程式設計2</a></h3>

                                    <div class="course-cost free-cost"></div>
                                </div><!-- .content-wrap -->
                            </li>

                            <li class="flex flex-wrap justify-content-between align-items-start">
                                <img src="images/t-3.jpg" alt="">

                                <div class="content-wrap">
                                    <h3><a href="#">計算機概論與程式設計3</a></h3>

                                    <div class="course-cost"></div>
                                </div><!-- .content-wrap -->
                            </li>

                            <li class="flex flex-wrap justify-content-between align-items-start">
                                <img src="images/t-4.jpg" alt="">

                                <div class="content-wrap">
                                    <h3><a href="#">計算機概論與程式設計4</a></h3>

                                    <div class="course-cost">$18</div>
                                </div><!-- .content-wrap -->
                            </li>
                        </ul>
                    </div><!-- .latest-courses -->

                    <div class="ads">
                        <img src="images/ads.jpg" alt="">
                    </div><!-- .ads -->

                    <div class="popular-tags">
                        <h2>熱門標籤</h2>

                        <ul class="flex flex-wrap align-items-center p-0 m-0">
                            <li><a href="#">C++</a></li>
                            <li><a href="#">Python</a></li>
                            <li><a href="#">C</a></li>
                            <li><a href="#">Java</a></li>
                            <li><a href="#">網頁設計</a></li>
                            <li><a href="#">哈哈</a></li>
                        </ul>
                    </div><!-- .popular-tags -->
                </div><!-- .sidebar -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->

    <hr>

    <footer class="site-footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <div class="foot-contact">
                            <h2>聯絡資訊</h2>

                            <ul>
                                <li>Email: info.deertcreative@gmail.com</li>
                                <li>Phone: (+88) 111 555 666</li>
                                <li>Address:<br>輔仁大學伯達樓6F</li>
                            </ul>
                        </div><!-- .foot-contact -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-lg-0">
                        <div class="quick-links flex flex-wrap">
                            <h2 class="w-100">Quick Links</h2>

                            <ul class="w-50">
                                <li><a href="aboutsite.html">關於本站 </a></li>
                            </ul>

                            
                        </div><!-- .quick-links -->
                    </div><!-- .col -->

                    
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-widgets -->

        
    </footer><!-- .site-footer -->

    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/swiper.min.js'></script>
    <script type='text/javascript' src='js/masonry.pkgd.min.js'></script>
    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>

</body>
</html>