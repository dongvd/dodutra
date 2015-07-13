//
//function product(proid){
//    var xmlhttp;
//    if (window.XMLHttpRequest)
//      {// code for IE7+, Firefox, Chrome, Opera, Safari
//      xmlhttp=new XMLHttpRequest();
//      }
//    else
//      {// code for IE6, IE5
//      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
//      }
//    xmlhttp.onreadystatechange=function()
//  {
//  if (xmlhttp.readyState==4 && xmlhttp.status==200)
//    {
//    document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
//    }
//  }
//  xmlhttp.open("GET",'<?php echo $this->Html->url(array("controller"=>"index","action"=>"index/?proid=1"))',true);
//  xmlhttp.send();
//}

$("document").ready(function(){
    
//    $('.content-row').remove(html);
    $(".img").click(function(){
        var proid = $(this).attr("id");
//        $('.content-row').remove(html);
        $.ajax({
                type : "GET",
                dataType:"json",
                url :"http://trangkk.com/thietbiso/index/index",
                data:{proid:proid},
                success:function(result){
                    var html="";
                    var html2="";
                    $('.content-row').empty();
                    html+="<h4 class='modal-title'>Tên sản phẩm:"+result[0].ProductName+"</h4>";
                    html+='<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">';
                    html+=            '<img src="img/sanpham/small/'+result[0].Image+'" class="img-responsive"/>';
                    html+='        </div>';
                    html+='        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">';
                     html+='           <table class="table table-bordered">';
                     html+='               <tr>';
                      html+='                  <th>Màn hình</th>';
                      html+='                  <td>'+result[0].Screen+'</td>';
                      html+='              </tr>';
                     html+='               <tr>';
                     html+='                   <th>CPU</th>';
                     html+='                   <td>'+result[0].CPU+'</td>';
                      html+='              </tr>';
                      html+='              <tr>';
                       html+='                 <th>Ram</th>';
                       html+='                 <td>'+result[0].Ram+'</td>';
                       html+='             </tr>';
                       html+='             <tr>';
                        html+='                <th>Hệ điều hành</th>';
                        html+='                <td>'+result[0].OS+'</td>';
                         html+='           </tr>';
                         html+='           <tr>';
                         html+='               <th>Camera</th>';
                         html+='               <td>'+result[0].Camera+'</td>';
                         html+='           </tr>';
                          html+='          <tr>';
                           html+='             <th>Pin</th>';
                           html+='             <td>'+result[0].Pin+'</td>';
                             html+='       </tr>';
                             html+='       <tr>';
                             html+='           <th>Khác</th>';
                             html+='           <td></td>';
                              html+='      </tr';
                              html+='      <tr>';
                              html+='          <th>Giá</th>'
                              html+='          <td>'+result[0].Price+'</td>';
                              html+='      </tr>';
                               html+='     <tr>';
                               html+='         <th>Bảo hành</th>';
                               html+='         <td>'+result[0].Guaranty+'</td>';
                                html+='    </tr>';
                               html+=' </table>';
                           html+=' </div>';
                    $('.content-row').append(html);
                 }
            });
        });
});
//$("document").ready(function(){
//function add2cart(obj){
//	var pID = $(obj).attr('id');
////        alert(pID);
//	$.ajax({
//			type : 'POST',
//			url : 'http://trangkk.com/thietbiso/',
//			dataType : 'json',
//			data: {action:'add2cart', pID:pID},
//			success : function(){
//                        }
//		});
//	return false;
//}
//
//$('.pro_img').click(function(event){
//    event.preventDefault();
////    alert("skjksajdkjkjkjl");
//    add2cart(this);
//});
//});