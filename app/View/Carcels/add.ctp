<div class="container">
	<div class="row">
		<div class="col-md-6">
<?php echo $this->Form->create('Carcel', array('role' => 'form')); ?>
	<fieldset>
		<legend><?php echo __('Agregar Carcel'); ?></legend>
	<?php
		echo $this->Form->input('nombre', array('class' => 'form-control', 'label' => 'Nombre'));
		echo $this->Form->input('numeroPatios', array('class' => 'form-control', 'label' => 'Numero Patios'));
		echo $this->Form->input('numeroCelda', array('class' => 'form-control', 'label' => 'Numero Celda'));
		echo $this->Form->input('fechaVisita');
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

		<li><?php echo $this->Html->link(__('Lista de Carceles'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista de Ciudades'), array('controller' => 'ciudads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Ciudad'), array('controller' => 'ciudads', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Audiencias'), array('controller' => 'audiencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Audiencia'), array('controller' => 'audiencias', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>
</div>
</div>

