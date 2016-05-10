
<div class="page-header">
<h2><?php echo __('Ciudad'); ?></h2>
</div>

<div class="col-md-5">

	<table class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td><?php echo h($ciudad['Ciudad']['id']); ?>&nbsp;</td>
		<td><?php echo h($ciudad['Ciudad']['nombre']); ?>&nbsp;</td>
	</tr>
	</tbody>
	</table>
</div>

<div class="actions">
<div class="btn-group">
  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
	<?php echo __('Opciones'); ?><span class="caret"></span>
		</button>
	<ul class="dropdown-menu" role="menu">
		<li><?php echo $this->Html->link(__('Editar Ciudad'), array('action' => 'edit', $ciudad['Ciudad']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Ciudad'), array('action' => 'delete', $ciudad['Ciudad']['id']), array(), __('Are you sure you want to delete # %s?', $ciudad['Ciudad']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Ciudades'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Ciudad'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Acusados'), array('controller' => 'acusados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Acusado'), array('controller' => 'acusados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Carceles'), array('controller' => 'carcels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Carcel'), array('controller' => 'carcels', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>



<div class="related">
	<h3><?php echo __('Acusados relacionados'); ?></h3>
	<?php if (!empty($ciudad['Acusado'])): ?>
		<div class="col-md-12">
	<table class="table table-striped">
	<tr>
		
		<th><?php echo __('fecha de cracion'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Apellidos'); ?></th>
		<th><?php echo __('Direccion'); ?></th>
		<th><?php echo __('Ocupacion'); ?></th>
		<th><?php echo __('Culpabilidad'); ?></th>
		<th><?php echo __('CapacidadPago'); ?></th>
		<th><?php echo __('fecha de modificacion'); ?></th>
		<th><?php echo __('Sentencia'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Ciudad Id'); ?></th>
		<th><?php echo __('Audiencia Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ciudad['Acusado'] as $acusado): ?>
		<tr>
		
			<td><?php echo $acusado['created']; ?></td>
			<td><?php echo $acusado['nombre']; ?></td>
			<td><?php echo $acusado['apellidos']; ?></td>
			<td><?php echo $acusado['direccion']; ?></td>
			<td><?php echo $acusado['ocupacion']; ?></td>
			<td><?php echo $acusado['culpabilidad']; ?></td>
			<td><?php echo $acusado['capacidadPago']; ?></td>
			<td><?php echo $acusado['modified']; ?></td>
			<td><?php echo $acusado['sentencia']; ?></td>
			<td><?php echo $acusado['user_id']; ?></td>
			<td><?php echo $acusado['ciudad_id']; ?></td>
			<td><?php echo $acusado['audiencia_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'acusados', 'action' => 'view', $acusado['id']),array('class' => 'btn btn-xs btn-info')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'acusados', 'action' => 'edit', $acusado['id']),array('class' => 'btn btn-xs btn-warning')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'acusados', 'action' => 'delete', $acusado['id']), array('class' => 'btn btn-xs btn-danger'), __('Are you sure you want to delete # %s?', $acusado['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
	</div>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuevo Acusado'), array('controller' => 'acusados', 'action' => 'add'),array('class' => 'btn btn-info')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('carceles relacionadas'); ?></h3>
	<?php if (!empty($ciudad['Carcel'])): ?>
		<div class="col-md-12">
	<table class="table table-striped">
	<tr>
		<th><?php echo __('fecha de creacion'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('NumeroPatios'); ?></th>
		<th><?php echo __('NumeroCelda'); ?></th>
		<th><?php echo __('fecha de modificacion'); ?></th>
		<th><?php echo __('FechaVisita'); ?></th>
		<th><?php echo __('Ciudad Id'); ?></th>
		<th><?php echo __('Audiencia Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ciudad['Carcel'] as $carcel): ?>
		<tr>
			
			<td><?php echo $carcel['created']; ?></td>
			<td><?php echo $carcel['nombre']; ?></td>
			<td><?php echo $carcel['numeroPatios']; ?></td>
			<td><?php echo $carcel['numeroCelda']; ?></td>
			<td><?php echo $carcel['modified']; ?></td>
			<td><?php echo $carcel['fechaVisita']; ?></td>
			<td><?php echo $carcel['ciudad_id']; ?></td>
			<td><?php echo $carcel['audiencia_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'carcels', 'action' => 'view', $carcel['id']),array('class' => 'btn btn-xs btn-info')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'carcels', 'action' => 'edit', $carcel['id']),array('class' => 'btn btn-xs btn-warning')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'carcels', 'action' => 'delete', $carcel['id']), array('class' => 'btn btn-xs btn-danger'), __('Are you sure you want to delete # %s?', $carcel['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
	</div>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('nueva Carcel'), array('controller' => 'carcels', 'action' => 'add'),array('class' => 'btn btn-info')); ?> </li>
		</ul>
	</div>
</div>
