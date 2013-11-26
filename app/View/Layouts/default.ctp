<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="utf-8" />
<title><?php echo $title_for_layout ?></title>
<?php echo $this->Html->css('estilo') ?>
</head>


<body>

<div id="header-full">
    <div id="header-limited">AQUI ESTÁ O HEADER</div><!--/ id header limited-->
</div><!--/ id header full-->


<div id="conteudo">
	<h1>Aqui estou usando uma tag h1 dentro do id conteudo.</h1>
</div><!--/ id conteudo-->


<div id="footer-full">
    <div id="footer-limited">
        <p>Rodape do site e também alguns créditos.</p>
    </div><!--/ id footer limited-->
</div><!--/ footer full-->


<!--
</?php echo $this->fetch('content') ?>
-->

</body>

</html> 