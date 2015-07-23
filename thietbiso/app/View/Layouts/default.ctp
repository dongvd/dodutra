<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Thiết Bị Số</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <?php echo $this->html->css("bootstrap.min.css");?>
    <?php echo $this->html->css("style.css");?>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script language="javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
    <?php echo $this->html->script("boostrap.min");?>
    
    <?php echo $this->html->script("ie8-responsive-file-warning");?>
    <?php echo $this->html->script("jquery.zoom");?>
    <?php echo $this->html->script("jquery.zoom.min");?>
    <?php echo $this->html->script("main");?>
    <?php echo $this->html->script("jquery.min");?>
    <?php echo $this->html->script("ajax_load_more_pro");?>
    <?php echo $this->html->script("jquery.validate");?>
    <?php echo $this->html->script("validate_contact");?>
    <?php echo $this->html->script("validate_register");?>
    <?php echo $this->html->script("ajax_modal");?>
    
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
        
        
    <script type="text/javascript">
        $(document).ready(function () {

            $(window).scroll(function () {
                if ($(window).scrollTop() !== 0) {
                    $('#btt').fadeIn();
                } else
                    $('#btt').fadeOut();
            });
            $('#btt').click(function () {
                $('html, body').animate({scrollTop: 0}, 500);
            });
        });
        //set height
        $(document).ready(function () {
            $('.pro_img').height('150');
        });

    </script>
    <!--Facebook-->
    <script>
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id))
                return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!--Toggle menu-->
    <script>
    $(document).ready(function(){
        $("#click").click(function(){
            $("#toggle_nav").slideToggle();
            });
        });
        
    </script>
</head>
<body>
     <?php 
//     var_dump($this->Session->read("login")); exit;
    ?>
    <nav class="navbar navbar-inverse header hidden-xs">
            <div class=" col-lg-6 col-md-6 hidden-sm hidden-xs">
                <div class="navbar-header">
                    <a class="navbar-brand"></a>
                </div>
            </div>
            <div class="col-md-6">
                <ul class="nav navbar-nav">
                    <li><?php echo $this->html->link('Tài khoản của tôi',array('controller'=>'customer','action'=>'customer'),array('class'=>'pointer')); ?></li>
                    <li><?php 
                    if(isset($total)){
                        if(($total!=0) && ($this->Session->check("login")==true)){
                            $numCart=$total;
                        }else{
                            $numCart=0;
                        }
                    }else{
                        $numCart=0;
                    }
