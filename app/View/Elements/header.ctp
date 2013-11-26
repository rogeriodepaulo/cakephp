<div id="header-full">
    <div id="header-limited">
        <div id="logomarca">
           <!-- <img src="img/logoc3s.png" />-->
            
            <?php echo $this->Html->link(
                    $this->Html->image('logoc3s.png', array('alt' => $cakeDescription, 'border' => '0')),
                    'http://www.rxweb.com.br/cakephp/',
                    array('target' => '_blank', 'escape' => false)
                );
            ?>            
            
        </div>
        
        
                        
        
        
        <?php echo $this->element('menu') ?>
    </div><!--/ id header limited-->
</div><!--/ id header full-->