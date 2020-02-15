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
    <div class="body-container">
        <header class="header">
        <div class="header__button-wrap">
                <button class="header__button">
                    <span class="button__line button__line-1"></span>
                    <span class="button__line button__line-2"></span>
                </button>
            </div>
            <div class="header__logo">
                <a href="<?php echo esc_url(home_url());?>"><img src="https://placehold.jp/250x150.png?text=logo" alt="" class="header__logo-img"></a>
            </div>
            <div class="header__main-nav-wrap">
                <?php wp_nav_menu(array('menu'=>'main-nav','container' => false,'menu_class'=>'header__main-nav')); ?>
                <?php wp_nav_menu(array('menu'=>'second-nav','container' => false,'menu_class'=>'header__second-nav')); ?>
            </div>
            

        </header>
        
                
            </div>
        </div>
    </div>
</body>
</html>