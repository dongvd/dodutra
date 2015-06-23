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
                <div id="menu" class="col-lg-12 col-md-12 col-sm-12 hidden-xs">
                    <div class="panel list-group">
                        <span class="list-group-item bold" style="background: #000; color:greenyellow;">Danh mục sản phẩm</span>
                        <span class="list-group-item pointer bold" data-toggle="collapse" data-target="#sm" data-parent="#menu">Điện thoại di động</span>
                        <div id="sm" class="sublinks collapse">
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Apple',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Samsung',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Sony',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'LG',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'HTC',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false));?>
                        </div>
                        <span class="list-group-item pointer bold" data-toggle="collapse" data-target="#s1" data-parent="#menu">Máy tính bảng</span>
                        <div id="s1" class="sublinks collapse">
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Samsung',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Apple',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Microsoft',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false));?>
                        </div>

                        <span class="list-group-item pointer bold" data-toggle="collapse" data-target="#s3" data-parent="#menu">Laptop</span>
                        <div id="s3" class="sublinks collapse">
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Samsung',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Sony',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'HP',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'DELL',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Apple',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Lenovo',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Acer',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false));?>
                        </div>

                        <span class="list-group-item pointer bold" data-toggle="collapse" data-target="#s5" data-parent="#menu">Phụ kiện</span>
                        <div id="s5" class="sublinks collapse">
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Phụ kiện máy tính',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false));?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Phụ kiện điện thoại',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false));?>
                        </div>
                    </div>

                </div>
                <div id="filter" class="col-lg-12 col-md-12 col-sm-12 hidden-xs">
                    <div class="panel list-group">
                        <span class="list-group-item bold" style="background: #000; color:greenyellow;">LỌC THEO</span>
                        <span class="list-group-item pointer bold" data-toggle="collapse" data-target="#price" data-parent="#menu">Giá sản phẩm</span>
                        <div id="price" class="sublinks collapse">
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'1 triệu -> 3 triệu',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false)); ?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'3 triệu -> 5 triệu',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false)); ?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'5 triệu -> 7 triệu',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false)); ?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'7 triệu -> 10 triệu',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false)); ?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'10 triệu -> 13 triệu',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false)); ?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'13 triệu -> 15 triệu',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false)); ?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'15 triệu -> 20 triệu',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false)); ?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Lớn hơn 20 triệu',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false)); ?>
                        </div>
                        <span class="list-group-item pointer bold" data-toggle="collapse" data-target="#display" data-parent="#menu">Kích thước màn hình</span>
                        <div id="display" class="sublinks collapse">
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Nhỏ hơn 3.5 inch',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false)); ?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'3.5 inch - > 5 inch',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false)); ?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'5 inch -> 7 inch',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false)); ?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'7 inch -> 12 inch',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false)); ?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'12 inch -> 14 inch',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false)); ?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Lớn hơn 14 inch',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false)); ?>
                        </div>

                        <span class="list-group-item pointer bold" data-toggle="collapse" data-target="#ram" data-parent="#menu">Ram</span>
                        <div id="ram" class="sublinks collapse">
                            
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Nhỏ hơn 1 Gb',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false)); ?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'1 Gb -> 2 Gb',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false)); ?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'2 Gb -> 4 Gb',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false)); ?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Lớn hơn 4 Gb',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false)); ?>
                        </div>

                        <span class="list-group-item pointer bold" data-toggle="collapse" data-target="#pin" data-parent="#menu">Pin</span>
                        <div id="pin" class="sublinks collapse">
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Nhỏ hơn 2000mAh',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false)); ?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'2000mAh - > 3000mAh',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false)); ?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'3000mAh -> 4000mAh',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false)); ?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'Lớn hơn 4000mAh',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false)); ?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'4 Cell',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false)); ?>
                            <?php echo $this->html->link($this->html->tag('span','',array('class'=>'glyphicon glyphicon-chevron-right')).'6 Cell',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'list-group-item small','escape'=>false)); ?>
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
                <?php
                    for($i=0;$i<16;$i++){
                        echo '
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 border " >
                                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12" style="margin-top:10px !important;">
                                    <center>
                                        <img id="" data-zoom-image="/img/sanpham/large/HP450.jpg" src="/img/sanpham/large/HP450.jpg" class="img-responsive pro_img cell" data-toggle="modal" data-target="#proModal" />
                                        <span class="glyphicon glyphicon-zoom-in" data-toggle="modal" data-target="#zoomModal" style="position:absolute; right:0px; cursor:pointer;"></span>
                                    </center>
                                </div>
                                <span>Tên: <a>HP ProBook450</a></span><br/>
                                <span>Giá:<span style="color: red;">10.500.000đ</span></span><br/>
                                <center><input type="button" class="btn btn-success btn-sm" value="Thêm vào giỏ hàng"/></center>
                            </div>
                        ';
                    }
                ?>                
                <div class="row">
                    <center>
                        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal" style="margin-top: 10px !important;">Xem tiếp còn ... sản phẩm nữa</button>
                    </center>
                </div>
            </div>
        </div>


    </div>
    <hr/>
</div>

