<div class="container">
	<div class="row">
		<div class="col-md-6">
<?php echo $this->Form->create('JuezsProceso', array('role' => 'form'))); ?>
	<fieldset>
		<legend><?php echo __('Agregar juez al proceso'); ?></legend>
	<?php
		echo $this->Form->input('proceso_id');
		echo $this->Form->input('juez_id');
	?>
	</fieldset>
	<p>
<?php echo $this->Form->end(array('label' => 'Agregar', 'class' =>'btn btn-success')); ?>
</p>
</div>
<div class="actions">
<div class="btn-group">
  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
<div class="actions">
	<?php echo __('Actions'); ?><span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li><?php echo $this->Html->link(__('List Juezs Procesos'), array('action' => 'index')); ?></li>
	</ul>
</div>
</div>
</div>
</div>
