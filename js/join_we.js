$(function(){
    // var  t = true;
    // $(".recruit ul li:eq(0) .content").show().siblings().children(".btn_right").html("-");
    //     $(".recruit ul li h4").on("click",function(){
    //             if(t == true&&$(this).find(".btn_right").html() == "+"){
    //                 $(this).find(".btn_right").html("-");
    //                 $(this).siblings().slideDown(500).parent().siblings().children(".content").slideUp(500);
    //                 if($(this).parent().siblings().find(".btn_right").html() == "-"){
    //                     $(this).parent().siblings().find(".btn_right").html("+");
    //                 }
    //                 t = false;
    //             }else{
    //                 $(this).siblings().stop().slideUp(500);
    //                 $(this).find(".btn_right").html("+");
    //                 t = true;
    //             }
    //     })
   
    function slide_list(num){
        $(".recruit ul li:eq(0) .content").show().siblings().children(".btn_right").html("-");
        $("ul li").eq(num).click(function(){
            $(this).siblings().find(".btn_right").parent().next().stop().slideUp("fast");
            $(this).find(".btn_right").parent().next().stop().slideToggle(500);
            if($(this).find(".btn_right").html() == "-"){
                $(this).find(".btn_right").html("+");
            }else{
                $(this).find(".btn_right").html("-");
            }
            $(this).siblings().find(".btn_right").html("+");
        })
    }
    var len = $("ul li").length;
    for(var i=0;i<len;i++){
        slide_list(i);
    }
})