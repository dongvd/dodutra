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
            <div class="row ">
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
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
            <h3 style="color: greenyellow;">THÔNG TIN GIỚI THIỆU</h3><br>
            <h4>I.QUÁ TRÌNH HÌNH THÀNH VÀ PHÁT THIỂN</h4><br/>
            <span>Trong những năm qua, xã hội phát triển, kinh tế tăng trưởng đồng thời là chất lượng cuộc sống của người dân ngày càng càng được nâng cao nhiều trung tâm thương mại, nhà cao tầng, biệt thự được mọc ra  kèm theo đấy là nhu cầu mua sắm các thiết bị phục vụ nhu cầu cuộc sống hàng ngày như TV, Tủ lạnh, Điện gia dụng.....
                Thế giới điện tử <b>Thiết Bị Số</b> khai trương Siêu thị Vạn Lộc, Xuân Canh, Đông Anh, Hà Nội chính thức tham gia vào lĩnh vực kinh doanh bán lẻ điện tử,  tạo ra một phong cách mua sắm hoàn toàn mới với người dân thủ đô, thông qua cung cấp các sản phẩm và dịch vụ tới người tiêu dùng.<br/>
                • TẦM NHÌN :<br/>
                Công ty số 1 tại Việt Nam trong lĩnh vực phân phối, bán lẻ các sản phẩm điện tử.<br/>
                • SỨ MỆNH:<br/>
                Với kim chỉ nam là “Không ngừng phát triển vì khách hàng” và làm hài lòng khách hàng bằng cách tạo ra những  giá trị gia tăng như cung cấp các sản phẩm, dịch vụ tốt nhất .<br/>
                • MỤC TIÊU CHIẾN LƯỢC :<br/>
                1.      Tối đa hoá giá trị đầu tư của các cổ đông; giữ vững tốc độ tăng trưởng lợi nhuận và tình hình tài chính lành mạnh;<br/>
                2.      Không ngừng nâng cao động lực làm việc và năng lực cán bộ; <b>Thiết Bị Số</b> phải luôn dẫn đầu ngành điện tử trong việc sáng tạo, phát triển chính sách đãi ngộ và cơ hội thăng tiến nghề nghiệp cho cán bộ của mình;<br/>
                3.      Duy trì sự hài lòng, trung thành và gắn bó của khách hàng với <b>Thiết Bị Số</b>; xây dựng <b>Thiết Bị Số</b> thành một trong những công ty hàng đầu Việt Nam có chất lượng dịch vụ tốt nhất do khách hàng lựa chọn.<br/>
                4.      Phát triển <b>Thiết Bị Số</b> thành một trong những điện tử hàng đầu Việt Nam về: quản lý tốt nhất, môi trường làm việc tốt nhất, văn hoá doanh nghiệp chú trọng khách hàng, thúc đẩy hợp tác và sáng tạo, linh hoạt nhất khi môi trường kinh doanh thay đổi.
            </span>
            <h4>II. THẾ MẠNH VÀ ĐỊNH HƯỚNG CỦA CÔNG TY</h4>
            <span>
                Với kim chỉ nam là “Không ngừng phát triển vì khách hàng”, <b>Thiết Bị Số</b> đã quy tụ được Ban Lãnh đạo có bề dày kinh nghiệm trong các lĩnh vực điện tử không chỉ mạnh về kinh doanh mà còn mạnh về công nghệ có nhiều tiềm năng phát triển, kết hợp với đội ngũ nhân viên trẻ, năng động và chuyên nghiệp tạo lên thế mạnh nòng cốt của công ty để thực hiện tốt các mục tiêu đề ra.<br/>
                Hơn nữa, trên cơ sở nguồn lực của công ty và nhu cầu của xã hội, <b>Thiết Bị Số</b>  lựa chọn phát triển kinh doanh các sản phẩm Điện tử phục vụ nhu cầu thiết yếu của người dân với các sản phẩm đa dạng phong phú mang lại giá trị gia tăng cho người tiêu dùng thông qua các dịch vụ sau bán hàng.
                Qua quá trình phát triển, bên cạnh việc thiết lập được một hệ thống đối tác nước trong nước và ngoài đến từ các doanh nghiệp lớn của Korea, Singapore, Trung Quốc, Nhật Bản, có thế mạnh trong các lĩnh vực Điện máy, sản phẩm công nghệ như: SAMSUNG, SONY, Panasonic, Toshiba, Sharp,... Trong thời gian tới Công ty sẽ đầu tư vào các ngành nghề mới như bất động sản, khai thác khoáng, đầu tư tài chính..
            </span>
            <h4>III. ĐỘI NGŨ NHÂN SỰ</h4>
            <span>Hội đồng Quản trị do Đại hội đồng cổ đông tín nhiệm bầu ra. Hội đồng quản trị là cơ quan quản trị toàn bộ mọi hoạt động của công ty, các chiến lược, kế hoạch sản xuất và kinh doanh trong nhiệm kỳ của mình. 
                Ban Giám đốc sẽ chịu trách nhiệm về các mặt hoạt động của công ty trước Hội đồng Quản trị và pháp luật hiện hành, quyết định các chủ trương, chính sách, mục tiêu chiến lược của công ty, đồng thời giám sát và kiểm tra tất cả các hoạt động về sản xuất kinh doanh, đầu tư của công ty. </span>

            <h4>IV. CAM KẾT</h4>
            <span><b>Thiết Bị Số</b> nỗ lực hướng tới mục tiêu phát triển bền vững và trở thành thương hiệu hàng đầu về cung cấp các sản phẩm Điện tử tại Việt Nam mang tầm cỡ quốc tế. Dựa vào nội lực của chính mình và mở rộng hợp tác với các đối tác trong và ngoài nước chúng tôi cam kết.<br/>

                Cam kết với đối tác :<br/>
                - Trở thành đối tác chiến lược trong và ngoài nước trên cơ sở " Hợp tác, phát triển bền vững " hợp tác toàn diện lâu dài nhằm kịp thời đưa những sản phẩm mới nhất và dịch vụ theo các yêu cầu đặc thù của khách hàng.<br/>
                Cam kết với khách hàng :<br/>
                - Luôn luôn làm khách hàng hài lòng về các sản phẩm và dịch vụ do <b>Thiết Bị Số</b> cung cấp. Sự thành công hài lòng của khách hàng là thước đo uy tín hiệu quả của doanh nghiệp.<br/>
                - Giá cả hàng hóa luôn hợp lý và được cập nhật chính xác, kịp thời nhất để phục vụ khách hàng tốt nhất. <br/>
                - Luôn lắng nghe, phân tích và học hỏi từ thị trường trong và ngoài nước. Không bao giờ tự mãn với thành công đã có. <br/>
                - Luôn nhìn lại mình để phát triển (đạo đức và kiến thức chuyên môn). Mỗi nhân viên là một thương hiệu cá nhân. Mỗi nhân viên là một đại sứ thiện chí của <b>Thiết Bị Số</b> đối với thế giới bên ngoài. </span>

            <h4>V. NHỮNG MỤC TIÊU TƯƠNG LAI</h4>
            <span>Không ngừng vươn xa, <b>Thiết Bị Số</b> sẽ mở rộng Hệ thống thế giới điện tử tới các Tỉnh thành trong cả nước với tiêu chí phát triển, hiệu quả, bền vững. Sự gia tăng mạnh mẽ cả về nguồn vốn, mô hình và mạng lưới hoạt động cũng như chất lượng nguồn nhân lực không chỉ thể hiện những khởi sắc mà còn là dấu ấn quan trọng trong hoạt động kinh doanh của <b>Thiết Bị Số</b></span>
        </div>


    </div>
    <hr/>
</div>

