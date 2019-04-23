$(function(){
    var  t = true;
        $(".recruit ul li h4").on("click",function(){
           
                // $(this).siblings().slideDown(500).parent().siblings().children(".content").slideUp(500);
                // $(this).siblings().find(".btn_right").parent().next().stop().slideUp("fast");
                if(t == true&&$(this).find(".btn_right").html() == "+"){
                    $(this).find(".btn_right").html("-");
                    $(this).siblings().stop().slideDown(500).parent().siblings().children(".content").stop().slideUp(500);
                    if($(this).parent().siblings().find(".btn_right").html() == "-"){
                        $(this).parent().siblings().find(".btn_right").html("+");
                    }
                    t = false;
                }else{
                    $(this).siblings().stop().slideUp(500);
                    $(this).find(".btn_right").html("+");
                    t = true;
                }
                // console.log(t);
                // if($(this).find(".btn_right").html() == "-"){
                //     $(this).find(".btn_right").html("+");
                // }else{
                //     $(this).find(".btn_right").html("-");
                // }
                // $(this).parent().siblings().find(".btn_right").html("+");

        })
})