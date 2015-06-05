<!DOCTYPE html>
<html>
    <head>
        <title>Boostrap Project</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
		
            $(window).scroll(function(){
			if($(window).scrollTop() !== 0 ){
				$('#btt').fadeIn();
			}else $('#btt').fadeOut();
		});
		$('#btt').click(function(){
			$('html, body').animate({scrollTop:0}, 500);
		});
            });
            //set height
            $(document).ready(function(){
                $('.pro_img').height('150');
            });
               
        </script>
        <!--Facebook-->
        <script>
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                 js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        
    </head>
    <body>
            <nav class="navbar navbar-inverse header">
                <div class="row">
                    <div class=" col-lg-6 col-md-6 hidden-sm hidden-xs">
                        <div class="navbar-header">
                            <a class="navbar-brand"></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <ul class="nav navbar-nav">
                            <li><a  class="pointer txt_head">Tài khoản của tôi</a></li>
                            <li><a href="giohang.php" class="pointer txt_head"><span class="glyphicon glyphicon-shopping-cart white"></span>
                                    &nbsp;Giỏ hàng&nbsp;<span class="badge txt_head">0</span></a></li>
                            <li><a class="pointer txt_head" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in white"></span>&nbsp;Đăng nhập</a></li>
                            <li><a class="pointer txt_head" data-toggle="modal" data-target="#registerModal">Đăng kí</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container-fluid menu">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                <div class="col-lg-3 col-md-3 hidden-sm hidden-xs"></div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                    <h1 style="color: greenyellow;" class="bold">Thiết Bị Số</h1>
                                    <span class="white">Mang cả thế giới trên đôi bàn tay</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 hidden-xs hidden-sm">
                                    <br/>
                                    <br/>
                                    <br/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                    <nav class="navbar navbar-inverse navmenu">
                                            <div class="navbar-header">
                                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                </button>
                                            </div>
                                            <div class="collapse navbar-collapse" id="myNavbar">
                                                <ul class="nav navbar-nav">
                                                    <li class="activex"><a href="index.php"  class="white mn_hover">TRANG CHỦ</a></li>
                                                    <li><a href="gioithieu.php" class="white mn_hover">GIỚI THIỆU</a></li>
                                                    <li><a href="sanpham.php" class="white mn_hover">SẢN PHẨM</a></li>
                                                    <li><a href="bando.php" class="white mn_hover">BẢN ĐỒ</a></li>
                                                    <li><a href="lienhe.php" class="white mn_hover">LIÊN HỆ</a></li>
                                                </ul>
                                            </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end menu-->
            
            <!--content-->
            <div class="container content">
                <div class="row">
                    
                    <!--Slide-->
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12" style="margin: 0px !important; padding: 0px !important;">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                <li data-target="#myCarousel" data-slide-to="3"></li>
                                <li data-target="#myCarousel" data-slide-to="4"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="img/01.jpg" alt="SS S5">
                                </div>
                                <div class="item">
                                    <img src="img/02.jpg" alt="Chania">
                                </div>
                                <div class="item">
                                    <img src="img/03.jpg" alt="Flower">
                                </div>
                                <div class="item">
                                    <img src="img/04.jpg" alt="sdg">
                                </div>
                                <div class="item">
                                    <img src="img/05.jpg" alt="sưer">
                                </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <!--News-->
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 border" style="max-height: 225px; overflow: scroll;">
                        <div class="row" style="height: 40px !important;">
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                <span><a>Việt nam tung ra siêu phẩm Smart Phone hàng đầu thế giới Bphone.</a></span>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <img src="sanpham/small/bp.jpg" class="img-responsive"/>
                            </div>
                        </div><hr/>
                        <div class="row" style="height: 40px !important;">
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                <span><a>Việt nam tung ra siêu phẩm Smart Phone hàng đầu thế giới Bphone.</a></span>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <img src="sanpham/small/bp.jpg" class="img-responsive"/>
                            </div>
                        </div><hr/>
                        <div class="row" style="height: 40px !important;">
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                <span><a>Việt nam tung ra siêu phẩm Smart Phone hàng đầu thế giới Bphone.</a></span>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <img src="sanpham/small/bp.jpg" class="img-responsive"/>
                            </div>
                        </div><hr/>
                        <div class="row" style="height: 40px !important;">
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                <span><a>Việt nam tung ra siêu phẩm Smart Phone hàng đầu thế giới Bphone.</a></span>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <img src="sanpham/small/bp.jpg" class="img-responsive"/>
                            </div>
                        </div><hr/>
                        <div class="row" style="height: 40px !important;">
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                <span><a>Việt nam tung ra siêu phẩm Smart Phone hàng đầu thế giới Bphone.</a></span>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <img src="sanpham/small/bp.jpg" class="img-responsive"/>
                            </div>
                        </div><hr/>
                        <div class="row" style="height: 40px !important;">
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                <span><a>Việt nam tung ra siêu phẩm Smart Phone hàng đầu thế giới Bphone.</a></span>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <img src="sanpham/small/bp.jpg" class="img-responsive"/>
                            </div>
                        </div><hr/>
                        <div class="row" style="height: 40px !important;">
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                <span><a>Việt nam tung ra siêu phẩm Smart Phone hàng đầu thế giới Bphone.</a></span>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <img src="sanpham/small/bp.jpg" class="img-responsive"/>
                            </div>
                        </div><hr/>
                        
                    </div>
                </div>
            <hr/>
                <div class="row" style="margin-top: 20px;">
                    
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <!--Search-->
                        <div class="row">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                                </span>
                            </div>
                        </div>
                        <!--Category-->
                        <div class="row">
                            <div id="menu">
                                <div class="panel list-group">
                                    <span class="list-group-item bold" style="background: #000; color:greenyellow;">Danh mục sản phẩm</span>
                                    <span class="list-group-item pointer bold" data-toggle="collapse" data-target="#sm" data-parent="#menu">Điện thoại di động</span>
                                    <div id="sm" class="sublinks collapse">
                                        <a class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Apple</a>
                                        <a class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Samsung</a>
                                        <a class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Sony</a>
                                        <a class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>LG</a>
                                        <a class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>HTC</a>
                                    </div>
                                    <span class="list-group-item pointer bold" data-toggle="collapse" data-target="#s1" data-parent="#menu">Máy tính bảng</span>
                                    <div id="s1" class="sublinks collapse">
                                        <a class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Samsung</a>
                                        <a class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Ipad</a>
                                    </div>
                                    
                                    <span class="list-group-item pointer bold" data-toggle="collapse" data-target="#s3" data-parent="#menu">Laptop</span>
                                    <div id="s3" class="sublinks collapse">
                                        <a class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Samsung</a>
                                        <a class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Sony</a>
                                        <a class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>HP</a>
                                        <a class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>DELL</a>
                                        <a class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Apple</a>
                                        <a class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Lenovo</a>
                                        <a class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Acer</a>
                                    </div>
                                    
                                    <span class="list-group-item pointer bold" data-toggle="collapse" data-target="#s5" data-parent="#menu">Phụ kiện</span>
                                    <div id="s5" class="sublinks collapse">
                                        <a class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Phụ kiện máy tính</a>
                                        <a class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Phụ kiện điện thoại</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <center><div class="fb-page" data-href="https://www.facebook.com/pages/Thi%E1%BA%BFt-b%E1%BB%8B-s%E1%BB%91/852071751497173" data-width="250" data-hide-cover="false" data-show-facepile="true" data-show-posts="true">
                                        <div class="fb-xfbml-parse-ignore">
                                            <blockquote cite="https://www.facebook.com/pages/Thi%E1%BA%BFt-b%E1%BB%8B-s%E1%BB%91/852071751497173">
                                                <a href="https://www.facebook.com/pages/Thi%E1%BA%BFt-b%E1%BB%8B-s%E1%BB%91/852071751497173">Thiết bị số</a>
                                            </blockquote>
                                        </div>
                                    </div></center>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                        <div class="row">
                            <span class="green" style="font-size: 18px !important;">SẢN PHẨM MỚI</span>
                        </div>
                        <div class="row">
                            <?php
                                for($i=0;$i<12;$i++)
                                {
                                    echo '
                                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 border" >
                                            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12" style="margin-top:10px !important;">
                                                <center>
                                                    <img id="zoom01" data-zoom-image="sanpham/large/HP450.jpg" src="sanpham/large/HP450.jpg" class="img-responsive pro_img cell" data-toggle="modal" data-target="#proModal" />
                                                    <span class="glyphicon glyphicon-zoom-in" data-toggle="modal" data-target="#zoomModal" style="position:absolute; right:0px; cursor:pointer;"></span>
                                                </center>
                                                
                                            </div>
                                            <span>Tên:</span><br/>
                                            <span class="green">Giá:</span><br/>
                                            <center><input type="button" class="btn btn-success btn-sm" value="Thêm vào giỏ hàng"/></center>
                                        </div>
                                    ';
                                }
                            ?>
                            
                            
                            <div class="row">
                                <center>
                                    <ul class=" pagination pagination-sm">
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                    </ul>
                                </center>
                            </div>
                    </div>
                </div>
                    
                
                </div>
            <hr/>
            <!--Smart phone-->
                <div class="row">
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 ">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <center><span class="bold" style="font-size: 20px; color: green;">Smart Phone</span></center>
                                </div>
                            </div>
                            <?php
                                for($i=0;$i<8;$i++)
                                {
                                    echo'
                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 border" >
                                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12" >
                                        <center>
                                            <img src="sanpham/small/Bphone1.png" class="img-responsive cell pro_img" data-toggle="modal" data-target="#proModal" />
                                            <span class="glyphicon glyphicon-zoom-in" data-toggle="modal" data-target="#zoomModal" style="position:absolute; right:0px; cursor:pointer;"></span>
                                        </center>
                                        
                                    </div>
                                    <span>Tên:</span><br/>
                                    <span class="green">Giá:</span><br/>
                                    <center><input type="button" class="btn btn-success btn-sm" value="Thêm vào giỏ hàng"/></center>
                                    </div>
                                    ';
                                }
                            ?>
                            <div class="row">
                                <center>
                                    <ul class=" pagination pagination-sm">
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                    </ul>
                                </center>
                            </div>
                            <img class="img-responsive" src="img/qc.jpg"/>
                        </div>
                    
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <img src="img/bannersony.jpg" class="img-responsive border" style="margin-top: 20px !important;"/>
                    </div>
                </div>
            <hr/>
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <img src="img/bannernokia.jpg" class="img-responsive"/>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <center><span class="bold" style="font-size: 20px; color: green;">Tablet</span></center>
                            </div>
                        </div>
                        <?php
                        for($i=0;$i<8;$i++)
                        {
                            echo'
                               <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 border" >
                            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12" >
                                <center>
                                    <img src="sanpham/small/ipad.jpg" class="img-responsive cell pro_img" data-toggle="modal" data-target="#proModal" />
                                    <span class="glyphicon glyphicon-zoom-in" data-toggle="modal" data-target="#zoomModal" style="position:absolute; right:0px; cursor:pointer;"></span>
                                </center>
                                
                            </div>
                            <span>Tên:</span><br/>
                            <span class="green">Giá:</span><br/>
                            <center><input type="button" class="btn btn-success btn-sm" value="Thêm vào giỏ hàng"/></center>
                        </div> 
                        ';}
                        ?>
                        
                        <div class="row">
                            <center>
                                <ul class=" pagination pagination-sm">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                </ul>
                            </center>
                        </div>
                        
                    </div>   
                </div>
            <hr/>
                <div class="row">
                    
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <center><span class="bold" style="font-size: 20px; color: green;">Phụ kiện</span></center>
                            </div>
                        </div>
                        <?php
                        for($i=0;$i<8;$i++)
                        {
                            echo'
                               <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 border" >
                            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12" >
                                <center>
                                    <img src="sanpham/small/Jelly-Ear.jpg" class="img-responsive cell pro_img" data-toggle="modal" data-target="#proModal" />
                                    <span class="glyphicon glyphicon-zoom-in" data-toggle="modal" data-target="#zoomModal" style="position:absolute; right:0px; cursor:pointer;"></span>
                                </center>
                                
                            </div>
                            <span>Tên:</span><br/>
                            <span class="green">Giá:</span><br/>
                            <center><input type="button" class="btn btn-success btn-sm" value="Thêm vào giỏ hàng"/></center>
                        </div> 
                        ';}
                        ?>
                        
                        <div class="row">
                            <center>
                                <ul class=" pagination pagination-sm">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                </ul>
                            </center>
                        </div>
                        
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <img src="img/lumia.jpg" class="img-responsive"/>
                    </div>
                </div>
        </div>
            
        <!--footer-->
        
        
        <div class="container" style="background: #e3e3e3;">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="margin-top: 40px !important;">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <span class="bold pointer">Điện thoại di động</span><br/>
                            <a href=""><span class="glyphicon glyphicon-triangle-right"></span>Apple</a><br/>
                            <a href=""><span class="glyphicon glyphicon-triangle-right"></span>Samsung</a><br/>
                            <a href=""><span class="glyphicon glyphicon-triangle-right"></span>Sony</a><br/>
                            <a href=""><span class="glyphicon glyphicon-triangle-right"></span>LG</a><br/>
                            <a href=""><span class="glyphicon glyphicon-triangle-right"></span>HTC</a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <span class=" pointer bold">Laptop</span><br/>
                            <div>
                                <a href=""><span class="glyphicon glyphicon-triangle-right"></span>Samsung</a><br/>
                                <a href=""><span class="glyphicon glyphicon-triangle-right"></span>Sony</a><br/>
                                <a href=""><span class="glyphicon glyphicon-triangle-right"></span>HP</a><br/>
                                <a href=""><span class="glyphicon glyphicon-triangle-right"></span>DELL</a><br/>
                                <a href=""><span class="glyphicon glyphicon-triangle-right"></span>Apple</a><br/>
                                <a href=""><span class="glyphicon glyphicon-triangle-right"></span>Lenovo</a><br/>
                                <a href=""><span class="glyphicon glyphicon-triangle-right"></span>Acer</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <span class=" pointer bold">Máy tính bảng</span><br/>
                            <div>
                                <a href=""><span class="glyphicon glyphicon-triangle-right"></span>Samsung</a><br/>
                                <a href=""><span class="glyphicon glyphicon-triangle-right"></span>Ipad</a><br/>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <span class=" pointer bold">Phụ kiện</span><br/>
                            <div>
                                <a href=""><span class="glyphicon glyphicon-triangle-right"></span>Phụ kiện máy tính</a><br/>
                                <a href=""><span class="glyphicon glyphicon-triangle-right"></span>Phụ kiện điện thoại</a><br/>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="margin-top: 40px !important;">
                        <span style="font-size: 20px;">Công ty Thiết Bị Số</span><br/>
                        <span class="glyphicon glyphicon-map-marker"> Phường - Quận - Thành Phố</span><br/>
                        <span class="glyphicon glyphicon-envelope"><a href="mailto:thietbiso@gmail.com"> thietbiso@gmail.com</a></span><br/>
                        <span class="glyphicon glyphicon-phone"> 0986581710</span><br/>
                    </div>
                </div>
            </div>
        <!--Btn back to top--><div id="btt" class="toTop" style="display: none;"></div>
        
        <!--modal sản phẩm-->
        <div class="modal fade" id="proModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Tên sản phẩm:</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <img src="sanpham/small/HP450.jpg" class="img-responsive"/>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!--Modal zoom sp-->
        <div class="modal fade" id="zoomModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Tên sản phẩm:</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <center><img src="sanpham/large/HP450.jpg" class="img-responsive"/></center>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!--Modal đăng nhập-->
        <div class="modal fade" id="loginModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <center><h4 class="modal-title">Đăng nhập</h4></center>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Email:</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Password:</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="pwd" placeholder="Enter password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <div class="checkbox">
                                        <label><input type="checkbox"> Remember me</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-success">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!--Modal đăng kí-->
        <div class="modal fade" id="registerModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <center><h4 class="modal-title">Đăng kí</h4></center>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="email">Email:</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="pwd">Password:</label>
                                <div class="col-sm-9">          
                                    <input type="password" class="form-control" id="pwd" placeholder="Enter password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="re_pwd">Re-enter Password:</label>
                                <div class="col-sm-9">          
                                    <input type="password" class="form-control" id="re_pwd" placeholder="Re-Enter password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="fname">First name:</label>
                                <div class="col-sm-9">          
                                    <input type="text" class="form-control" id="fname" placeholder="First name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="lname">Last name:</label>
                                <div class="col-sm-9">          
                                    <input type="text" class="form-control" id="lname" placeholder="Last name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="phone">Phone:</label>
                                <div class="col-sm-9">          
                                    <input type="text" class="form-control" id="phone" placeholder="Phone number">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="addr">Address:</label>
                                <div class="col-sm-9">          
                                    <input type="text" class="form-control" id="addr" placeholder="Address">
                                </div>
                            </div>
                            <div class="form-group">        
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button type="submit" class="btn btn-success" name="register">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>
