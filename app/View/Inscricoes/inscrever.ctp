<h3>Inscrições</h3>
<?php echo $this->Form->create('Inscrever', 
array('action' => 'inscrever')) ?>

<?php echo $this->Form->input('nome') ?>
<?php echo $this->Form->input('email') ?>
<?php echo $this->Form->input('telefone') ?>
<?php echo $this->Form->input('endereco') ?>

<?php echo $this->Form->submit('Entrar') ?>
<?php echo $this->Form->end() ?> 