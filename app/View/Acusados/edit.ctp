<br />
<br />

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<?php echo $this->Form->create('Acusado', array('role' => 'form','type'=>'file', 'novalidate' => 'novalidate')); ?>
	<fieldset>
		<legend><?php echo __('Editar Acusado'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre', array('class' => 'form-control', 'label' => 'Nombre'));
		echo $this->Form->input('apellidos',array('class' => 'form-control', 'label' => 'Apellidos'));
		echo $this->Form->input('cedula',array('class' => 'form-control', 'label' => 'Cedula'));
		echo $this->Form->input('direccion',array('class' => 'form-control', 'label' => 'Direccion'));
		echo $this->Form->input('ocupacion',array('class' => 'form-control', 'label' => 'Ocupacion'));
		echo $this->Form->input('culpabilidad');
		echo $this->Form->input('capacidadPago');
		echo $this->Form->input('sentencia',array('class' => 'form-control', 'label' => 'Sentencia'));
		echo $this->Form->input('foto', array('type' => 'file', 'label' => 'Foto', 'id' => 'foto', 'class' => 'file', 'data-show-upload' => 'false', 'data-show-caption' => 'true' ));
		echo $this->Form->input('foto_dir', array('type' => 'hidden'));
		echo $this->Form->input('user_id');
		echo $this->Form->input('ciudad_id');
		echo $this->Form->input('audiencia_id');
	?>

	</fieldset>
<p>
<?php echo $this->Form->end(array('label' => 'Editar acusado', 'class' =>'btn btn-success')); ?>
</p>

</div>
<div class="actions">
<div class="btn-group">
  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
	<?php echo __('Opciones'); ?> <span class="caret"></span>
	 </button>
	<ul class="dropdown-menu" role="menu">

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Acusado.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Acusado.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Lista de Acusados'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista de Ciudades'), array('controller' => 'ciudads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Ciudad'), array('controller' => 'ciudads', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Audiencias'), array('controller' => 'audiencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Audiencia'), array('controller' => 'audiencias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de procesos'), array('controller' => 'procesos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Proceso'), array('controller' => 'procesos', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>
</div>
</div>
