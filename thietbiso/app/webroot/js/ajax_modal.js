//$("document").ready(function(){
    function click_modal(id,idc){

        var proid = id;

        $.ajax({
                type : "GET",
                dataType:"json",
                url :"http://thietbiso.com/index/index",
                data:{proid:proid},
                success:function(result){
                    var html="";
                    var html2="";
                    if(idc==4){
                        $('#pkModal').empty();
                        var title='<center><span class="bold">Sản phẩm liên quan</span><br/></center>';
//                    $.each(result,function(key,value){
                        if (key == 0) {
                            html += '        <div class="modal-dialog">';
                    html += '           <!-- Modal content-->';
                    html += '           <div class="modal-content">';
                    html += '               <div class="modal-header">';
                    html += '                  <button type="button" class="close" data-dismiss="modal">&times;</button>';
                    html += '                  <h4 class="modal-title">&nbsp;&nbsp;Tên sản phẩm:' + result[0].ProductName + '</h4>';
                    html += '               </div>';
                    html += '             <div class="modal-body">';
                    html += '                  <div class="row">';
                    html += '                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">';
                    html += '                          <img src="img/sanpham/small/' + result[0].Image + '" class="img-responsive cell pro_img img"/>';
                    html += '                      </div>';
                    html += '                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">';
                    html += '                  </div>';
                    html += '                   </div>';
                    html += '             </div>';
                    html += '<div class="modal-footer">';

                    html += '            <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>';
                    html += '         </div>';
                    html += '         </div>';
                    html += '         </div>';
                        }
//                    });
                        $('#pkModal').append(html);
//                        alert(result[0].id);
                        
                    }else{
                    $('.content-row').empty();
                    $('.content-row-2').empty();
                    var title='<center><span class="bold">Sản phẩm liên quan</span><br/></center>';
                    $.each(result,function(key,value){
                        if(key==0){
                            html += "<h4 class='modal-title'>&nbsp;&nbsp;Tên sản phẩm:" + value.ProductName + "</h4>";
                            html += '<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">';
                            html += '<img src="img/sanpham/small/' + value.Image + '" class="img-responsive cell pro_img img"/>';
                            html += '        </div>';
                            html += '        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">';
                            html += '           <table class="table table-bordered">';
                            html += '               <tr>';
                            html += '                  <th>Màn hình</th>';
                            html += '                  <td>' + value.Screen + '</td>';
                            html += '              </tr>';
                            html += '               <tr>';
                            html += '                   <th>CPU</th>';
                            html += '                   <td>' + value.CPU + '</td>';
                            html += '              </tr>';
                            html += '              <tr>';
                            html += '                 <th>Ram</th>';
                            html += '                 <td>' + value.Ram + '</td>';
                            html += '             </tr>';
                            html += '             <tr>';
                            html += '                <th>Hệ điều hành</th>';
                            html += '                <td>' + value.OS + '</td>';
                            html += '           </tr>';
                            html += '           <tr>';
                            html += '               <th>Camera</th>';
                            html += '               <td>' + value.Camera + '</td>';
                            html += '           </tr>';
                            html += '          <tr>';
                            html += '             <th>Pin</th>';
                            html += '             <td>' + value.Pin + '</td>';
                            html += '       </tr>';
                            html += '       <tr>';
                            html += '           <th>Khác</th>';
                            html += '           <td></td>';
                            html += '      </tr';
                            html += '      <tr>';
                            html += '          <th>Giá</th>'
                            html += '          <td>' + value.Price + '</td>';
                            html += '      </tr>';
                            html += '     <tr>';
                            html += '         <th>Bảo hành</th>';
                            html += '         <td>' + value.Guaranty + '</td>';
                            html += '    </tr>';
                            html += ' </table>';
                            html += ' </div>';
                       }else{
                                
                                
                                html2+=       '<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 border product">';
                                html2+=            '<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12" style="margin-top:10px !important;">';
                                html2+=                '<center>';
                                html2+=                    '<img id="zoom01" data-zoom-image="img/sanpham/small/'+value.Image+'" src="img/sanpham/small/'+value.Image+'" class="img-responsive cell pro_img img" data-toggle="modal" data-target="#proModal" />';
                                html2+=                    '<span class="glyphicon glyphicon-zoom-in" data-toggle="modal" data-target="#zoomModal" style="position:absolute; right:0px; cursor:pointer;"></span>';
                                html2+=                '</center>';
                                html2+=           ' </div>';
                                html2+=            '<span>Tên: <a href="sanpham.html"><b>'+value.ProductName+'</b></a></span><br/>';
                                html2+=            '<span>Giá:<span style="color: red;">'+value.Price+'</span></span><br/>';
                                html2+=            "<center><a  class='btn btn-success btn-sm' href='?cart=<?php echo $valueFitting['Product']['id'];?>Thêm vào giỏ hàng</a></center>";
                                html2+=        '</div>';}
                            });
                    $('.content-row').append(html);
//                    $('.content-row2').append(title);
                    $('.content-row-2').append(title,html2);
                    }
//                    
                 }
            });
//        });
    }    
//});