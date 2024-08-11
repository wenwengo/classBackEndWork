<?php
    $P_portfolios = new DB('p_portfolios');         // 創建 DB 類別的實例，並指定資料表名稱（資料表名稱 此處應根據實際情況設置）

    $portfolios = [];
    $portfolios = $P_portfolios->getAllPortfolios();  // 呼叫 getAllPortfolios 方法取得所有資料
?>

<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>作品集</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
</head>
<body>
    
<!-- imgcard -->
<div id="imgcard" class="headfont text-center pt-5">

    <p><span class="flex-line" style="font-size: xx-large;">實踐腳步-成果作品集</span></p>

    <!-- imgcard-container -->
    <div class="container container-0  container-card">  
 
        <?php         
        foreach ($portfolios as $key => $item_imgcard): 
            if ($key%3==0):                                    
                echo '<!-- row -->';
                echo '<div class="row">';        
            endif;
        ?>

            <div class="col-md-12 col-lg-4 text-center">
                <h2><?= htmlspecialchars($item->p_title) ?></h2>

                <div class="card mx-auto" style="width:400px">
                    <img class="card-img-top" src="./images/<?= htmlspecialchars($item_imgcard->p_imageName); ?>" title="<?= htmlspecialchars($item_imgcard->p_title); ?>" alt="<?= htmlspecialchars($item_imgcard->p_title); ?>"
                         style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title"><?= htmlspecialchars($item_imgcard->p_title); ?></h4>
                        <br class="card-text">
                        <?= htmlspecialchars($item->p_imageSMS) ?>
                        <br><a href="javascript:void(0);" onclick="alert('<?= htmlspecialchars($item_imgcard->p_imageMessage); ?>');"
                               class="btn btn-dark">作品</a>
                    </div>
                </div>
                <br>
            </div>
            
        <?php 
            if (($key+1)%3==0):                                    
                echo '</div>';
                echo '<!-- row end-->';        
            endif;
        endforeach;
        ?>
        
    </div>
    <!-- imgcard-container end -->

</div>
<!-- imgcard end-->

<?php 
    $P_portfolios = null;  //手動釋放
?> 

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->
</body>
</html>
