<div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
        <li><?php echo $this->html->link('TRANG CHỦ',array('controller'=>'index','action'=>'index'),array('class'=>'white mn_hover')) ?></li>
        <li class="activex"><?php echo $this->html->link('GIỚI THIỆU',array('controller'=>'gioithieu','action'=>'gioithieu'),array('class'=>'white mn_hover')) ?></li>
        <li><?php echo $this->html->link('SẢN PHẨM',array('controller'=>'sanpham','action'=>'sanpham'),array('class'=>'white mn_hover')) ?></li>
        <li><?php echo $this->html->link('LIÊN HỆ',array('controller'=>'lienhe','action'=>'lienhe'),array('class'=>'white mn_hover')) ?></li>
    </ul>
</div>