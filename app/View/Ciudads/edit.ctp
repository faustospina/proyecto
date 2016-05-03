<div class="container">
	<div class="row">
		<div class="col-md-6">
<?php echo $this->Form->create('Ciudad',array('role' => 'form')); ?>
	<fieldset>
		<legend><?php echo __('Editar Ciudad'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre', array('class' => 'form-control', 'label' => 'Nombre'));
	?>
	</fieldset>
	<p>
<?php echo $this->Form->end(array('label' => 'Editar Ciudad', 'class' =>'btn btn-success')); ?>
</p>
</div>
<div class="actions">
<div class="btn-group">
  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
	<h3><?php echo __('Actions'); ?><span class="caret"></span>
		 </button>
	<ul class="dropdown-menu" role="menu">

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Ciudad.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Ciudad.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Ciudads'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Acusados'), array('controller' => 'acusados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acusado'), array('controller' => 'acusados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Carcels'), array('controller' => 'carcels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carcel'), array('controller' => 'carcels', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>
</div>
</div>
