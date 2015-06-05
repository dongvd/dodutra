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
        <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
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
                            <li><a  class="pointer">Tài khoản của tôi</a></li>
                            <li><a  class="pointer"><span class="glyphicon glyphicon-shopping-cart white"></span>
                                    &nbsp;Giỏ hàng&nbsp;<span class="badge">0</span></a></li>
                            <li><a class="pointer" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in white"></span>&nbsp;Đăng nhập</a></li>
                            <li><a  class="pointer" data-toggle="modal" data-target="#registerModal">Đăng kí</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!--menu-->
            <div class="container-fluid menu">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                            <div class="col-lg-4 col-md-4 hidden-xs hidden-sm"></div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
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
                                                <li><a href="index.php"  class="white mn_hover">TRANG CHỦ</a></li>
                                                <li><a href="gioithieu.php" class="white mn_hover">GIỚI THIỆU</a></li>
                                                <li><a href="sanpham.php" class="white mn_hover">SẢN PHẨM</a></li>
                                                <li class="activex"><a href="bando.php" class="white mn_hover">BẢN ĐỒ</a></li>
                                                <li><a href="lienhe.php" class="white mn_hover">LIÊN HỆ</a></li>
                                            </ul>
                                        </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end menu-->
            
            <!--content-->
            <div class="container content">
                
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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3723.856276141077!2d105.77415599999999!3d21.038436!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b628748045%3A0xf180050945d02164!2zVHLGsOG7nW5nIELhu5NpIGTGsOG7oW5nIEPDoW4gYuG7mSBRdeG6o24gbMO9IFbEg24gaG_DoSBUaOG7gyB0aGFvIHbDoCBEdSBs4buLY2g!5e0!3m2!1svi!2s!4v1433485138941" width="100%" height="450px" frameborder="0" style="border:0"></iframe>
                    </div>
                    
                
                </div>
            <hr/>
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
                                <label class="control-label col-sm-6" for="email">Email:</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-6" for="pwd">Password:</label>
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
                                    <button type="submit" class="btn btn-success" name="login">Login</button>
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
