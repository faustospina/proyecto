<div class="container">
	<div class="row">
		<div class="col-md-6">
<?php echo $this->Form->create('Audiencia', array('role' => 'form')); ?>
	<fieldset>
		<legend><?php echo __('Editar Audiencia'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre', array('class' => 'form-control', 'label' => 'Nombre'));
		echo $this->Form->input('nroSala', array('class' => 'form-control', 'label' => 'Numero sala'));
		echo $this->Form->input('MinPublico', array('class' => 'form-control', 'label' => 'Min publico'));
		echo $this->Form->input('detenido');
		echo $this->Form->input('descripcion', array('class' => 'form-control', 'label' => 'Descripcion'));
	?>
	</fieldset>
	<p>
<?php echo $this->Form->end(array('label' => 'Editar audiencia', 'class' =>'btn btn-success')); ?>
</p>
</div>
<div class="actions">
<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
	<?php echo __('Actions'); ?><span class="caret"></span>
	 </button>
	<ul class="dropdown-menu" role="menu">

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Audiencia.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Audiencia.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Audiencias'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Acusados'), array('controller' => 'acusados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acusado'), array('controller' => 'acusados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Carcels'), array('controller' => 'carcels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carcel'), array('controller' => 'carcels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fiscals'), array('controller' => 'fiscals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fiscal'), array('controller' => 'fiscals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Juezs'), array('controller' => 'juezs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Juez'), array('controller' => 'juezs', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>
</div>
</div>
