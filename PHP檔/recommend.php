<!DOCTYPE html>
<html lang="en">
<head>
    <title>推薦課程</title>

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
                            <h1>推薦課程排行</h1>
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
                        <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                        <li>Rank</li>
                    </ul>
                </div><!-- .breadcrumbs -->
            </div><!-- .col -->
        </div><!-- .row -->

        <div class="row">
            <div class="col-md-8 col-lg-11">
                <div class="team-member" >
                    <table id="example" class="table table-hover display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                 <th>排行</th>
                                 <th>課程名稱</th>
                                 <th>授課老師</th>
                                 <th>學校</th>
                                 <th>課程連結</th>
                                 <th></th>
                             </tr>
                         </thead>
            
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>計算機程式設計</td>
                    <td>鄭士康</td>
                    <td>國立台灣大學</td>
                    <td><a href="＃">課程連結</a></td>
                    <td><img src="images/1.jpg" width="200" height="100"></td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>資料庫系統概論</td>
                    <td>吳尚鴻</td>
                    <td>國立台灣大學</td>
                     <td><a href="#">課程連結</a></td>
                     <td><img src="images/a.jpg" width="200" height="100"></td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>JAVA程式設計</td>
                    <td>吳仁康</td>
                    <td>國立清華大學</td>
                    <td><a href="#">課程連結</a></td>
                    <td><img src="images/b-1.jpg" width="200" height="100"></td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>Python帶你來入門</td>
                    <td>蔡明志</td>
                    <td>私立輔仁大學</td>
                    <td><a href="#">課程連結</a></td>
                    <td><img src="images/b-2.jpg" width="200" height="100"></td>
                    
                </tr>
                <tr>
                    <td>5.</td>
                    <td>商業自動化</td>
                    <td>張大偉</td>
                    <td>私立中原大學</td>
                      <td><a href="#">課程連結</a></td>
                      <td><img src="images/b-3.jpg" width="200" height="100"></td>
                </tr>
                <tr>
                    <td>6.</td>
                  <td>巨量資料探勘短期課程</td>
                  <td>Haixun Wang<br>Seung-won Hwang<br>Shou-de Lin</td>
                  <td>國立陽明交通大學</td>
                   <td><a href="#">課程連結</a></td>
                   <td><img src="images/b-4.jpg" width="200" height="100"></td>
                </tr>
                <tr>
                    <td>7.</td>
                  <td>計算機架構</td>
                  <td>鍾崇斌</td>
                  <td>國立陽明交通大學</td>
                   <td><a href="#">課程連結</a></td>
                   <td><img src="images/b-5.jpg" width="200" height="100"></td>
                </tr>
                <tr>
                    <td>8.</td>
                  <td>商管程式設計</td>
                  <td>孔令傑、盧信銘</td>
                  <td>國立台灣大學</td>
                   <td><a href="#">課程連結</a></td>
                   <td><img src="images/b-6.jpg" width="200" height="100"></td>
                </tr>
                <tr>
                    <td>9.</td>
                  <td>雲端計算</td>
                  <td>李哲榮</td>
                  <td>國立清華大學</td>
                   <td><a href="#">課程連結</a></td>
                   <td><img src="images/o.jpg" width="200" height="100"></td>
                </tr>
                <tr>
                    <td>10.</td>
                  <td>物件導向程式設計</td>
                  <td>林泓宏</td>
                  <td>私立南臺科技大學</td>
                   <td><a href="#">課程連結</a></td>
                   <td><img src="images/event-3.jpg" width="200" height="100"></td>
                </tr>
            </tbody>
         </table>
                    </div><!-- .team-member -->
                </div><!-- .col -->
            </div><!-- .row -->
            <div class="pagination flex flex-wrap justify-content-between align-items-center">
                <div class="col-12 col-lg-4 order-2 order-lg-1 mt-3 mt-lg-0">
                    <ul class="flex flex-wrap align-items-center order-2 order-lg-1 p-0 m-0">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div><!-- .pagination -->
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