$(function(){
    function slide_list(num){
        $(".recruit ul li h4").eq(num).click(function(){
            // $(this).next().slidedown().parent().siblings().children(".content").slideUp(500);
            $(this).siblings().find(".btn_right").parent().next().stop().slideUp("fast");
            $(this).find(".btn_right").parent().next().stop().slideToggle(500);
            if($(this).find(".btn_right").html() == "-"){
                $(this).find(".btn_right").html("+");
            }else{
                $(this).find(".btn_right").html("-");
            }
            $(this).parent().siblings().find(".btn_right").html("+");
        })
    }
    var len = $("ul li").length;
    for(var i=0;i<len;i++){
        slide_list(i);
    }
})