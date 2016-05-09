




<br />
<br />

<?php echo $this->Html->script( array('addtocart.js'), array('inline' => false) ); ?>	
	
	<h1><?php echo $acusado['Acusado']['nombre']; ?></h1>

<div class="row">

	<div class="col col-sm-7">
			<?php echo $this->Html->image('../files/acusado/foto/' . $acusado['Acusado']['foto_dir'] . '/' . 'vga_' .$acusado['Acusado']['foto'], array('class' => 'img-thumbnail img-responsive')); ?>
	</div>

	<div class="col col-sm-5">

	<h1><strong><?php echo $acusado['Acusado']['nombre']; ?></strong>
		<strong><?php echo $acusado['Acusado']['apellidos']; ?></strong>
		<strong><?php echo $acusado['Acusado']['cedula']; ?></strong></h1>
		<br />
		<br />
		<b> Ocupacion: </b> <span id="acusadprice"><?php echo h($acusado['Acusado']['ocupacion']); ?></span></h1>
		<br />
		<br />
		<b>	Tiempo en la carcel: </b><?php echo h($acusado['Acusado']['sentencia']); ?>
		<br />
		<br />
		<b>Fecha de arresto: </b> <?php echo $acusado['Acusado']['created']; ?>
		<br />
		<br />
		<b>Ultima modificacion al registro: </b> <?php echo $acusado['Acusado']['modified']; ?>
		<br />
		<br />
		<b>Ciudad de arresto: </b><?php echo $this->Html->link($acusado['Ciudad']['nombre'], array('controller' => 'ciudads', 'action' => 'view', $acusado['Ciudad']['id'])); ?>
		<br />
		<br />
		<b>Direccion donde reside: </b><?php echo h($acusado['Acusado']['direccion']); ?>
		<br />
		<br />
		<b>Abogado a cargo del proceso: </b><?php echo $this->Html->link($acusado['User']['nombre'], array('controller' => 'users', 'action' => 'view', $acusado['User']['id'])); ?>
		<?php echo $this->Html->link($acusado['User']['apellidos'], array('controller' => 'users', 'action' => 'view', $acusado['User']['id'])); ?>	
		<br />
		<br />
		<b>Audiencia en la que se encuentra en el momento: </b>	<?php echo $this->Html->link($acusado['Audiencia']['nombre'], array('controller' => 'audiencias', 'action' => 'view', $acusado['Audiencia']['id'])); ?>
<br />
<br />
	</div>
</div>

<div class="related">
	<h3><?php echo __('Procesos relacionados'); ?></h3>
	<?php if (!empty($acusado['Proceso'])): ?>
	<div class="col-md-12">
	<table class="table table-striped">
	<tr>
		
		<th><?php echo __('NombreDelito'); ?></th>
		<th><?php echo __('NombreVariacionDelito'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('NumeroRadicado'); ?></th>
		<th><?php echo __('NumeroProceso'); ?></th>
		<th><?php echo __('Estado'); ?></th>
		<th><?php echo __('Nombre acusado'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($acusado['Proceso'] as $proceso): ?>
		<tr>
			
		<td><h1><?php echo $proceso['nombreDelito']; ?></h1></td>
			<td><?php echo $proceso['nombreVariacionDelito']; ?></td>
			<td><?php echo $proceso['descripcion']; ?></td>
			<td><?php echo $proceso['numeroRadicado']; ?></td>
			<td><?php echo $proceso['numeroProceso']; ?></td>
			<td><?php echo $proceso['estado']; ?></td>
			<td><?php echo $this->Html->link($acusado['Acusado']['nombre'], array('controller' => 'acusados', 'action' => 'view', $acusado['User']['id'])); ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver Informacion detallada'), array('controller' => 'procesos', 'action' => 'view', $proceso['id']),array('class' => 'btn btn-xs btn-info')); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'procesos', 'action' => 'edit', $proceso['id']),array('class' => 'btn btn-xs btn-warning')); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'procesos', 'action' => 'delete', $proceso['id']), array('class' => 'btn btn-xs btn-danger'), __('Are you sure you want to delete # %s?', $proceso['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
	</div>


<div class="col-md-2">

<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('nuevo proceso'), array('controller' => 'procesos', 'action' => 'add'),array('class' => 'btn btn-info')); ?> </li>
		</ul>
	</div>
</div>


<div class="actions">
<div class="btn-group">
  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
	<?php echo __('Opciones'); ?><span class="caret"></span>
</button>
	<ul class="dropdown-menu" role="menu">

		<li><?php echo $this->Html->link(__('Lista de Acusados'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista de Ciudades'), array('controller' => 'ciudads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Ciudad'), array('controller' => 'ciudads', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Audiencias'), array('controller' => 'audiencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Audiencia'), array('controller' => 'audiencias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Procesos'), array('controller' => 'procesos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Proceso'), array('controller' => 'procesos', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>
</div>