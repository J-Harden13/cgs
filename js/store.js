$(function(){
    function map_init(maps,address,law){
        ShowMap("map",{
            mapx: maps,
            addr: address,
            lawfirm: law,
        })
    }
    map_init('114.033501,22.534378','市福田区滨河大道滨河时代大厦A座3108','管车所资产管理有限公司深圳总部');

    var arr = [['114.033501,22.534378','广东省深圳市福田区滨河大道滨河时代大厦A座3108','管车所资产管理有限公司深圳总部'],['113.752323,23.018213','广东省东莞市元美路华凯广场C座105','管车所资产管理有限公司华南运营中心'],['114.068829,22.96902','广东省东莞市常平镇255省道东深路（陈屋贝村路段）','管车所资产管理有限公司常平直营店']];
    console.log(arr);
    $(".store_nav").on('click','li',function(e){
        var index = $(this).index();
        var law = $(this).find('h4').html();
        var address = $(this).find('p').html();
        var mpx = arr[index][0];
        map_init(mpx,address,law);
        
    })
})