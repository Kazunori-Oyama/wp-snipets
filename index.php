<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title> 
    <?php wp_head();?>  
</head>
<body>
    <header class="header">
        <div class="header__logo">
            <img src="https://placehold.jp/250x150.png?text=logo" alt="" class="header__logo-img">
        </div>
        <div class="header__main-nav">
            <?php wp_nav_menu(array('menu'=>'main-nav','container' => false,'menu_class'=>'header__main-nav')); ?>
        </div>
        
    </header>
    <div class="container">
        <div class="row between">
            <div class="col6">
                <h1>みだし</h1>
                <p>パラグラフ</p>
            </div>
            <div class="col6">
                <figure>
                    <img src="https://placehold.jp/300x200.png" alt="">
                    <figcaption>figcaption</figcaption>
                </figure>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col6">
            <div class="row">
                <div class="col4 col-full">content</div>
                <div class="col4">content</div>
                <div class="col4">content</div>
                <div class="col4">content</div>
                <div class="col4 col-full">content</div>
                </div>
            </div>
        </div>
        </div>
        <!-- <div class="col3">
            conent
        </div>
        <div class="col4">
            content
        </div>
        <div class="col5">
            content
        </div> -->
    </div>
</body>
</html>