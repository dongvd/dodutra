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
                <div id="pro_show" style="overflow: scroll; max-height: 600px;" >
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
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href=""><span class="glyphicon glyphicon-pencil"></span></a> - <a href=""><span class="glyphicon glyphicon-remove"></span></a></td>
                            </tr>
                        </tbody>
                    </table><hr/>
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
                    </form><hr/>
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
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td><a href=""><span class="glyphicon glyphicon-pencil"></span></a> - <a href=""><span class="glyphicon glyphicon-remove"></span></a></td>
                                </tr>
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
                        <th><center>Option</center></th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href=""><span class="glyphicon glyphicon-pencil"></span></a> - <a href=""><span class="glyphicon glyphicon-remove"></span></a></td>
                            </tr>
                        </tbody>
                    </table><hr/>
                    <span>CẬP NHẬT DANH SÁCH SẢN PHẨM</span>
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
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td><a href=""><span class="glyphicon glyphicon-pencil"></span></a> - <a href=""><span class="glyphicon glyphicon-remove"></span></a></td>
                                </tr>
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
                            <th>Date Order</th>
                            <th>Status</th>
                            <th>Total Order</th>
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
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href=""><span class="glyphicon glyphicon-pencil"></span></a> - <a href=""><span class="glyphicon glyphicon-remove"></span></a></td>
                            </tr>
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
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><a href=""><span class="glyphicon glyphicon-pencil"></span></a> - <a href=""><span class="glyphicon glyphicon-remove"></span></a></td>
                        </tr>
                    </tbody>
                </table><hr/>       
            </div>
        </div>
    </div>
</div>