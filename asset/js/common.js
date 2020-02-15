jQuery(function($){
    console.log('hello from jquery');
    $('.header__button').on('click',function(){
        $('.header').toggleClass('js-nav-open');
    })
})