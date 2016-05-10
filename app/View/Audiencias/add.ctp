<div class="container">
	<div class="row">
		<div class="col-md-6">
<?php echo $this->Form->create('Audiencia', array('role' => 'form')); ?>
	<fieldset>
		<legend><?php echo __('Agregar Audiencia'); ?></legend>
	<?php
		echo $this->Form->input('nombre', array('class' => 'form-control', 'label' => 'Nombre'));
		echo $this->Form->input('nroSala', array('class' => 'form-control', 'label' => 'numero de sala'));
		echo $this->Form->input('MinPublico', array('class' => 'form-control', 'label' => 'Min publico'));
		echo $this->Form->input('detenido');
		echo $this->Form->input('descripcion', array('class' => 'form-control', 'label' => 'Descripcion'));
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
	<?php echo __('opciones'); ?><span class="caret"></span>
</button>
	<ul class="dropdown-menu" role="menu">

		<li><?php echo $this->Html->link(__('Lista de Audiencias'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista de Acusados'), array('controller' => 'acusados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Acusado'), array('controller' => 'acusados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Carceles'), array('controller' => 'carcels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('nueva Carcel'), array('controller' => 'carcels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Fiscales'), array('controller' => 'fiscals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Fiscal'), array('controller' => 'fiscals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Juezs'), array('controller' => 'juezs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Juez'), array('controller' => 'juezs', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>
</div>
</div>
