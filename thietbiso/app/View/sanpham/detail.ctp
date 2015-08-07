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
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <img src="../../img/sanpham/small/<?php echo $image;?>" alt="" class="img-responsive" style="width: 100% !important;"/>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <table class="table table-bordered" style="margin-top: 30px !important;">
                        
                        <tbody>
                            <tr>
                                <th>Tên sản phẩm</th>
                                <td><?php echo $name;?></td>
                            </tr>
                            <tr>
                                <th>Màn hình</th>
                                <td><?php echo $screen;?> inch</td>
                            </tr>
                            <tr>
                                <th>Vi xử lí</th>
                                <td><?php echo $processor;?></td>
                            </tr>
                            <tr>
                                <th>RAM</th>
                                <td><?php echo $ram;?> GB</td>
                            </tr>
                            <tr>
                                <th>Hệ điều hành</th>
                                <td><?php echo $os;?></td>
                            </tr>
                            <tr>
                                <th>Camera</th>
                                <td><?php echo $camera;?> Mpx</td>
                            </tr>
                            <tr>
                                <th>Pin</th>
                                <td><?php echo $pin;?> mAh</td>
                            </tr>
                            <tr>
                                <th>Khác</th>
                                <td><?php echo $other;?></td>
                            </tr>
                            <tr>
                                <th>Giá</th>
                                <td><span style="color: red"><?php echo $price;?></span> VND</td>
                            </tr>
                            <tr>
                                <th>Bảo hành</th>
                                <td><?php echo $guaranty;?> tháng</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div><hr/>
            <center><h3>Sản phẩm liên quan</h3></center>
            <div class="row">
                <?php $i=1; foreach ($connect_pro as $value):?>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 border product">
                    
                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12" style="margin-top:10px !important;">
                            <center>
                                <?php echo $this->Html->link($this->Html->tag('img','',array('src'=>'../../img/sanpham/small/'.$value['Product']['Image'],"class"=>"img-responsive pro_img cell img")),array('controller'=>'sanpham','action'=>'detail',$value['Product']['id']),array('escape' => false));?>
                                <?php //echo $this->Html->link($this->Html->tag('img', '', array('src' => 'img/sanpham/small/' . $value['Product']['Image'], "class" => "img-responsive pro_img cell img")), array('controller' => 'sanpham', 'action' => 'detail', $value['Product']['id']), array('escape' => false)); ?>
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
        </div>


    </div>
    <hr/>
</div>



