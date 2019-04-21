// 移动端头部
$(function(){
    // 全局导航
    var t = true;
    $(".menu_logo").on("click",function(){
        // $(".menu").animate({right: "0"},500);
        if(t == true){
            $(".menu").stop().animate({right: "0"},500);
            t = false;
        }else{
            $(".menu").stop().animate({right: "-50%"},500);
            $(".bin_nav").hide();
            t = true;
        }
    });
    var f = true;
    // 全国招商导航菜单
    $(".m_Top").on("click",function(){
        if(f == true){
            $(this).siblings().stop().slideDown(500);
            f = false;
        }else{
            $(this).siblings().stop().slideUp(500);
            f = true;
        }
    });

    // 移动端页尾
    var h = true;
    $(".f_show").on("click",function(){
        // alert($(this).siblings().attr("class"));
        if(h == true){
            $(this).siblings().show();
            h = false;
        }else{
            $(this).siblings().hide();
            h = true;
        }
    })
})