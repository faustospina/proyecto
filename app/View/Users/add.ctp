
<br />	
<br />
<div class="container">
	<div class="row">
		<div class="col-md-6">
<?php echo $this->Form->create('User', array('role' => 'form')); ?>
	<fieldset>
		<legend><?php echo __('Agregar usuario'); ?></legend>
	<?php
		echo $this->Form->input('nombre', array('class' => 'form-control', 'label' => 'Nombre'));
		echo $this->Form->input('apellidos', array('class' => 'form-control', 'label' => 'Apellidos'));
		echo $this->Form->input('celular', array('class' => 'form-control', 'label' => 'Celular'));
		echo $this->Form->input('correo', array('class' => 'form-control', 'label' => 'correo electronico'));
		echo $this->Form->input('username', array('class' => 'form-control', 'label' => 'nombre de usuario'));
		echo $this->Form->input('password', array('class' => 'form-control', 'label' => 'contraseña'));
		echo $this->Form->input('tituloProfesional', array('class' => 'form-control', 'label' => 'titulo profesional'));
		//echo $this->Form->input('role', array('class' => 'form-control', 'label' => 'Rol', 'type' => 'select', 'options' => array('admin' => 'Administrador', 'user' => 'Usuario'), array('class' => 'form-control')));
	?>
	</fieldset>
	<p>
<?php echo $this->Form->end(array('label' => 'Agregar', 'class' =>'btn btn-success')); ?>
</p>
</div>
</div>
</div>



