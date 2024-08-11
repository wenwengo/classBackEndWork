<?php
  include_once './api/base.php';

$P_carousels = new DB('p_carousels');  // 創建 DB 類別的實例，並指定資料表名稱（資料表名稱 此處應根據實際情況設置）

$carousels = $P_carousels->getAllPortfolios();  // 呼叫 getAllPortfolios 方法取得所有資料
?>

<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>作品集</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


    <!-- 輪播 -->
    <div id="Carousel" class="headfont text-center pt-4">
        <p>
            <span class="flex-line" style="font-size: xx-large;">最新活動</span>
        </p>
    </div>
    <div class="container-carousel">

        <!-- demo -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- 指標設定 -->
            <div class="carousel-indicators  data-bs-interval=1000">
                <?php 
                for($i=0;$i<(count($carousels));$i++): 
                ?>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to = <?= $i ?> class="<?= $i == 0 ? 'active d-block w-100' : 'd-block w-100' ?>"></button>   
                <?php 
                endfor; 
                ?>
            </div>
            <!-- 指標設定 END -->

            <!-- 幻燈片設定 -->
            <div class="carousel-inner">

                <?php foreach ($carousels as $arrKey => $arrVal): ?>
                    <div class="carousel-item <?= $arrKey == 0 ? 'active d-block w-100' : ''; //只在首個按鈕的DIV標籤之class屬性設為active。 ?>" data-bs-interval="2000">
                        <img src="./images/<?= htmlspecialchars($arrVal->p_imageName); ?>" title="<?= htmlspecialchars($arrVal->p_imageTitle); ?>" alt="<?= htmlspecialchars($arrVal->p_imageAlt); ?>" class="d-block" style="width:100%">
                    </div>
                <?php endforeach; ?>
                
            </div>
            <!-- 幻燈片設定 END -->

            <!-- prev/next button -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
            <!-- prev/next button END -->                

        </div>
        <!-- demo END -->

    </div>
    <!-- 輪播 END -->



<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->
</body>
</html>
