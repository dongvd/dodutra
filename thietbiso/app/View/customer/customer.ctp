<div class="container content">

    <hr/>
    <div class="row" style="margin-top: 20px;">

        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
            <!--Search-->
            <form method="post" action="/thietbiso/sanpham/resultsearch">
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
            <div class="row ">
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
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <?php 
//                            echo "<pre>";
//                            var_dump($this->Session->read("login")); exit;
                        ?>
                        <center>
                            <div class="fb-page" data-href="https://www.facebook.com/pages/Thi%E1%BA%BFt-b%E1%BB%8B-s%E1%BB%91/852071751497173?ref=aymt_homepage_panel" data-width="230" data-height="250" data-hide-cover="false" data-show-facepile="true" data-show-posts="true">
                                <div class="fb-xfbml-parse-ignore">
                                    <blockquote cite="https://www.facebook.com/pages/Thi%E1%BA%BFt-b%E1%BB%8B-s%E1%BB%91/852071751497173?ref=aymt_homepage_panel">
                                        <a href="https://www.facebook.com/pages/Thi%E1%BA%BFt-b%E1%BB%8B-s%E1%BB%91/852071751497173?ref=aymt_homepage_panel">Thiết bị số</a>
                                    </blockquote>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
            <h3>THÔNG TIN CÁ NHÂN</h3>
            <table>
                <?php 
                    foreach ($dataUser as $valueUser) {

                    
                ?>
                <tr>
                    <th>Họ tên:</th>
                    <td><?php echo $valueUser["users"]["LastName"]." ".$valueUser["users"]["FirstName"] ?></td>
                </tr>
                <tr>
                    <th>SDT :</th>
                    <td><?php echo $valueUser["users"]["Phone"] ?></td>
                </tr>
                <tr>
                    <th>Địa chỉ:</th>
                    <td><?php echo $valueUser["users"]["Address"] ?></td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td><?php echo $valueUser["users"]["Email"] ?></td>
                </tr>
                    <?php }?>
            </table>
            <button class="btn btn-success" data-toggle="modal" data-target="#infoModal">Edit</button>
            <h4>Các hóa đơn đã thanh toán</h4>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>STT:</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng:</th>
                        <th>Đơn giá:</th>
                        <th>Ngày:</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table><hr/>
            <h4>Các hóa đơn chưa thanh toán</h4>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>STT:</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng:</th>
                        <th>Đơn giá:</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a name="xoa" class="pointer">Xóa</a></td>
                    </tr>
                    <tr>
                        <td colspan="5"><span class="btn btn-success">Thanh toán</span></td>
                    </tr>
                </tbody>
            </table><hr/>
        </div>
    </div>
    <hr/>
</div>
<!--modal phụ kiện-->
        <div class="modal fade" id="infoModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Thông tin cá nhân</h4>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <table class="table table-bordered">
                            <tr>
                                <th>Họ tên</th>
                                <td><input type="text" name="hoten" value=""/></td>
                            </tr>
                            <tr>
                                <th>SDT</th>
                                <td><input type="text" name="sdt" value=""/></td>
                            </tr>
                            <tr>
                                <th>Địa chỉ</th>
                                <td><input type="text" name="dc" value=""/></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td><input type="text" name="email" value=""/></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><button class="btn btn-success" name="update_infor">Cập nhật</button></td>
                            </tr>
                        </table>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

