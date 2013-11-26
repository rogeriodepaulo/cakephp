<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="utf-8" />
<title><?php echo $title_for_layout ?></title>
<?php echo $this->Html->css('estilo') ?>
</head>


<body>

<?php echo $this->element('header') ?>


<div id="box-content">
    <div id="conteudo">
	<h1>O maior evento sobre Tecnoligia da América Latina.</h1>
        <h2>Dias 25 e 26 de Janeiro de 2014</h2>
        
        <?php echo $this->fetch('content'); ?>
    </div><!--/ id conteudo-->
    
    
    
    <div id="sidebar">SIDEBAR</div>
</div><!--/ id conteudo-->


<?php echo $this->element('footer') ?>


<!--
</?php echo $this->fetch('content') ?>
-->

</body>

</html> 