echo $this->Html->link($this->Html->tag('span', '', array('class' => 'glyphicon glyphicon-shopping-cart white'))
                            .$this->Html->tag('span',' Giỏ hàng ').$this->Html->tag('span', "$numCart", array('class' => 'badge txt_head')),
                            array('controller'=>'giohang','action'=>'giohang'),array('escape'=>false));?>
                    </li>
                        <?php 
                        if($this->Session->check("login")==true){
                            $name=$this->Session->read("login.name");
                        }
                                if(!empty($name)){
                                    ?>
 <li><a class="pointer txt_head" href="?p=1" ><span class="glyphicon glyphicon-log-in white"></span>&nbsp;<?php echo $name;?></a></li>
                                <?php
                                    }else{
                                ?>
<li><a class="pointer txt_head" data-toggle="modal" " data-target="#loginModal"><span class="glyphicon glyphicon-log-in white"></span>&nbsp;<?php echo 'Đăng nhập';?></a></li>
                                                     
                            <?php
                                }
                            ?>
                        
                    <li><a class="pointer txt_head" data-toggle="modal" data-target="#registerModal">Đăng kí</a></li>
                </ul>
            </div>
        </nav>

        <div class="col-xs-12 visible-xs " style="background: #000; height: 30px; font-size: 18px; line-height:30px; ">
            <div class="col-xs-2"></div>
            <div class="col-xs-10 clr_padding">
                <div class="col-xs-3 clr_padding"><?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-user white')),array('controller'=>'customer','action'=>'customer'),array('class'=>'pointer','escape'=>false)); ?></div>
                <div class="col-xs-3 clr_padding"><?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-shopping-cart white')).$this->html->tag('span','0',array('class'=>'badge txt_head')),array('controller'=>'giohang','action'=>'giohang'),array('class'=>'pointer txt_head','escape'=>false)); ?></div>
                <div class="col-xs-3 clr_padding"><a class="pointer txt_head" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in white"></span></a></div>
                <div class="col-xs-3 clr_padding"><a class="pointer txt_head" data-toggle="modal" data-target="#registerModal"><span class="glyphicon glyphicon-pencil white"></span></a></div>
            </div>
        </div>
        
        <!--Toggle nav-->
        <div class="container visible-xs" style="position: fixed; z-index: 9999; width: 100%; ">
            <div id="toggle_nav" style="display: none;">
                <div>
                    <div class="panel list-group clr_padding">
                        <span class="list-group-item bold" style="background: #000; color:greenyellow;">Danh mục sản phẩm</span>
                        <span class="list-group-item pointer bold" data-toggle="collapse" data-target="#dt" data-parent="#menu">Điện thoại di động</span>
                        <div id="dt" class="sublinks collapse">
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Apple',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Samsung',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Sony',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'LG',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'HTC',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false));?>
                        </div>
                        <span class="list-group-item pointer bold" data-toggle="collapse" data-target="#tb" data-parent="#menu">Máy tính bảng</span>
                        <div id="tb" class="sublinks collapse">
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Samsung',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Apple',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Microsoft',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false));?>
                        </div>

                        <span class="list-group-item pointer bold" data-toggle="collapse" data-target="#lt" data-parent="#menu">Laptop</span>
                        <div id="lt" class="sublinks collapse">
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Samsung',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Sony',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'HP',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'DELL',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Apple',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Lenovo',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Acer',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false));?>
                        </div>

                        <span class="list-group-item pointer bold" data-toggle="collapse" data-target="#pk" data-parent="#menu">Phụ kiện</span>
                        <div id="pk" class="sublinks collapse">
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Phụ kiện máy tính',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Phụ kiện điện thoại',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false));?>
                        </div>
                    </div>
                </div>
            </div>
            <div style="width: 30px; height: 20px; background: #fff; opacity: 0.7; border-radius: 2px;" id="click">
                <center><span class="glyphicon glyphicon-tasks " style="font-size: 18px;"></span></center>
            </div>
        </div>
        
        
        <!--menu-->
        <div class="container-fluid menu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="col-lg-3 col-md-3 hidden-sm hidden-xs"></div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                            <a href="index.html"><h1 style="color: greenyellow;" class="bold logo">Thiết Bị Số</h1></a>
                            <span class="white hidden-xs">Mang cả thế giới trên đôi bàn tay</span>
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
                                    <!--Nav-->
                                    <?php
                                        if(isset($menu_index))
                                            echo $this->Element('menu_index');
                                        elseif (isset($menu_gioithieu))
                                            echo $this->Element('menu_gioithieu');
                                        elseif (isset($menu_sanpham))
                                            echo $this->Element('menu_sanpham');
                                        elseif (isset($menu_lienhe))
                                            echo $this->Element('menu_lienhe');
                                        else
                                            echo $this->Element('menu_default');
                                        
                                    
                                    ?>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end menu-->
        
        <!--content-->
        <?php echo $this->fetch("content");?>
        
        
        <!--footer-->
        <div class="container" style="background: #e3e3e3;">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="margin-top: 40px !important;">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <span class="bold pointer">Điện thoại di động</span><br/>
                        <div>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-triangle-right')).'Apple',array('controller'=>'sanpham','action'=>'sanpham?idSupp=1&idCate=1'),array('escape'=>false));?><br/>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-triangle-right')).'Samsung',array('controller'=>'sanpham','action'=>'sanpham?idSupp=2&idCate=1'),array('escape'=>false));?><br/>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-triangle-right')).'Sony',array('controller'=>'sanpham','action'=>'sanpham?idSupp=8&idCate=1'),array('escape'=>false));?><br/>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-triangle-right')).'LG',array('controller'=>'sanpham','action'=>'sanpham?idSupp=9&idCate=1'),array('escape'=>false));?><br/>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-triangle-right')).'HTC',array('controller'=>'sanpham','action'=>'sanpham?idSupp=10&idCate=1'),array('escape'=>false));?><br/>
                        </div>    
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <span class=" pointer bold">Laptop</span><br/>
                        <div>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-triangle-right')).'Samsung',array('controller'=>'sanpham','action'=>'sanpham?idSupp=2&idCate=3'),array('escape'=>false));?><br/>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-triangle-right')).'Sony',array('controller'=>'sanpham','action'=>'sanpham?idSupp=8&idCate=3'),array('escape'=>false));?><br/>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-triangle-right')).'HP',array('controller'=>'sanpham','action'=>'sanpham?idSupp=13&idCate=3'),array('escape'=>false));?><br/>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-triangle-right')).'DELL',array('controller'=>'sanpham','action'=>'sanpham?idSupp=16&idCate=3'),array('escape'=>false));?><br/>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-triangle-right')).'Apple',array('controller'=>'sanpham','action'=>'sanpham?idSupp=5&idCate=3'),array('escape'=>false));?><br/>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-triangle-right')).'Lenovo',array('controller'=>'sanpham','action'=>'sanpham?idSupp=5&idCate=3'),array('escape'=>false));?><br/>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-triangle-right')).'Acer',array('controller'=>'sanpham','action'=>'sanpham?idSupp=6&idCate=3'),array('escape'=>false));?><br/>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <span class=" pointer bold">Máy tính bảng</span><br/>
                        <div>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-triangle-right')).'Samsung',array('controller'=>'sanpham','action'=>'sanpham?idSupp=2&idCate=2'),array('escape'=>false));?><br/>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-triangle-right')).'Apple',array('controller'=>'sanpham','action'=>'sanpham?idSupp=1&idCate=2'),array('escape'=>false));?><br/>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-triangle-right')).'Huawei',array('controller'=>'sanpham','action'=>'sanpham?idSupp=11&idCate=2'),array('escape'=>false));?><br/>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <span class=" pointer bold">Phụ kiện</span><br/>
                        <div>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-triangle-right')).'Phụ kiện máy tính',array('controller'=>'sanpham','action'=>'sanpham?idSupp=14&idCate=4'),array('escape'=>false));?><br/>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-triangle-right')).'Phụ kiện điện thoại',array('controller'=>'sanpham','action'=>'sanpham?idSupp=15&idCate=4'),array('escape'=>false));?>
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
                
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                   <div class="modal-body">
                        <div class="row content-row">
                            
                        </div><hr/>
                        <div class="row content-row-2">
                            
                            
                            
                            
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <?php //} ?>
        <!--modal phụ kiện-->
        <div class="modal fade" id="pkModal" role="dialog">
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
<!--                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <center><img src="sanpham/large/HP450.jpg" class="img-responsive"/></center>
                            </div>-->
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
                <form method="post" action="">
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
                                    <input type="email" class="form-control" id="email" name="lgemail" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Password:</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="pwd" name="lgpwd" placeholder="Enter password">
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
                        <button type="submit" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                    </div>
                </div>
                    </form>
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
                        <form class="form-horizontal" role="form" method="post" id="form-register">
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="email">Email:</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="pwd">Password:</label>
                                <div class="col-sm-9">          
                                    <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="re_pwd">Re-enter Password:</label>
                                <div class="col-sm-9">          
                                    <input type="password" class="form-control" id="re_pwd" name="re_pwd" placeholder="Re-Enter password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="fname">First name:</label>
                                <div class="col-sm-9">          
                                    <input type="text" class="form-control" id="fname" name="fname" placeholder="First name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="lname" >Last name:</label>
                                <div class="col-sm-9">          
                                    <input type="text" class="form-control" id="lname" name="lname" placeholder="Last name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="phone">Phone:</label>
                                <div class="col-sm-9">          
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone number">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="addr">Address:</label>
                                <div class="col-sm-9">          
                                    <input type="text" class="form-control" id="addr" name="add"  placeholder="Address">
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
