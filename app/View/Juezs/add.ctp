
<div class="container">
	<div class="row">
		<div class="col-md-6">
<?php echo $this->Form->create('Juez', array('role' => 'form')); ?>
	<fieldset>
		<legend><?php echo __('Agregar Juez'); ?></legend>
	<?php
		echo $this->Form->input('nombre', array('class' => 'form-control', 'label' => 'Nombre'));
		echo $this->Form->input('apellidos', array('class' => 'form-control', 'label' => 'Apellido'));
		echo $this->Form->input('codigoRepresentativo', array('class' => 'form-control', 'label' => 'Codigo que lo representa'));
		echo $this->Form->input('descripcion', array('class' => 'form-control', 'label' => 'Descripcion'));
		echo $this->Form->input('audiencia_id');
		echo $this->Form->input('Proceso');
	?>
	</fieldset>
<p>
<?php echo $this->Form->end(array('label' => 'Agregar', 'class' =>'btn btn-success')); ?>
</p>


<div class="actions">
<div class="btn-group">
  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
<div class="actions">
	<?php echo __('Actions'); ?><span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">

		<li><?php echo $this->Html->link(__('List Juezs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Audiencias'), array('controller' => 'audiencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Audiencia'), array('controller' => 'audiencias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Procesos'), array('controller' => 'procesos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proceso'), array('controller' => 'procesos', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>
</div>
</div>
