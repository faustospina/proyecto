<div class="container">
	<div class="row">
		<div class="col-md-6">
<?php echo $this->Form->create('Carcel', array('role' => 'form')); ?>
	<fieldset>
		<legend><?php echo __('Agregar Carcel'); ?></legend>
	<?php
		echo $this->Form->input('nombre', array('class' => 'form-control', 'label' => 'Nombre'));
		echo $this->Form->input('numeroPatios', array('class' => 'form-control', 'label' => 'Numero de patios'));
		echo $this->Form->input('numeroCelda', array('class' => 'form-control', 'label' => 'Numero de celda'));
		echo $this->Form->input('fecha de visita');
		echo $this->Form->input('ciudad_id');
		echo $this->Form->input('audiencia_id');
	?>
	</fieldset>
	<p>
<?php echo $this->Form->end(array('label' => 'Agregar carcel', 'class' =>'btn btn-success')); ?>
</p>
</div>
<div class="actions">
<div class="btn-group">
  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
<div class="actions">
	<?php echo __('Opciones'); ?><span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">

		<li><?php echo $this->Html->link(__('Lista de carceles'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista de ciudades'), array('controller' => 'ciudads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva ciudad'), array('controller' => 'ciudads', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de audiencias'), array('controller' => 'audiencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva audiencia'), array('controller' => 'audiencias', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>
</div>
</div>

