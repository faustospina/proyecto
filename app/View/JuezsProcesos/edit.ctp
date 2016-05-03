<div class="container">
	<div class="row">
		<div class="col-md-6">
<?php echo $this->Form->create('JuezsProceso', array('role' => 'form')); ?>
	<fieldset>
		<legend><?php echo __('Editar Juez del Proceso'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('proceso_id');
		echo $this->Form->input('juez_id');
	?>
	</fieldset>
	<p>
<?php echo $this->Form->end(array('label' => 'Editar audiencia', 'class' =>'btn btn-success')); ?>
</p>
</div>
<div class="actions">
<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
	<h3><?php echo __('Actions'); ?><span class="caret"></span>
		 </button>
	<ul class="dropdown-menu" role="menu">

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('JuezsProceso.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('JuezsProceso.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Juezs Procesos'), array('action' => 'index')); ?></li>
	</ul>
</div>
</div>
</div>
</div>
