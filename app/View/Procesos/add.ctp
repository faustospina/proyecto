<div class="container">
	<div class="row">
		<div class="col-md-6">
<?php echo $this->Form->create('Proceso', array('role' => 'form')); ?>
	<fieldset>
		<legend><?php echo __('Agregar Proceso'); ?></legend>
	<?php
		echo $this->Form->input('nombreDelito', array('class' => 'form-control', 'label' => 'Nombre del delito'));
		echo $this->Form->input('nombreVariacionDelito', array('class' => 'form-control', 'label' => 'Nombre variacion del delito'));
		echo $this->Form->input('descripcion', array('class' => 'form-control', 'label' => 'Descripcion'));
		echo $this->Form->input('numeroRadicado', array('class' => 'form-control', 'label' => 'Numero del radicado asignado al caso'));
		echo $this->Form->input('numeroProceso', array('class' => 'form-control', 'label' => 'numero del proceso'));
		echo $this->Form->input('estado', array('class' => 'form-control', 'label' => 'estado en que el acosado delinquio'));
		echo $this->Form->input('acusado_id');
		echo $this->Form->input('Fiscal');
		echo $this->Form->input('Juez');
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
	<?php echo __('Opciones'); ?><span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">

		<li><?php echo $this->Html->link(__('Lista de Procesos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista de Acusados'), array('controller' => 'acusados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Acusado'), array('controller' => 'acusados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Fiscales'), array('controller' => 'fiscals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Fiscal'), array('controller' => 'fiscals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Juezes'), array('controller' => 'juezs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Juez'), array('controller' => 'juezs', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>
</div>
</div>
