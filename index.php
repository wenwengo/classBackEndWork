<?php 
    include_once './api/base.php'; 
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="css/style.css" rel="stylesheet">
    <style>

    </style>
</head>

<body class="bg-secondary">
    <!-- 首頁 -->
    <div id="hero">
        <div class="hero-container">
            <div class="wow fadeIn">
                <div class="opacity-25">
                    <!-- bgimg by css -->
                </div>

                <h1>歡迎來Wengo</h1>
                <h2>讓我們來 <span class="rotating">抓住美麗的夢想</span></h2>
                <div class="actions">
                    <a href="admin.php" class="btn-services fw-bold text-decoration-none">登入管理</a>
                    <a href="#imgcard" class="btn-services fw-bold text-decoration-none">實踐腳步</a>
                    <a href="#Carousel" class="btn-services fw-bold text-decoration-none">充實自我</a>
                </div>
            </div>
        </div>
    </div>
    <!-- 首頁end -->

    <!-- menu -->
    <nav class="navbar navbar-expand-sm navbar-light fixed-top" id="neubar">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class=" collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link mx-2 active" aria-current="page" href="#">首頁</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 active" href="#Carousel">最新建置</a>
                    </li>

                    <li class="nav-item dropdown active">
                        <a class="nav-link mx-2 dropdown-toggle" href="#" id="contacts" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            關於我們
                        </a>
                        <ul class="dropdown-menu active" aria-labelledby="contacts">
                            <li><a class="dropdown-item" href="#map">交通地圖</a></li> <!-- 交通地圖 -->
                            <li><a class="dropdown-item" href="#about_us">關於我們</a></li> <!-- 關於我們 -->
                            <li><a class="dropdown-item" href="#contact_us">聯絡我們</a></li> <!-- 聯絡我們 -->
                        </ul>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link mx-2 active" href="#imgcard">成品集</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 active" href="#contact_us">與我連絡</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- menu end-->


    <!-- carousel -->
    <?php include_once './carousel.php'; ?>
    <!-- carousel end -->

    <!-- movies -->
    <div id="movie" class="headfont text-center pt-5">
        <p>
            <span class="flex-line" style="font-size: xx-large;">充實自我-學習的源頭</span>
        </p>
    </div>
    <div class="container-fluid container-1">
        <div class="row h-100">

            <div class="col-sm-12 col-lg-6">
                <iframe class="w-100 h-100" src="https://www.youtube.com/embed/JiSzODh2xME?si=-5gCnQ-6rs29yHDk"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="col-sm-12 col-lg-5">
                <div class="col-lg-4  w-100 h-100 p-5 mt-5" style="color:#fff;">
                    It is an institution that integrates vocational training, skills certification, employment services
                    and entrepreneurship guidance to provide comprehensive services, grasps industrial development and
                    labor market needs, and has the mission of cultivating high-quality labor required by the country
                    and industry, strengthening the diversified employment service network, and promoting labor force
                    development.
                </div>
            </div>

        </div>
    </div>

</div>

    <!-- Map -->
    <div id="map" class="headfont text-center pt-5">
        <p>
            <span class="flex-line" style="font-size: xx-large;">充實自我-學習園地交通地圖</span>
        </p>
    </div>
    <div class="container-fluid container-2">
        <div class="row h-100">
            <div class="col-sm-12 col-lg-5">
                <div class="col-lg-4  w-100 h-100 p-5 mt-5" style="color:#fff;">                   
                    With the concept of "professionalism, enthusiasm, innovation, and touching" as the service to the
                    people, we are committed to the four major tasks of vocational training, skills certification,
                    employment services, and entrepreneurial guidance. In response to changes in the economic
                    environment and manpower needs, our colleagues uphold the "learning organization" With the core
                    values ​​of "spirit", "pragmatism and problem solving" and "believe in yourself and the team", we
                    will continue to improve the quality of internal and external talent development on the existing
                    basis, and strive to integrate regional resources, play the role of regional operations, and achieve
                    sustainable development. Strive for excellence.
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <iframe class="w-100 h-100 p-5"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.703506716216!2d121.41694067595641!3d25.04413413788237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a7bec9ad74b1%3A0xa639904a89f26435!2z5Yue5YuV6YOo5Yue5YuV5Yqb55m85bGV572y5YyX5Z-65a6c6Iqx6YeR6aas5YiG572y5rOw5bGx6IG35qWt6KiT57e05aC0!5e0!3m2!1szh-TW!2stw!4v1716866300021!5m2!1szh-TW!2stw"
                    width="600" height="450" style="border:0;" allowfullscreen="" loadi訊息ng="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>
    </div>


    <!-- goto_Top -->
    <a id="topBtn" title="Top"
        class="btn btn-danger btn-lg position-fixed bg-secondary bottom-0 end-0 mb-0 me-0 border-0" href="#"
        role="button " style="display:none">🔝</a>
    <!-- goto_Top END -->                    

    <!-- imgcard -->
    <?php include_once "imgcard.php"; ?>
    <!-- imgcard end -->


    <!--  contact_us  -->
    <div id="contact_us" class="headfont text-center pt-5">
        <span class="headfont flex-line" style="font-size: xx-large;">聯絡我們</span>
    </div>
    <div class="container container-1 ">
        <div class="row text-center">
            <div class="form">
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>

                <form action="#" method="post" role="form" class="contactForm">

                    <div class="row mt-3">
                        <div class="text-end align-bottom col-12 col-lg-4 m-0 p-0">

                        </div>
                        <div class="col-12 col-lg-4 ">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        </div>

                    </div>

                    <div class="row mt-3">
                        <div class="text-end align-bottom col-12 col-lg-4 m-0 p-0">

                        </div>
                        <div class="col-12 col-lg-4 ">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                                data-rule="email" data-msg="Please enter a valid email" />
                        </div>
                    </div>

                    <div class="row mt-3 ">
                        <div class="text-end align-bottom col-12 col-lg-4 m-0 p-0">

                        </div>
                        <div class="col-12 col-lg-4 ">
                            <div>
                                <input type="text" class="form-control" name="mobile" id="mobile"
                                    placeholder="Your Mobile Number" data-rule="minlen:4"
                                    data-msg="Please enter at mobile" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="text-center pt-3"><button type="button" class="btn btn-lg btn-dark">送出</button>
                            </div>
                        </div>
                </form>

            </div>
        </div>
    </div>
    <!-- contact_us end -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        document.addEventListener('scroll', function () {
            let myTopBtn = document.getElementById('topBtn');
            let screenHeight = window.innerHeight;
            let scrollY = window.scrollY || window.pageYOffset;

            if (scrollY > screenHeight) {
                myTopBtn.style.display = 'block'; // 顯示
            } else {
                myTopBtn.style.display = 'none'; // 隱藏
            }
        });


    </script>
</body>

</html>