<br />
<br />
<br />
<br />	
<br />
<div class="container">
	<div class="row">
		<div class="col-md-6">
<?php echo $this->Form->create('User', array('role' => 'form')); ?>
	<fieldset>
		<legend><?php echo __('Editar Usuario'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre', array('class' => 'form-control', 'label' => 'Nombre'));
		echo $this->Form->input('apellidos', array('class' => 'form-control', 'label' => 'Apellidos'));
		echo $this->Form->input('celular', array('class' => 'form-control', 'label' => 'Celular'));
		echo $this->Form->input('correo', array('class' => 'form-control', 'label' => 'Correo electronico'));
		echo $this->Form->input('username', array('class' => 'form-control', 'label' => 'Nombre de usuario'));
		
		echo $this->Form->input('tituloProfesional', array('class' => 'form-control', 'label' => 'titulo profesional'));
		//echo $this->Form->input('role', array('class' => 'form-control', 'label' => 'Rol', 'type' => 'select', 'options' => array('admin' => 'Administrador', 'user' => 'Usuario'), array('class' => 'form-control')));
	?>
	</fieldset>
<p>
<?php echo $this->Form->end(array('label' => 'Editar usuario', 'class' =>'btn btn-success')); ?>
</p>
</div>

<div class="actions">
<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
	<?php echo __('Actions'); ?><span class="caret"></span>
	 </button>
	<ul class="dropdown-menu" role="menu">

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Acusados'), array('controller' => 'acusados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acusado'), array('controller' => 'acusados', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>
</div>
</div>
