<!DOCTYPE html>
<html lang="en">
<head>
    <title>課程簡介</title>

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
                            <h1 class="entry-title">資料庫系統概論</h1>

                            <div class="ratings flex justify-content-center align-items-center">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <span>(4 votes)</span>
                            </div><!-- .ratings -->
                        </header><!-- .entry-header -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .page-header-overlay -->
    </div><!-- .page-header -->

    <div class="container">
        <div class="row">
            <div class="col-12 offset-lg-1 col-lg-10">
                <div class="featured-image">
                    <img src="images/2.jpg" alt="" width="900px">
                </div>
            </div><!-- .col -->
        </div><!-- .row -->

        <div class="row">
            <div class="col-12 offset-lg-1 col-lg-1">
                <div class="post-share">
                    <h3>share</h3>

                    <ul class="flex flex-wrap align-items-center p-0 m-0">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-thumb-tack"></i></a></li>
                    </ul>
                </div><!-- .post-share -->
            </div><!-- .col -->

            <div class="col-12 col-lg-8">
                <div class="single-course-wrap">
                    <div class="course-info flex flex-wrap align-items-center">
                        <div class="course-author flex flex-wrap align-items-center mt-3">
                            <img src="images/158.png" alt="">
                            <div class="author-wrap">
                                <label class="m-0">講師</label>
                                <div class="author-name"><a href="#">吳尚鴻</a></div>
                            </div><!-- .author-wrap -->
                        </div><!-- .course-author -->
                        <div class="course-students mt-3">
                            <label class="m-0">單位</label>
                            <div class="author-name"><a href="#">台灣大學資訊工程學系      博士</a></div>
                        </div><!-- .course-students -->
                        <div class="course-cats mt-3">
                            <label class="m-0">類別</label>
                            <div class="author-name"><a href="#">程式設計</a></div>
                        </div><!-- .course-cats -->
                        <div>
                            <button type="button" style="margin-right: 10px;">加入收藏</button>
                        </div><!-- .buy-course -->
                        <button type="button"><a href="https://ocw.nthu.edu.tw/ocw/index.php?page=course&cid=257&" style="color: black">前往課程</a></button>
                        </div><!-- .buy-course -->
                    </div><!-- .course-info -->
                    <div class="single-course-cont-section">
                        <h2>我會學到什麼</h2>
                        <ul class="p-0 m-0 green-ticked">
                            <li>資料類：資料儲存、資料結構、資料庫</li>
                            <li>系統類：計算機結構，作業系統，網路</li>
                            <li>科學類：演算法，程式語言，人工智慧</li>
                        </ul>

                        <h2>課程概述</h2>
                        <p>這是專門設計給電機系一年級同學修習的計算機概論課程</p>
                        <p>其目的在教授計算機科學的基礎技術及知識</p>
                        <p>同時亦著重C/C++相關程式設計的技巧</p>
                        <p>最終希望讓同學有足夠的能力修習進階計算機相關課程</p>
                        <p>以及利用計算機來解決日後的研究議題</p>

                        <h2>課程目標</h2>
                        <ul class="p-0 m-0 black-doted">
                            <li>使同學對計算機科學中的術語、法則、理論、應用及技術有基本的了解。</li>
                        </ul>
                    </div>
                    
                    <div class="instructors-info">
                        <header class="entry-heading">
                            <h2 class="entry-title">講師</h2>
                        </header><!-- .entry-heading -->
                        <div class="instructor-short-info flex flex-wrap">
                            <div class="instructors-stats">
                                <img src="images/instructor.jpg" alt="">
                                <ul class="p-0 m-0 mt-3">
                                    <li><i class="fa fa-star"></i> 4.7 .7 分</li>
                                    <li><i class="fa fa-comment"></i> 25,182 觀看次數</li>
                                    <li><i class="fa fa-user"></i> 11,085 位使用者</li>
                                    <li><i class="fa fa-play-circle"></i> 2 門課程</li>
                                </ul>
                            </div><!-- .instructors-stats -->
                            <div class="instructors-details">
                                <div class="ratings flex align-items-center">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <span> (4 votes)</span>
                                </div><!-- .ratings -->
                                <h2 class="entry-title mt-3">計算機概論</h2>
                                <div class="course-teacher mt-3">
                                    講師: <a href="#">于天立</a>
                                </div><!-- .course-teacher -->
                                <div class="entry-content mt-3">
                                    <p>于天立教授1997年於臺大電機系取得學士學位，2000年赴美國伊利諾大學香檳分校深造，分別於2003及2006年取得計算機科學碩士學位及博士學位。畢業後憑著一股熱忱，決定回國貢獻所長，於2007年回到母系任職至今。于教授平日和學生的互動像是位親切的大學長，言談幽默風趣，常常不經意流露出對生活的啟發及對研究的醉心。其擅長依據學生的背景設計多元教學，並觀察課堂學生反應適時調整教學節奏。</p>
                                </div><!-- .entry-content -->
                            </div><!-- .instructors-details -->
                        </div><!-- .instructor-short-info -->
                    </div><!-- .instructors-info -->

                    <div class="post-comments-wrap">
                        <div class="post-comments">
                            <h3 class="comments-title"><span class="comments-number">02 評論</span></h3>
                            <ol class="comment-list">
                                <li class="comment">
                                    <article class="comment-body">
                                        <figure class="comment-author-avatar">
                                            <img src="images/c-1.png">
                                        </figure><!-- .comment-author-avatar -->
                                        <div class="comment-wrap">
                                            
                                            <div class="comment-author">
                                                <span class="comment-meta d-block">
                                                    <a>2021/3/20</a>
                                                </span><!-- .comment-meta -->
                                                <div class="ratings flex justify-content-start align-items-start">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <span style="color: black;">(3 votes)</span>
                                                </div><!-- .ratings -->
                                                <span class="fn">
                                                    <a>王品賢 同學</a>
                                                </span><!-- .fn -->
                                            </div><!-- .comment-author -->
                                            <p>內容很棒很完善，不過講師講話有點快，希望能講慢一點。</p>
                                            <div class="reply">
                                                <a href="#">讚</a>
                                                <a href="#">回覆</a>
                                            </div><!-- .reply -->
                                        </div><!-- .comment-wrap -->
                                        <div class="clearfix"></div>
                                    </article><!-- .comment-body -->
                                    <ol class="children">
                                        <li class="comment">
                                            <article class="comment-body">


                                                <div class="clearfix"></div>
                                            </article><!-- .comment-body -->
                                        </li><!-- .comment -->
                                    </ol><!-- .children -->
                                </li><!-- .comment -->
                                <li class="comment">
                                    <article class="comment-body">
                                        <figure class="comment-author-avatar">
                                            <img src="images/c-3.png" alt="">
                                        </figure><!-- .comment-author-avatar -->
                                        
                                        <div class="comment-wrap">
                                            
                                            <div class="comment-author">
                                                <span class="comment-meta d-block">
                                                    <a>2021/3/26</a>
                                                </span><!-- .comment-meta -->
                                                <div class="ratings flex justify-content-start align-items-start">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <span style="color: black;">(4 votes)</span>
                                                </div><!-- .ratings -->
                                                <span class="fn">
                                                    <a>郭玉茹 同學</a>
                                                </span><!-- .comment-autho -->
                                            </div><!-- .comment-author -->
                                            <p>影片對新手來說很友好，把觀念講得很清楚，推薦其他新手來看</p>
                                            <div class="reply">
                                                <a href="#">讚</a>
                                                <a href="#">回覆</a>
                                            </div><!-- .reply -->
                                        </div><!-- .comment-wrap -->
                                        <div class="clearfix"></div>
                                    </article><!-- .comment-body -->
                                </li><!-- .comment -->
                            </ol><!-- .comment-list -->
                        </div><!-- .post-comments -->
                        <div class="comments-form">
                            <div class="comment-respond">
                                <h3 class="comment-reply-title">留下評論</h3>
                                <form class="comment-form">
                                    <textarea rows="5" placeholder="想說什麼..."></textarea>
                                    <input type="submit" value="送出">
                                </form><!-- .comment-form -->
                            </div><!-- .comment-respond -->
                        </div><!-- .comments-form -->
                    </div><!-- .post-comments-wrap -->

                <br><br>

                    <div class="recommend-courses">
                        <header class="entry-heading flex flex-wrap justify-content-between align-items-center">
                            <h2 class="entry-title">相關課程</h2>
                            <a href="#">看更多...</a>
                        </header><!-- .entry-heading -->
                        <div class="row mx-m-25">
                            <div class="col-12 col-lg-6 px-25">
                                <div class="course-content">
                                    <figure class="course-thumbnail">
                                        <a href="#"><img src="images/3.jpg" alt=""></a>
                                    </figure><!-- .course-thumbnail -->
                                    <div class="course-content-wrap">
                                        <header class="entry-header">
                                            <h2 class="entry-title"><a href="http://ocw.aca.ntu.edu.tw/ntu-ocw/ocw/cou/106S201">計算機程式設計</a></h2>
                                            <div class="entry-meta flex flex-wrap align-items-center">
                                                <div class="course-author"><a href="#">鄭士康</a></div>
                                                <div class="course-date">Dec 18, 2018</div>
                                            </div><!-- .course-date -->
                                        </header><!-- .entry-header -->
                                        <footer class="entry-footer flex flex-wrap justify-content-between align-items-center">

                                            <div class="course-ratings flex justify-content-end align-items-center">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star-o"></span>
                                                <span class="course-ratings-count">(4 votes)</span>
                                            </div><!-- .course-ratings -->
                                        </footer><!-- .entry-footer -->
                                    </div><!-- .course-content-wrap -->
                                </div><!-- .course-content -->
                            </div><!-- .col -->
                            <div class="col-12 col-lg-6 px-25">
                                <div class="course-content">
                                    <figure class="course-thumbnail">
                                        <a href="#"><img src="images/2.jpg" alt=""></a>
                                    </figure><!-- .course-thumbnail -->
                                    <div class="course-content-wrap">
                                        <header class="entry-header">
                                            <h2 class="entry-title"><a href="https://ocw.nthu.edu.tw/ocw/index.php?page=course&cid=257&">資料庫系統概論</a></h2>
                                            <div class="entry-meta flex flex-wrap align-items-center">
                                                <div class="course-author"><a href="#">吳尚鴻</a></div>
                                                <div class="course-date">Mar 14, 2018</div>
                                            </div><!-- .course-date -->
                                        </header><!-- .entry-header -->
                                        <footer class="entry-footer flex flex-wrap justify-content-between align-items-center">

                                            <div class="course-ratings flex justify-content-end align-items-center">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star-o"></span>
                                                <span class="course-ratings-count">(4 votes)</span>
                                            </div><!-- .course-ratings -->
                                        </footer><!-- .entry-footer -->
                                    </div><!-- .course-content-wrap -->
                                </div><!-- .course-content -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .related-course --><hr><br>

                    <div class="recommend-courses">
                        <header class="entry-heading flex flex-wrap justify-content-between align-items-center">
                            <h2 class="entry-title">推薦課程</h2>
                            <a href="recommend.html">看更多...</a>
                        </header><!-- .entry-heading -->
                        <div class="row mx-m-25">
                            <div class="col-12 col-lg-6 px-25">
                                <div class="course-content">
                                    <figure class="course-thumbnail">
                                        <a href="#"><img src="images/3.jpg" alt=""></a>
                                    </figure><!-- .course-thumbnail -->
                                    <div class="course-content-wrap">
                                        <header class="entry-header">
                                            <h2 class="entry-title"><a href="http://ocw.aca.ntu.edu.tw/ntu-ocw/ocw/cou/106S201">計算機程式設計</a></h2>
                                            <div class="entry-meta flex flex-wrap align-items-center">
                                                <div class="course-author"><a href="#">鄭士康</a></div>
                                                <div class="course-date">Dec 18, 2018</div>
                                            </div><!-- .course-date -->
                                        </header><!-- .entry-header -->
                                        <footer class="entry-footer flex flex-wrap justify-content-between align-items-center">

                                            <div class="course-ratings flex justify-content-end align-items-center">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star-o"></span>
                                                <span class="course-ratings-count">(4 votes)</span>
                                            </div><!-- .course-ratings -->
                                        </footer><!-- .entry-footer -->
                                    </div><!-- .course-content-wrap -->
                                </div><!-- .course-content -->
                            </div><!-- .col -->
                            <div class="col-12 col-lg-6 px-25">
                                <div class="course-content">
                                    <figure class="course-thumbnail">
                                        <a href="#"><img src="images/2.jpg" alt=""></a>
                                    </figure><!-- .course-thumbnail -->
                                    <div class="course-content-wrap">
                                        <header class="entry-header">
                                            <h2 class="entry-title"><a href="https://ocw.nthu.edu.tw/ocw/index.php?page=course&cid=257&">資料庫系統概論</a></h2>
                                            <div class="entry-meta flex flex-wrap align-items-center">
                                                <div class="course-author"><a href="#">吳尚鴻</a></div>
                                                <div class="course-date">Mar 14, 2018</div>
                                            </div><!-- .course-date -->
                                        </header><!-- .entry-header -->
                                        <footer class="entry-footer flex flex-wrap justify-content-between align-items-center">

                                            <div class="course-ratings flex justify-content-end align-items-center">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star-o"></span>
                                                <span class="course-ratings-count">(4 votes)</span>
                                            </div><!-- .course-ratings -->
                                        </footer><!-- .entry-footer -->
                                    </div><!-- .course-content-wrap -->
                                </div><!-- .course-content -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .recommend-course --><hr><br>

                    <div class="hot-courses">
                        <header class="entry-heading flex flex-wrap justify-content-between align-items-center">
                            <h2 class="entry-title">熱門課程</h2>
                            <a href="hotcourse.html">看更多...</a>
                        </header><!-- .entry-heading -->
                        <div class="row mx-m-25">
                            <div class="col-12 col-lg-6 px-25">
                                <div class="course-content">
                                    <figure class="course-thumbnail">
                                        <a href="#"><img src="images/3.jpg" alt=""></a>
                                    </figure><!-- .course-thumbnail -->
                                    <div class="course-content-wrap">
                                        <header class="entry-header">
                                            <h2 class="entry-title"><a href="http://ocw.aca.ntu.edu.tw/ntu-ocw/ocw/cou/106S201">計算機程式設計</a></h2>
                                            <div class="entry-meta flex flex-wrap align-items-center">
                                                <div class="course-author"><a href="#">鄭士康</a></div>
                                                <div class="course-date">Dec 18, 2018</div>
                                            </div><!-- .course-date -->
                                        </header><!-- .entry-header -->
                                        <footer class="entry-footer flex flex-wrap justify-content-between align-items-center">

                                            <div class="course-ratings flex justify-content-end align-items-center">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star-o"></span>
                                                <span class="course-ratings-count">(4 votes)</span>
                                            </div><!-- .course-ratings -->
                                        </footer><!-- .entry-footer -->
                                    </div><!-- .course-content-wrap -->
                                </div><!-- .course-content -->
                            </div><!-- .col -->
                            <div class="col-12 col-lg-6 px-25">
                                <div class="course-content">
                                    <figure class="course-thumbnail">
                                        <a href="#"><img src="images/2.jpg" alt=""></a>
                                    </figure><!-- .course-thumbnail -->
                                    <div class="course-content-wrap">
                                        <header class="entry-header">
                                            <h2 class="entry-title"><a href="https://ocw.nthu.edu.tw/ocw/index.php?page=course&cid=257&">資料庫系統概論</a></h2>
                                            <div class="entry-meta flex flex-wrap align-items-center">
                                                <div class="course-author"><a href="#">吳尚鴻</a></div>
                                                <div class="course-date">Mar 14, 2018</div>
                                            </div><!-- .course-date -->
                                        </header><!-- .entry-header -->
                                        <footer class="entry-footer flex flex-wrap justify-content-between align-items-center">

                                            <div class="course-ratings flex justify-content-end align-items-center">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star-o"></span>
                                                <span class="course-ratings-count">(4 votes)</span>
                                            </div><!-- .course-ratings -->
                                        </footer><!-- .entry-footer -->
                                    </div><!-- .course-content-wrap -->
                                </div><!-- .course-content -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .hot-course -->
                </div><!-- .single-course-wrap -->
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