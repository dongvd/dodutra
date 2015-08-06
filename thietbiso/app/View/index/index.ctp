<?php 
    
//    var_dump($_POST);
?>
<div class="container content">
    <div class="row">
        <!--Slide-->
        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12" style="margin: 0px !important; padding: 0px !important;">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!--Indicators--> 
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                </ol>

                <!--Wrapper for slides--> 
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                                <?php echo $this->html->image('01.jpg',array('alt'=>'ss s5'));?>
                    </div>
                    <div class="item">
                                <?php echo $this->html->image('02.jpg',array('alt'=>'lumia'));?>
                    </div>
                    <div class="item">
                                <?php echo $this->html->image('03.jpg',array('alt'=>'htc'));?>
                    </div>
                    <div class="item">
                                <?php echo $this->html->image('04.jpg',array('alt'=>'iphone'));?>
                    </div>
                    <div class="item">
                                <?php echo $this->html->image('05.jpg',array('alt'=>'lumia 1520'));?>
                    </div>
                </div>

                <!--Left and right controls--> 
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
        <!--Slides Container--> 


        <!--News-->
        <div class="col-lg-5 col-md-5 col-sm-12 hidden-xs new">
            <hr/>
            <?php $i=1;foreach($list_news as $value):?>
            <div class="row clr_padding" >
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                    <span><?php echo $this->html->link($value['News']['title'],array('controller'=>'news','action'=>'news',$value['News']['id'],$value['News']['alias']),array('escape'=>false));?></span>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <?php echo $this->html->image($value['News']['image'],array('class'=>'img-responsive'));?>
                </div>
            </div><hr/>
            <?php $i++;endforeach;?>
        </div>
    </div>
    <hr/>
    <div class="row" style="margin-top: 20px;">

        <div class="col-lg-3 col-md-3 col-sm-4 ">
            <!--Search-->
            <form method="post" action="sanpham/resultsearch">
            <div class="row">
                <div class="input-group">
                    
                        <input type="text" class="form-control" name="text-search" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                        </span>
                    
                </div>
            </div>
            </form>    
            <!--Category-->
            <div class="row">
                <div id="menu" class="col-lg-12 col-md-12 col-sm-12 hidden-xs">
                    <div class="panel list-group">
                        <span class="list-group-item bold" style="background: #000; color:greenyellow;">Danh mục sản phẩm</span>
                        <?php
