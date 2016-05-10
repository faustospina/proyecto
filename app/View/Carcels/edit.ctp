<div class="container">
	<div class="row">
		<div class="col-md-6">
<?php echo $this->Form->create('Carcel',array('role' => 'form')); ?>
	<fieldset>
		<legend><?php echo __('Edit Carcel'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre', array('class' => 'form-control', 'label' => 'Nombre'));
		echo $this->Form->input('numeroPatios', array('class' => 'form-control', 'label' => 'Numero de patios'));
		echo $this->Form->input('numeroCelda', array('class' => 'form-control', 'label' => 'Numero de celda'));
		echo $this->Form->input('fechaVisita');
		echo $this->Form->input('ciudad_id');
		echo $this->Form->input('audiencia_id');
	?>
	</fieldset>
	<p>
<?php echo $this->Form->end(array('label' => 'Editar carcel', 'class' =>'btn btn-success')); ?>
</p>
</div>

<div class="actions">
<div class="btn-group">
  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
	<?php echo __('opciones'); ?><span class="caret"></span>
	 </button>
	<ul class="dropdown-menu" role="menu">

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Carcel.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Carcel.id'))); ?></li>
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
