<ul id="navigate">
    <li><?php echo $this->Html->link("List Product",array("controller"=>"products","action"=>"index"));?></li>
    <li><?php echo $this->Html->link("View Cart",array("controller"=>"carts","action"=>"index"));?></li>
    <li><?php echo $this->Html->link("Del Cart",array("controller"=>"carts","action"=>"destroy"));?></li>
</ul>
