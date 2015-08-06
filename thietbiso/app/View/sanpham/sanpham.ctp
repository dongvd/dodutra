<div class="container content">
    <hr/>
    <div class="row" style="margin-top: 20px;">

        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
            <!--Search-->
            <form method="post" action="resultsearch">
            <div class="row">
                <div class="input-group">
                    
                        <input type="text" class="form-control" name="text-search" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" name="search" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                        </span>
                    
                </div>
            </div>
            </form> 
            
            <!--Category-->
                        
            <div class="row">
                <!--Category-->
                <div id="menu" class="col-lg-12 col-md-12 col-sm-12 hidden-xs">
                    <div class="panel list-group">
                        <span class="list-group-item bold" style="background: #000; color:greenyellow;">Danh mục sản phẩm</span>
                        <?php
//                        foreach ($dataCate as $valueCate) {
//                            $idCate=$valueCate["Category"]["Id"];
                        ?>
                        <span class="list-group-item pointer bold" data-toggle="collapse" data-target="#sm" data-parent="#menu">Điện thoại di động</span>
                        <?php //} ?>
                                                <div id="sm" class="sublinks collapse">
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Apple',array('controller'=>'sanpham','action'=>'sanpham?idSupp=1&idCate=1'),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Samsung',array('controller'=>'sanpham','action'=>'sanpham?idSupp=2&idCate=1'),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Sony',array('controller'=>'sanpham','action'=>'sanpham?idSupp=8&idCate=1'),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'LG',array('controller'=>'sanpham','action'=>'sanpham?idSupp=9&idCate=1'),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'HTC',array('controller'=>'sanpham','action'=>'sanpham?idSupp=10&idCate=1'),array('class'=>'list-group-item small','escape'=>false));?>
                        </div>
                        <span class="list-group-item pointer bold" data-toggle="collapse" data-target="#s1" data-parent="#menu">Máy tính bảng</span>
                        <div id="s1" class="sublinks collapse">
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Samsung',array('controller'=>'sanpham','action'=>'sanpham?idSupp=2&idCate=2'),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Apple',array('controller'=>'sanpham','action'=>'sanpham?idSupp=1&idCate=2'),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Huawei',array('controller'=>'sanpham','action'=>'sanpham?idSupp=11&idCate=2'),array('class'=>'list-group-item small','escape'=>false));?>
                        </div>

                        <span class="list-group-item pointer bold" data-toggle="collapse" data-target="#s3" data-parent="#menu">Laptop</span>
                        <div id="s3" class="sublinks collapse">
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Samsung',array('controller'=>'sanpham','action'=>'sanpham?idSupp=2&idCate=3'),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Sony',array('controller'=>'sanpham','action'=>'sanpham?idSupp=8&idCate=3'),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'HP',array('controller'=>'sanpham','action'=>'sanpham?idSupp=13&idCate=3'),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'DELL',array('controller'=>'sanpham','action'=>'sanpham?idSupp=16&idCate=3'),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Apple',array('controller'=>'sanpham','action'=>'sanpham?idSupp=5&idCate=3'),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Lenovo',array('controller'=>'sanpham','action'=>'sanpham?idSupp=5&idCate=3'),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Acer',array('controller'=>'sanpham','action'=>'sanpham?idSupp=6&idCate=3'),array('class'=>'list-group-item small','escape'=>false));?>
                        </div>

                        <span class="list-group-item pointer bold" data-toggle="collapse" data-target="#s5" data-parent="#menu">Phụ kiện</span>
                        <div id="s5" class="sublinks collapse">
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Phụ kiện máy tính',array('controller'=>'sanpham','action'=>'sanpham?idSupp=14&idCate=4'),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Phụ kiện điện thoại',array('controller'=>'sanpham','action'=>'sanpham?idSupp=15&idCate=4'),array('class'=>'list-group-item small','escape'=>false));?>
                        </div>
                    </div>

                </div>
                <hr/>

                
                <div id="filter" class="col-lg-12 col-md-12 col-sm-12 hidden-xs">
                    <div class="panel list-group">
                        <span class="list-group-item bold" style="background: #000; color:greenyellow;">LỌC THEO</span>
                        <span class="list-group-item pointer bold" data-toggle="collapse" data-target="#price" data-parent="#menu">Giá sản phẩm</span>
                        <div id="price" class="sublinks collapse">
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'1 triệu -> 3 triệu',array('controller'=>'sanpham','action'=>'sanpham?min=1000000&max=3000000'),array('class'=>'list-group-item small','escape'=>false)); ?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'3 triệu -> 5 triệu',array('controller'=>'sanpham','action'=>'sanpham?min=3000000&max=5000000'),array('class'=>'list-group-item small','escape'=>false)); ?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'5 triệu -> 7 triệu',array('controller'=>'sanpham','action'=>'sanpham?min=5000000&max=7000000'),array('class'=>'list-group-item small','escape'=>false)); ?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'7 triệu -> 10 triệu',array('controller'=>'sanpham','action'=>'sanpham?min=7000000&max=10000000'),array('class'=>'list-group-item small','escape'=>false)); ?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'10 triệu -> 13 triệu',array('controller'=>'sanpham','action'=>'sanpham?min=10000000&max=13000000'),array('class'=>'list-group-item small','escape'=>false)); ?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'13 triệu -> 15 triệu',array('controller'=>'sanpham','action'=>'sanpham?min=13000000 & max=15000000'),array('class'=>'list-group-item small','escape'=>false)); ?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'15 triệu -> 20 triệu',array('controller'=>'sanpham','action'=>'sanpham?min=15000000 & max=20000000'),array('class'=>'list-group-item small','escape'=>false)); ?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Lớn hơn 20 triệu',array('controller'=>'sanpham','action'=>'sanpham?min=20000000'),array('class'=>'list-group-item small','escape'=>false)); ?>
                        </div>
                        <span class="list-group-item pointer bold" data-toggle="collapse" data-target="#display" data-parent="#menu">Kích thước màn hình</span>
                        <div id="display" class="sublinks collapse">
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Nhỏ hơn 3.5 inch',array('controller'=>'sanpham','action'=>'sanpham?min=1000000 & max=3000000'),array('class'=>'list-group-item small','escape'=>false)); ?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'3.5 inch - > 5 inch',array('controller'=>'sanpham','action'=>'sanpham?min=1000000 & max=3000000'),array('class'=>'list-group-item small','escape'=>false)); ?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'5 inch -> 7 inch',array('controller'=>'sanpham','action'=>'sanpham?min=1000000 & max=3000000'),array('class'=>'list-group-item small','escape'=>false)); ?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'7 inch -> 12 inch',array('controller'=>'sanpham','action'=>'sanpham?min=1000000 & max=3000000'),array('class'=>'list-group-item small','escape'=>false)); ?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'12 inch -> 14 inch',array('controller'=>'sanpham','action'=>'sanpham?min=1000000 & max=3000000'),array('class'=>'list-group-item small','escape'=>false)); ?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Lớn hơn 14 inch',array('controller'=>'sanpham','action'=>'sanpham?min=1000000 & max=3000000'),array('class'=>'list-group-item small','escape'=>false)); ?>
                        </div>

                        <span class="list-group-item pointer bold" data-toggle="collapse" data-target="#ram" data-parent="#menu">Ram</span>
                        <div id="ram" class="sublinks collapse">
                            
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Nhỏ hơn 1 Gb',array('controller'=>'sanpham','action'=>'sanpham?min=1000000 & max=3000000'),array('class'=>'list-group-item small','escape'=>false)); ?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'1 Gb -> 2 Gb',array('controller'=>'sanpham','action'=>'sanpham?min=1000000 & max=3000000'),array('class'=>'list-group-item small','escape'=>false)); ?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'2 Gb -> 4 Gb',array('controller'=>'sanpham','action'=>'sanpham?min=1000000 & max=3000000'),array('class'=>'list-group-item small','escape'=>false)); ?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Lớn hơn 4 Gb',array('controller'=>'sanpham','action'=>'sanpham?min=1000000 & max=3000000'),array('class'=>'list-group-item small','escape'=>false)); ?>
                        </div>

                        <span class="list-group-item pointer bold" data-toggle="collapse" data-target="#pin" data-parent="#menu">Pin</span>
                        <div id="pin" class="sublinks collapse">
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Nhỏ hơn 2000mAh',array('controller'=>'sanpham','action'=>'sanpham?min=1000000 & max=3000000'),array('class'=>'list-group-item small','escape'=>false)); ?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'2000mAh - > 3000mAh',array('controller'=>'sanpham','action'=>'sanpham?min=1000000 & max=3000000'),array('class'=>'list-group-item small','escape'=>false)); ?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'3000mAh -> 4000mAh',array('controller'=>'sanpham','action'=>'sanpham?min=1000000 & max=3000000'),array('class'=>'list-group-item small','escape'=>false)); ?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Lớn hơn 4000mAh',array('controller'=>'sanpham','action'=>'sanpham?min=1000000 & max=3000000'),array('class'=>'list-group-item small','escape'=>false)); ?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'4 Cell',array('controller'=>'sanpham','action'=>'sanpham?min=1000000 & max=3000000'),array('class'=>'list-group-item small','escape'=>false)); ?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'6 Cell',array('controller'=>'sanpham','action'=>'sanpham?min=1000000 & max=3000000'),array('class'=>'list-group-item small','escape'=>false)); ?>
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
                <center><span class="bold" style="font-size: 18px !important; color: green;">DANH SÁCH SẢN PHẨM</span></center>
            </div>
            <div class="row">
                <?php $i=1; foreach ($list_product as $value):?>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 border product" >
                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12" style="margin-top:10px !important;">
                            <center>  
                                <?php echo $this->Html->link($this->Html->tag('img', '', array('src' => '/img/sanpham/small/' . $value['Product']['Image'], "class" => "img-responsive pro_img cell img")), array('controller' => 'sanpham', 'action' => 'detail', $value['Product']['id']), array('escape' => false)); ?>
                            </center>
                        </div>
                        <span>Tên: <a><?php echo $value["Product"]["ProductName"]; ?></a></span><br/>
                        <span>Giá:<span style="color: red;"><?php echo $value["Product"]["Price"]; ?></span></span><br/>
                        <center>
                            <a  class="btn btn-success btn-sm" href="?cart=<?php echo $value["Product"]["id"]; ?>">Thêm vào giỏ hàng</a>
                        </center>
                    </div>
                <?php $i++;endforeach;?>                
                
            </div>
            <div class="row">
                    <center>
                        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal" style="margin-top: 10px !important;">Xem tiếp còn ... sản phẩm nữa</button>
                    </center>
                </div>
        </div>


    </div>
    <hr/>
</div>