//                        foreach ($dataCate as $valueCate) {
//                            $idCate=$valueCate["Category"]["Id"];
                        ?>
                        <!--<span class="list-group-item pointer bold" data-toggle="collapse" data-target="#sm" data-parent="#menu"><?php echo $valueCate["Category"]["CategoryName"];?></span>-->
                        <?php //} ?>
                                                <div id="sm" class="sublinks collapse">
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Apple',array('controller'=>'sanpham','action'=>'sanpham','idSupp'=>"1",'idCate'=>"1"),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Samsung',array('controller'=>'sanpham','action'=>'sanpham','idSupp'=>"2",'idCate'=>"1"),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Sony',array('controller'=>'sanpham','action'=>'sanpham','idSupp'=>"8",'idCate'=>"1"),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'LG',array('controller'=>'sanpham','action'=>'sanpham','idSupp'=>"9",'idCate'=>"1"),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'HTC',array('controller'=>'sanpham','action'=>'sanpham','idSupp'=>"10",'idCate'=>"1"),array('class'=>'list-group-item small','escape'=>false));?>
                        </div>
                        <span class="list-group-item pointer bold" data-toggle="collapse" data-target="#s1" data-parent="#menu">Máy tính bảng</span>
                        <div id="s1" class="sublinks collapse">
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Samsung',array('controller'=>'sanpham','action'=>'sanpham','idSupp'=>"2",'idCate'=>"2"),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Apple',array('controller'=>'sanpham','action'=>'sanpham','idSupp'=>"1",'idCate'=>"2"),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Microsoft',array('controller'=>'sanpham','action'=>'sanpham','idSupp'=>"2",'idCate'=>"2"),array('class'=>'list-group-item small','escape'=>false));?>
                        </div>

                        <span class="list-group-item pointer bold" data-toggle="collapse" data-target="#s3" data-parent="#menu">Laptop</span>
                        <div id="s3" class="sublinks collapse">
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Samsung',array('controller'=>'sanpham','action'=>'sanpham','idSupp'=>"2",'idCate'=>"3"),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Sony',array('controller'=>'sanpham','action'=>'sanpham','idSupp'=>"8",'idCate'=>"3"),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'HP',array('controller'=>'sanpham','action'=>'sanpham','idSupp'=>"13",'idCate'=>"3"),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'DELL',array('controller'=>'sanpham','action'=>'sanpham','idSupp'=>"16",'idCate'=>"3"),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Apple',array('controller'=>'sanpham','action'=>'sanpham','idSupp'=>"1",'idCate'=>"3"),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Lenovo',array('controller'=>'sanpham','action'=>'sanpham','idSupp'=>"5",'idCate'=>"3"),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Acer',array('controller'=>'sanpham','action'=>'sanpham','idSupp'=>"6",'idCate'=>"3"),array('class'=>'list-group-item small','escape'=>false));?>
                        </div>

                        <span class="list-group-item pointer bold" data-toggle="collapse" data-target="#s5" data-parent="#menu">Phụ kiện</span>
                        <div id="s5" class="sublinks collapse">
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Phụ kiện máy tính',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Phụ kiện điện thoại',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false));?>
                        </div>
                    </div>

                </div>
                <hr/>

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
        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
            <div class="row">
                <center><span class="bold" style="font-size: 18px !important; color: green;">LAPTOP</span></center>
            </div>
            <div class="row content-lap" id="content">
                <?php
                    $i=0;
                    foreach ($dataLaptop as $value) {
                        $img="sanpham/small/".$value["Product"]["Image"];
                        $id=$value["Product"]["id"];
                        $idc=$value["Product"]["categories_id"];
                        $idsupp=$value["Product"]["suppliers_id"];
                ?>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 border product" >
                                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12" style="margin-top:10px !important;">
                                    <center>
                                        <?php echo $this->Html->link($this->Html->tag('img','',array('src'=>'/img/sanpham/small/'.$value['Product']['Image'],"class"=>"img-responsive pro_img cell img")),array('controller'=>'sanpham','action'=>'detail',$value['Product']['id']),array('escape' => false));?>
                                    </center>
                                </div>
                                <span>Tên: <a><?php echo $value["Product"]["ProductName"];?></a></span><br/>
                                <span>Giá:<span style="color: red;"><?php echo $value["Product"]["Price"];?></span></span><br/>
                                <center>
                               <a class="btn btn-success btn-sm" href="?cart=<?php echo $value["Product"]["id"];?>">Thêm vào giỏ hàng</a>
                                </center>
                            </div>
                <?php
                        $i++;
                    }
                ?>
             </div>   
                <div class="row">
                    <center>
                        <?php $i=0;foreach ($dataLaptop as $value):?>
                            <a href="/san-pham/<?php echo $value['Product']['categories_id'];?>"><button type="button" class="btn btn-default btn-sm" style="margin-top: 10px !important;">Xem tiếp sản phẩm</button></a>
                        <?php endforeach;?>
                    </center>
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
            <div class="row content-phone" id="content">
            <?php
                foreach ($dataPhone as $valuePhone) {
                    $imgPhone="sanpham/small/".$valuePhone["Product"]["Image"];
                    $idp=$valuePhone["Product"]["id"];
                    $idc=$valuePhone["Product"]["categories_id"];
                    $idsuppP=$valuePhone["Product"]["suppliers_id"];
            ?>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 border product" >
                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12" >
                            <center>
                                <!--<img id="" src="img/sanpham/small/Bphone1.png" class="" data-toggle="modal" data-target="#proModal" />-->
                                <?php echo $this->Html->link($this->Html->tag('img','',array('src'=>'/img/sanpham/small/'.$valuePhone['Product']['Image'],"class"=>"img-responsive pro_img cell img")),array('controller'=>'sanpham','action'=>'detail',$valuePhone['Product']['id']),array('escape' => false));?>
                            </center>
                        </div>
                        <span>Tên: <a><?php echo $valuePhone["Product"]["ProductName"];?></a></span><br/>
                        <span>Giá:<span style="color: red;"><?php echo number_format($valuePhone["Product"]["Price"])."đ";?></span></span><br/>
                        <center><a  class="btn btn-success btn-sm" href="?cart=<?php echo $valuePhone["Product"]["id"];?>">Thêm vào giỏ hàng</a></center>
                    </div>
            <?php
                }
            ?>
            </div>
            <div class="row">
                <center>
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal" onclick="clickmore(<?php echo $idc ?>)" style="margin-top: 10px !important;">Xem tiếp sản phẩm</button>
                </center>
            </div>
            <center><img class="img-responsive" src="img/qc.jpg"/></center>
        </div>

        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
            <center><img src="img/bannersony.jpg" class="img-responsive border" style="margin-top: 20px !important;"/></center>
        </div>
    </div>
    <hr/>
    <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
            <center><img src="img/bannernokia.jpg" class="img-responsive"/></center>
        </div>
        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <center><span class="bold" style="font-size: 20px; color: green;">Tablet</span></center>
                </div>
            </div>
            <div class="row content-tablet" id="content ">
            <?php
                foreach ($dataTablet as $valueTablet) {
                    $imgTablet="sanpham/small/".$valueTablet["Product"]["Image"];
                    $idt=$valueTablet["Product"]["id"];
                    $idc=$valueTablet["Product"]["categories_id"];
//                    $idsuppT=$valueTablet["Product"]["suppliers_id"];
            ?>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 border product" >
                            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12" >
                                <center>
                                    <?php echo $this->Html->link($this->Html->tag('img','',array('src'=>'/img/sanpham/small/'.$valueTablet['Product']['Image'],"class"=>"img-responsive pro_img cell img")),array('controller'=>'sanpham','action'=>'detail',$valueTablet['Product']['id']),array('escape' => false));?>
                                </center>

                            </div>
                            <span>Tên: <a><?php echo $valueTablet["Product"]["ProductName"];?></a></span><br/>
                            <span>Giá: <span style="color: red;"><?php echo number_format($valueTablet["Product"]["Price"])."đ";?></span></span><br/>
                            <center><a  class="btn btn-success btn-sm" href="?cart=<?php echo $valueTablet["Product"]["id"];?>">Thêm vào giỏ hàng</a></center>
                        </div>
            <?php
                }
            ?>
            </div>


            <div class="row">
                <center>
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal" onclick="clickmore(<?php echo $idc ?>)" style="margin-top: 10px !important;">Xem tiếp sản phẩm</button>
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
            <div class="row content-fitting" id="content ">
             <?php
             $i=0;
                foreach ($dataFitting as $valueFitting) {
                    $imgFitting="sanpham/small/".$valueFitting["Product"]["Image"];
                    $id=$valueFitting["Product"]["id"];
                    $idc=$valueFitting["Product"]["categories_id"];
                    $idsuppF=$valueFitting["Product"]["suppliers_id"];
            ?>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 border product" >
                            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12" >
                                <center>
                                    <?php echo $this->Html->link($this->Html->tag('img','',array('src'=>'/img/sanpham/small/'.$valueFitting['Product']['Image'],"class"=>"img-responsive pro_img cell img")),array('controller'=>'sanpham','action'=>'detail',$valueFitting['Product']['id']),array('escape' => false));?>
                                </center>
                            </div>
                            <span>Tên: <a><?php echo $valueFitting["Product"]["ProductName"];?></a></span><br/>
                            <span class="green">Giá: <span style="color:red;"><?php echo number_format($valueFitting["Product"]["Price"])."đ";?></span></span><br/>
                            <center><a  class="btn btn-success btn-sm" href="?cart=<?php echo $valueFitting["Product"]["id"];?>">Thêm vào giỏ hàng</a></center>
                        </div>
                        
            <?php
                $i++;
                }
            ?>
            </div>
            <div class="row">
                <center>
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal" onclick="clickmore(<?php echo $idc ?>)" style="margin-top: 10px !important;">Xem tiếp còn ... sản phẩm nữa</button>
                </center>
            </div>

        </div>
        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
            <center><img src="img/lumia.jpg" class="img-responsive"/></center>
        </div>
    </div>
</div>


