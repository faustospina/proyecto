
<div class="page-header">
<h2><?php echo __('Audiencia', array('role' => 'form')); ?></h2>
</div>

<div class="col-md-12">

	<table class="table table-striped">
	<thead>
	<tr>
	
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Numero de Sala'); ?></th>
		<th><?php echo __('fecha de Creacion'); ?></th>
		<th><?php echo __('Ministro Publico'); ?></th>
		<th><?php echo __('Detenido'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
	</tr>
	</thead>
	<tbody>
	<tr>
	
		<td><?php echo h($audiencia['Audiencia']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($audiencia['Audiencia']['nroSala']); ?>&nbsp;</td>
		<td><?php echo h($audiencia['Audiencia']['created']); ?>&nbsp;</td>
		<td><?php echo h($audiencia['Audiencia']['MinPublico']); ?>&nbsp;</td>
		<td><?php echo h($audiencia['Audiencia']['detenido']); ?>&nbsp;</td>
		<td><?php echo h($audiencia['Audiencia']['descripcion']); ?>&nbsp;</td>
	</tr>
	</tbody>
	</table>
	</div>


<div class="related">
	<h3><?php echo __('acusados relacionados'); ?></h3>
	<?php if (!empty($audiencia['Acusado'])): ?>
	<div class="col-md-12">
	<table class="table table-striped">
	<tr>
	
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Apellidos'); ?></th>
		<th><?php echo __('Direccion'); ?></th>
		<th><?php echo __('Ocupacion'); ?></th>
		<th><?php echo __('Culpabilidad'); ?></th>
		<th><?php echo __('CapacidadPago'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Sentencia'); ?></th>
	
		<th class="actions"><?php echo __('Opciones'); ?></th>
	</tr>
	<?php foreach ($audiencia['Acusado'] as $acusado): ?>
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
		
			<td class="actions">
				<?php echo $this->Html->link(__('Ver Informacion detallada'), array('controller' => 'acusados', 'action' => 'view', $acusado['id']),array('class' => 'btn btn-xs btn-info')); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'acusados', 'action' => 'edit', $acusado['id']),array('class' => 'btn btn-xs btn-warning')); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'acusados', 'action' => 'delete', $acusado['id']), array('class' => 'btn btn-xs btn-danger'), __('Are you sure you want to delete # %s?', $acusado['id'])); ?>
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
	<?php if (!empty($audiencia['Carcel'])): ?>
	<div class="col-md-12">
	<table class="table table-striped">
	<tr>
	
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('NumeroPatios'); ?></th>
		<th><?php echo __('NumeroCelda'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('FechaVisita'); ?></th>
	
		<th class="actions"><?php echo __('Opciones'); ?></th>
	</tr>
	<?php foreach ($audiencia['Carcel'] as $carcel): ?>
		<tr>
			
			<td><?php echo $carcel['created']; ?></td>
			<td><?php echo $carcel['nombre']; ?></td>
			<td><?php echo $carcel['numeroPatios']; ?></td>
			<td><?php echo $carcel['numeroCelda']; ?></td>
			<td><?php echo $carcel['modified']; ?></td>
			<td><?php echo $carcel['fechaVisita']; ?></td>
		
			<td class="actions">
				<?php echo $this->Html->link(__('Ver Informacion detallada'), array('controller' => 'carcels', 'action' => 'view', $carcel['id']),array('class' => 'btn btn-xs btn-info')); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'carcels', 'action' => 'edit', $carcel['id']),array('class' => 'btn btn-xs btn-warning')); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'carcels', 'action' => 'delete', $carcel['id']), array('class' => 'btn btn-xs btn-danger'), __('Are you sure you want to delete # %s?', $carcel['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
	</div>
	
<?php endif; ?>

	<div class="opciones">
		<ul>
			<li><?php echo $this->Html->link(__('Agregar nueva carcel'), array('controller' => 'carcels', 'action' => 'add'),array('class' => 'btn btn-info')); ?> </li>
		</ul>
	</div>
</div>

<div class="related">
	<h3><?php echo __('ficales relacionados a la audiencia'); ?></h3>
	<?php if (!empty($audiencia['Fiscal'])): ?>
	
<div class="col-md-12">	
	<table class="table table-striped">
	<tr>
		
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Apellidos'); ?></th>
		<th><?php echo __('Codigo Representativo'); ?></th>
	
		<th class="actions"><?php echo __('Opciones'); ?></th>
	</tr>
	<?php foreach ($audiencia['Fiscal'] as $fiscal): ?>
		<tr>
		
			<td><?php echo $fiscal['nombre']; ?></td>
			<td><?php echo $fiscal['apellidos']; ?></td>
			<td><?php echo $fiscal['codigoRepresentativo']; ?></td>
		
			<td class="actions">
				<?php echo $this->Html->link(__('Ver detalle'), array('controller' => 'fiscals', 'action' => 'view', $fiscal['id']),array('class' => 'btn btn-xs btn-info')); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'fiscals', 'action' => 'edit', $fiscal['id']),array('class' => 'btn btn-xs btn-warning')); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'fiscals', 'action' => 'delete', $fiscal['id']), array('class' => 'btn btn-xs btn-danger'), __('Are you sure you want to delete # %s?', $fiscal['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
	</div>
	
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuevo Fiscal'), array('controller' => 'fiscals', 'action' => 'add'),array('class' => 'btn btn-info')); ?> </li>
		</ul>
	</div>
</div>





<div class="related">
	<h3><?php echo __('jueces relacionados a la audiencia'); ?></h3>
	<?php if (!empty($audiencia['Juez'])): ?>
	<div class="col-md-12">	
	<table class="table table-striped">
	<tr>
		
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Apellidos'); ?></th>
		<th><?php echo __('Codigo Representativo'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
	
		<th class="actions"><?php echo __('Opciones'); ?></th>
	</tr>
	<?php foreach ($audiencia['Juez'] as $juez): ?>
		<tr>
			
			<td><?php echo $juez['nombre']; ?></td>
			<td><?php echo $juez['apellidos']; ?></td>
			<td><?php echo $juez['codigoRepresentativo']; ?></td>
			<td><?php echo $juez['descripcion']; ?></td>
		
			<td class="actions">
				<?php echo $this->Html->link(__('Ver detalle'), array('controller' => 'juezs', 'action' => 'view', $juez['id']),array('class' => 'btn btn-xs btn-info')); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'juezs', 'action' => 'edit', $juez['id']),array('class' => 'btn btn-xs btn-warning')); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'juezs', 'action' => 'delete', $juez['id']), array('class' => 'btn btn-xs btn-danger'), __('Are you sure you want to delete # %s?', $juez['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
</div>
</div>

<div class="col-md-2">
<?php endif; ?>

	<div class="Opciones">
		<ul>
			<li><?php echo $this->Html->link(__('nuevo juez'), array('controller' => 'juezs', 'action' => 'add'),array('class' => 'btn btn-info')); ?> </li>
		</ul>
	</div>
</div>


<div class="actions">
<div class="btn-group">
  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
	<?php echo __('Opciones'); ?><span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li><?php echo $this->Html->link(__('Editar audiencia'), array('action' => 'edit', $audiencia['Audiencia']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar audiencia'), array('action' => 'delete', $audiencia['Audiencia']['id']), array(), __('Are you sure you want to delete # %s?', $audiencia['Audiencia']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de audiencias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva audiencia'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de acusados'), array('controller' => 'acusados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo acusado'), array('controller' => 'acusados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de carceles'), array('controller' => 'carcels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva carcel'), array('controller' => 'carcels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de fiscales'), array('controller' => 'fiscals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo fiscal'), array('controller' => 'fiscals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Jueces'), array('controller' => 'juezs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo juez'), array('controller' => 'juezs', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>
</div>
