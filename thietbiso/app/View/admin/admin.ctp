
<div class="container content">

    <div role="tabpanel">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#products" aria-controls="products" role="tab" data-toggle="tab">SẢN PHẨM</a></li>
            <li role="presentation"><a href="#categories" aria-controls="categories" role="tab" data-toggle="tab">LOẠI SẢN PHẨM</a></li>
            <li role="presentation"><a href="#users" aria-controls="users" role="tab" data-toggle="tab">THÀNH VIÊN</a></li>
            <li role="presentation"><a href="#suppliers" aria-controls="suppliers" role="tab" data-toggle="tab">NHÀ CUNG CẤP</a></li>
            <li role="presentation"><a href="#order" aria-controls="order" role="tab" data-toggle="tab">ĐƠN ĐẶT HÀNG</a></li>
            <li role="presentation"><a href="#news" aria-controls="news" role="tab" data-toggle="tab">BẢN TIN</a></li>
            <li role="presentation"><a href="#log" aria-controls="log" role="tab" data-toggle="tab">HOẠT ĐỘNG</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="products">
                <div id="pro_show">
                    <div style="overflow: scroll; max-height: 600px;">
                        <span>DANH SÁCH SẢN PHẨM</span>
                        <table class="table table-bordered">
                            <thead>
                                <tr class="success">
                                    <th><center>ID</center></th>
                                    <th><center>Name</center></th>
                                    <th><center>CateID</center></th>
                                    <th><center>Quantify</center></th>
                                    <th><center>Description</center></th>
                                    <th><center>Image</center></th>
                                    <th><center>Status</center></th>
                                    <th><center>SupplierID</center></th>
                                    <th><center>Price</center></th>
                                    <th><center>Ram</center></th>
                                    <th><center>OS</center></th>
                                    <th><center>CPU</center></th>
                                    <th><center>Screen</center></th>
                                    <th><center>Camera</center></th>
                                    <th><center>Memory</center></th>
                                    <th><center>Pin</center></th>
                                    <th><center>Other</center></th>
                                    <th><center>Guaranty</center></th>
                                    <th><center>Created</center></th>
                                    <th><center>SaleOff</center></th>
                                    <th><center>Promotion</center></th>
                                    <th><center>Option</center></th>
                                    </tr>
                                </thead>
                            <tbody>
                            <?php
                                $i=1;
                                foreach($products as $arr_pro):?>
                                <tr>
                                    <td><?php echo $arr_pro["Product"]["id"];?></td>
                                    <td><?php echo $arr_pro["Product"]["ProductName"];?></td>
                                    <td><?php echo $arr_pro["Product"]["CategoryId"];?></td>
                                    <td><?php echo $arr_pro["Product"]["Quantify"];?></td>
                                    <td><?php echo $arr_pro["Product"]["Description"];?></td>
                                    <td><?php echo $arr_pro["Product"]["Image"];?></td>
                                    <td><?php echo $arr_pro["Product"]["Status"];?></td>
                                    <td><?php echo $arr_pro["Product"]["Supplier_id"];?></td>
                                    <td><?php echo $arr_pro["Product"]["Price"];?></td>
                                    <td><?php echo $arr_pro["Product"]["Ram"];?></td>
                                    <td><?php echo $arr_pro["Product"]["OS"];?></td>
                                    <td><?php echo $arr_pro["Product"]["CPU"];?></td>
                                    <td><?php echo $arr_pro["Product"]["Screen"];?></td>
                                    <td><?php echo $arr_pro["Product"]["Camera"];?></td>
                                    <td><?php echo $arr_pro["Product"]["Memory"];?></td>
                                    <td><?php echo $arr_pro["Product"]["Pin"];?></td>
                                    <td><?php echo $arr_pro["Product"]["Info_Other"];?></td>
                                    <td><?php echo $arr_pro["Product"]["Guaranty"];?></td>
                                    <td><?php echo $arr_pro["Product"]["Created"];?></td>
                                    <td><?php echo $arr_pro["Product"]["SaleOff"];?></td>
                                    <td><?php echo $arr_pro["Product"]["Info_SaleOff"];?></td>
                                    <td><a class="get_id_pro pointer" id="<?php echo $arr_pro["Product"]["id"];?>" data-toggle="modal" data-target="#edit_proModal"><span class="glyphicon glyphicon-pencil"></span></a> - <a href=""><span class="glyphicon glyphicon-remove"></span></a></td>
                                </tr>
                            <?php $i++;endforeach;?>

                            </tbody>
                        </table>
                    </div>
                    <hr/>
                    <div style="overflow: scroll;">
                        <span>CẬP NHẬT SẢN PHẨM</span>
                    <form action="admin.html" method="post">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="success">
                                    <th><center>ID</center></th>
                                    <th><center>Name</center></th>
                                    <th><center>CateID</center></th>
                                    <th><center>Quantify</center></th>
                                    <th><center>Description</center></th>
                                    <th><center>Image</center></th>
                                    <th><center>Status</center></th>
                                    <th><center>SupplierID</center></th>
                                    <th><center>Price</center></th>
                                    <th><center>Ram</center></th>
                                    <th><center>OS</center></th>
                                    <th><center>CPU</center></th>
                                    <th><center>Screen</center></th>
                                    <th><center>Camera</center></th>
                                    <th><center>Memory</center></th>
                                    <th><center>Pin</center></th>
                                    <th><center>Other</center></th>
                                    <th><center>Guaranty</center></th>
                                    <th><center>Option</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td><input type="text" name="pro_name"/></td>
                                    <td><input type="text" name="CateId" class="ip_sort"/></td>
                                    <td><input type="text" name="quanify" class="ip_sort"/></td>
                                    <td><input type="text" name="description"/></td>
                                    <td><input type="text" name="image"/></td>
                                    <td><input type="text" name="status"/></td>
                                    <td><input type="text" name="sup_id" class="ip_sort"/></td>
                                    <td><input type="text" name="price" class="ip_medium"/></td>
                                    <td><input type="text" name="ram" class="ip_medium"/></td>
                                    <td><input type="text" name="os"/></td>
                                    <td><input type="text" name="cpu"/></td>
                                    <td><input type="text" name="screen"/></td>
                                    <td><input type="text" name="camera"/></td>
                                    <td><input type="text" name="memory"/></td>
                                    <td><input type="text" name="pin" class="ip_medium"/></td>
                                    <td><input type="text" name="other"/></td>
                                    <td><input type="text" name="guaranty"/></td>
                                    <td><input type="text" name="created" /></td>
                                    <td><input type="text" name="sale_off" class="ip_medium"/></td>
                                    <td><input type="text" name="promotion"/></td>
                                    <td><button class="btn btn-success" name="btn_pro">Cập nhật</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                    </div>
                    <hr/>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="categories">
                <div id="cate_show">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <span>DANH SÁCH LOẠI SẢN PHẨM</span>
                        <table class="table table-bordered">
                            <thead>
                                <tr class="success">
                                    <th><center>ID</center></th>
                            <th><center>Category Name</center></th>
                            <th>Option</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php $i=1;foreach ($categories as $arr_cate):?>
                                    <tr>
                                        <td><?php echo $arr_cate["Category"]["id"];?></td>
                                        <td><?php echo $arr_cate["Category"]["CategoryName"];?></td>
                                        <td><a href="" id="<?php echo $arr_cate["Category"]["id"];?>" class="edit_cate"><span class="glyphicon glyphicon-pencil"></span></a> - <a href=""><span class="glyphicon glyphicon-remove"></span></a></td>
                                </tr>
                                <?php $i++;endforeach;?>
                                
                            </tbody>
                        </table><hr/>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <span>CẬP NHẬT DANH SÁCH LOẠI SẢN PHẨM</span>
                        <form action="admin.html" method="post">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="success">
                                        <th><center>ID</center></th>
                                <th><center>Category Name</center></th>
                                <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td><input type="text" name="cate_name"/></td>
                                        <td><button class="btn btn-success" name="btn_cate">Cập nhật</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </form><hr/>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="users">
                <div id="user_show" style="overflow: scroll;">
                    <span>DANH SÁCH THÀNH VIÊN</span>
                    <table class="table table-bordered">
                        <thead>
                            <tr class="success">
                                <th><center>ID</center></th>
                        <th><center>Email</center></th>
                        <th><center>Password</center></th>
                        <th><center>FirstName</center></th>
                        <th><center>LastName</center></th>
                        <th><center>Phone</center></th>
                        <th><center>Address</center></th>
                        <th><center>Authorities</center></th>
                        <th><center>Created</center></th>
                        <th><center>Option</center></th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php $i=1; foreach($users as $arr_user):?>
                            <tr>
                                <td><?php echo $arr_user["User"]["id"];?></td>
                                <td><?php echo $arr_user["User"]["Email"];?></td>
                                <td><?php echo $arr_user["User"]["Password"];?></td>
                                <td><?php echo $arr_user["User"]["FirstName"];?></td>
                                <td><?php echo $arr_user["User"]["LastName"];?></td>
                                <td><?php echo $arr_user["User"]["Phone"];?></td>
                                <td><?php echo $arr_user["User"]["Address"];?></td>
                                <td><?php echo $arr_user["User"]["Authorities"];?></td>
                                <td><?php echo $arr_user["User"]["Created"];?></td>
                                <td><a href="" id="<?php echo $arr_user["User"]["id"];?>"><span class="glyphicon glyphicon-pencil"></span></a> - <a href=""><span class="glyphicon glyphicon-remove"></span></a></td>
                            </tr>
                            <?php $i++;endforeach;?>
                        </tbody>
                    </table><hr/>
                    <span>CẬP NHẬT DANH SÁCH THÀNH VIÊN</span>
                    <form action="admin.html" method="post">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="success">
                                    <th><center>ID</center></th>
                            <th><center>Email</center></th>
                            <th><center>Password</center></th>
                            <th><center>FirstName</center></th>
                            <th><center>LastName</center></th>
                            <th><center>Phone</center></th>
                            <th><center>Address</center></th>
                            <th><center>Authorities</center></th>
                            <th><center>Created</center></th>
                            <th><center></center></th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td><input type="text" name="email"/></td>
                                    <td><input type="text" name="pass"/></td>
                                    <td><input type="text" name="fname"/></td>
                                    <td><input type="text" name="lname"/></td>
                                    <td><input type="text" name="phone"/></td>
                                    <td><input type="text" name="add"/></td>
                                    <td><input type="text" name="author"/></td>
                                    <td><input type="text" name="created"/></td>
                                    <td><button class="btn btn-success" name="btn_user">Cập nhật</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </form><hr/>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="suppliers">
                <div id="sup_show">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <span>DANH SÁCH HÃNG</span>
                        <table class="table table-bordered">
                            <thead>
                                <tr class="success">
                                    <th><center>ID</center></th>
                            <th><center>Supplier Name</center></th>
                            <th>Option</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php $i=1;foreach ($suppliers as $arr_sup):?>
                                <tr>
                                    <td><?php echo $arr_sup["Supplier"]["id"];?></td>
                                    <td><?php echo $arr_sup["Supplier"]["SupplierName"];?></td>
                                    <td><a href="" id="<?php echo $arr_sup["Supplier"]["id"];?>"><span class="glyphicon glyphicon-pencil"></span></a> - <a href=""><span class="glyphicon glyphicon-remove"></span></a></td>
                                </tr>
                                <?php $i++;endforeach; ?>
                            </tbody>
                        </table><hr/>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <span>CẬP NHẬT DANH SÁCH HÃNG</span>
                        <form action="admin.html" method="post">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="success">
                                        <th><center>ID</center></th>
                                <th><center>Supplier Name</center></th>
                                <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td><input type="text" name="cate_name"/></td>
                                        <td><button class="btn btn-success" name="btn_sup">Cập nhật</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                        <hr/>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="order">
                <div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <span>DANH SÁCH ĐƠN ĐẶT HÀNG</span>
                        <table class="table table-bordered">
                            <thead>
                                <tr class="success">
                                    <th><center>ID</center></th>
                                    <th><center>User ID</center></th>
                                    <th><center>Date Order</center></th>
                                    <th><center>Status</center></th>
                                    <th><center>Total Order</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1;foreach ($orders as $arr_order):?>
                                <tr>
                                    <td><?php echo $arr_order["Order"]["id"];?></td>
                                    <td><?php echo $arr_order["Order"]["User_id"];?></td>
                                    <td><?php echo $arr_order["Order"]["DateOrder"];?></td>
                                    <td><?php echo $arr_order["Order"]["Status"];?></td>
                                    <td><?php echo $arr_order["Order"]["Total_order"];?></td>
                                </tr>
                                <?php $i++;endforeach;?>
                            </tbody>
                        </table><hr/>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="news">    
                <div>
                    <span>DANH SÁCH BẢNG TIN</span>
                    <table class="table table-bordered">
                        <thead>
                            <tr class="success">
                                <th><center>ID</center></th>
                        <th><center>User ID</center></th>
                        <th>Content</th>
                        <th>Date Post</th>
                        <th>Title News</th>
                        <th>Avatar News</th>
                        <th>Option</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php $i=1;foreach ($news as $arr_news): ?>
                            <tr>
                                <td><?php echo $arr_news["News"]["id"] ;?></td>
                                <td><?php echo $arr_news["News"]["User_id"] ;?></td>
                                <td><?php echo $arr_news["News"]["Content"] ;?></td>
                                <td><?php echo $arr_news["News"]["DatePost"] ;?></td>
                                <td><?php echo $arr_news["News"]["Title_News"] ;?></td>
                                <td><?php echo $arr_news["News"]["Avatar_News"] ;?></td>
                                <td><a id="<?php echo $arr_news["News"]["id"] ;?>" href=""><span class="glyphicon glyphicon-pencil"></span></a> - <a href=""><span class="glyphicon glyphicon-remove"></span></a></td>
                            </tr>
                            <?php $i++;endforeach; ?>
                        </tbody>
                    </table><hr/>
                    <span>THÊM MỚI BẢNG TIN</span>
                    <form action="admin.html" method="post">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="success">
                                    <th><center>ID</center></th>
                            <th><center>User ID</center></th>
                            <th>Content</th>
                            <th>Date Post</th>
                            <th>Title News</th>
                            <th>Avatar News</th>
                            <th></th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td><input type="text" name="user_id"/></td>
                                    <td><textarea name="content"></textarea></td>
                                    <td><input type="text" name="date_post"/></td>
                                    <td><input type="text" name="title"/></td>
                                    <td><input type="text" name="avatar"/></td>
                                    <td><button class="btn btn-success" name="btn_sup">Cập nhật</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </form><hr/>
                </div>      
            </div>
            <div role="tabpanel" class="tab-pane" id="log">    
                <span>DANH SÁCH HOẠT ĐỘNG</span>
                <table class="table table-bordered">
                    <thead>
                        <tr class="success">
                            <th><center>ID</center></th>
                    <th><center>User ID</center></th>
                    <th>Action</th>
                    <th>Date Action</th>
                    <th>Link</th>
                    <th>Option</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; foreach ($logs as $arr_log):?>
                        <tr>
                            <td><?php echo $arr_log["Log"]["id"] ;?></td>
                            <td><?php echo $arr_log["Log"]["user_id"] ;?></td>
                            <td><?php echo $arr_log["Log"]["Action"] ;?></td>
                            <td><?php echo $arr_log["Log"]["DateAct"] ;?></td>
                            <td><?php echo $arr_log["Log"]["Link"] ;?></td>
                            <td><a id="<?php echo $arr_log["Log"]["id"] ;?>" href=""><span class="glyphicon glyphicon-pencil"></span></a> - <a href=""><span class="glyphicon glyphicon-remove"></span></a></td>
                        </tr>
                        <?php $i++;endforeach; ?>
                    </tbody>
                </table><hr/>       
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="edit_proModal" role="dialog">
    <div class="modal-dialog">
         Modal content
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <center><h4 class="modal-title">Sửa sản phẩm</h4></center>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form" action="" method="post">                    
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="id">Id</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="id" readonly="true" value="<?php echo $proEdit["Product"]["id"];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="pro_name">Product Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="pro_name" value="<?php echo $proEdit["Product"]["ProductName"];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="cate_id">Category Id</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="cate_id" value="<?php echo $proEdit["Product"]["CategoryId"];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="quantify">Quantify</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="quantify" value="<?php echo $proEdit["Product"]["Quantify"];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="description">Description</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="description" value="<?php echo $proEdit["Product"]["Description"];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="image">Image</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="image" value="<?php echo $proEdit["Product"]["Image"];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="status">Status</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="status" value="<?php echo $proEdit["Product"]["Status"];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="sup_id">Supplier Id</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="sup_id" value="<?php echo $proEdit["Product"]["Supplier_id"];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="price">Price</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="price" value="<?php echo $proEdit["Product"]["Price"];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="ram">Ram</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="ram" value="<?php echo $proEdit["Product"]["Ram"];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="os">OS</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="os" value="<?php echo $proEdit["Product"]["OS"];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="cpu">CPU</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="cpu" value="<?php echo $proEdit["Product"]["CPU"];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="screen">Screen</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="screen" value="<?php echo $proEdit["Product"]["Screen"];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="camera">Camera</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="camera" value="<?php echo $proEdit["Product"]["Camera"];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="memory">Memory</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="memory" value="<?php echo $proEdit["Product"]["Memory"];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="pin">Pin</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="pin" value="<?php echo $proEdit["Product"]["Pin"];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="info_other">Info other</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="info_other" value="<?php echo $proEdit["Product"]["Info_Other"];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="guaranty">Guaranty</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="guaranty" value="<?php echo $proEdit["Product"]["Guaranty"];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="created">Created</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="created" value="<?php echo $proEdit["Product"]["Created"];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="saleoff">Sale Off</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="saleoff"  value="<?php echo $proEdit["Product"]["SaleOff"];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="saleoff_info">SaleOff Info</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="saleoff_info" value="<?php echo $proEdit["Product"]["Info_SaleOff"];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-success" name="update_pro">Update</button>
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