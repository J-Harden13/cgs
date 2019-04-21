$(function(){
    $(window).scroll(function(){
        var top = $(this).scrollTop();
        if(top>1){$(".header").css("background","#fff")}
        if(top<1){$(".header").css("background","rgba(255, 255, 255, 0.5)")}
    })
})