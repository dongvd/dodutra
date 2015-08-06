<div class="container content">

    <hr/>
    <div class="row" style="margin-top: 20px;">

        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
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
                            <a class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Apple</a>
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

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h3><?php echo $title; ?></h3>
            <?php echo $content; ?>
            <br/><br/><b>Posted by Admin <?php echo $created;?></b>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="max-height: 500px; overflow: scroll;">
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
</div>
