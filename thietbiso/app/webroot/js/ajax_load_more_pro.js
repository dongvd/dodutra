var page=1;
//var record_per_page=12;

//$(document).ready(function(){
    
//    $(".loadmore").click(function(){
function clickmore(cate){
        var cate=cate;
        page++;
        $.ajax({
            type:"get",
            dataType:"json",
            url:"http://thietbiso.com/index/index",
            data:{page:page,cate:cate},
            success:function(arr_more){
                var html="";
//                $('.content-lap').empty();
                    $.each(arr_more,function(key,obj){
                       html+='<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 border product" >';
                       html+=         '<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12" style="margin-top:10px !important;">';
                       html+=             '<center >';
                       html+=                 '<img onclick="click_modal('+obj.products.id+')" data-zoom-image="/img/sanpham/small/'+obj.products.Image+'" src="/img/sanpham/small/'+obj.products.Image+'" class="img-responsive pro_img cell img" id="'+obj.products.id+'" data-toggle="modal" style="height:150px" data-target="#proModal" />';
                       html+=                 '<span class="glyphicon glyphicon-zoom-in" data-toggle="modal" data-target="#zoomModal" style="position:absolute; right:0px; cursor:pointer;"></span>';
                       html+=             '</center>';
                       html+=         '</div>';
                       html+=         '<span>Tên: <a>'+obj.products.ProductName+'</a></span><br/>';
                       html+=         '<span>Giá:<span style="color: red;">'+obj.products.Price+'</span></span><br/>';
                       html+=         '<center>';
                       html+=        '<a  class="btn btn-success btn-sm" href="?cart='+obj.products.id+'">Thêm vào giỏ hàng</a>';
                       html+=         '</center>';
                       html+=    '</div>';
                    });
                    if(cate==3){
                        $(".content-lap").append(html);
                    }else if(cate==1){
                        $(".content-phone").append(html);
                    }else if(cate==2){
                         $(".content-tablet").append(html);
                    }else{
                         $(".content-fitting").append(html);
                    }
//                alert(arr_more[0].products.id);
            }
        });
        }
//    });
//});

//$(document).ready(function(){
//    $("#loadmore").click(function(){
//        page++;
//        $.ajax({
//            type:"get",
//            dataType:"json",
//            url:"http://trangkk.com/thietbiso/index/index",
//            data:{page:page,cate:3},
//            success:function(arr_more){
//                var html="";
//                    $.each(arr_more,function(key,obj){
//                       html+='<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 border " >';
//                       html+=         '<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12" style="margin-top:10px !important;">';
//                       html+=             '<center>';
//                       html+=                 '<img id="'+obj.id+'" data-zoom-image="img/sanpham/large/'+obj.Image+'" src="img/sanpham/large/'+obj.Image+'" class="img-responsive pro_img cell" data-toggle="modal" data-target="#proModal" />';
//                       html+=                 '<span class="glyphicon glyphicon-zoom-in" data-toggle="modal" data-target="#zoomModal" style="position:absolute; right:0px; cursor:pointer;"></span>';
//                       html+=             '</center>';
//                       html+=         '</div>';
//                       html+=         '<span>Tên: <a>'+obj.ProductName+'</a></span><br/>';
//                       html+=         '<span>Giá:<span style="color: red;">'+obj.Price+'</span></span><br/>';
//                       html+=         '<center>';
//                       html+=        '<a  class="btn btn-success btn-sm" href="?cart='+obj.id+'">Thêm vào giỏ hàng<a>';
//                       html+=         '</center>';
//                       html+=    '</div>';
//                    });
//                    $(".content-lap").append(html);
////                alert(arr_more);
//            }
//        });
//    });
//});


