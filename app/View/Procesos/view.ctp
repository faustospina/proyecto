<div class="page-header">
<h2><?php echo __('Proceso'); ?></h2>
</div>


<div class="col-md-12">

	<table class="table table-striped">
	 <thead>
		<tr>
			<th><?php echo __('Id'); ?></th>
			<th><?php echo __('NombreDelito'); ?></th>
			<th><?php echo __('NombreVariacionDelito'); ?></th>
			<th><?php echo __('Descripcion'); ?></th>
			<th><?php echo __('NumeroRadicado'); ?></th>
			<th><?php echo __('NumeroProceso'); ?></th>
			<th><?php echo __('Estado'); ?></th>
			<th><?php echo __('Acusado'); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><?php echo h($proceso['Proceso']['id']); ?></td>
			<td><?php echo h($proceso['Proceso']['nombreDelito']); ?></td>
			<td><?php echo h($proceso['Proceso']['nombreVariacionDelito']); ?></td>
			<td><?php echo h($proceso['Proceso']['descripcion']); ?></td>
			<td><?php echo h($proceso['Proceso']['numeroRadicado']); ?></td>
			<td><?php echo h($proceso['Proceso']['numeroProceso']); ?></td>
			<td><?php echo h($proceso['Proceso']['estado']); ?></td>
			<td>	<?php echo $this->Html->link($proceso['Acusado']['nombre'], array('controller' => 'acusados', 'action' => 'view', $proceso['Acusado']['id'])); ?></td>
		</tr>
	</tbody>
	</table>
</div>






<div class="related">
	<h3><?php echo __('fiscales relacionados'); ?></h3>
	<?php if (!empty($proceso['Fiscal'])): ?>
	<div class="col-md-12">
	<table class="table table-striped">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Apellidos'); ?></th>
		<th><?php echo __('CodigoRepresentativo'); ?></th>
		<th><?php echo __('Audiencia Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($proceso['Fiscal'] as $fiscal): ?>
		<tr>
			<td><?php echo $fiscal['id']; ?></td>
			<td><?php echo $fiscal['nombre']; ?></td>
			<td><?php echo $fiscal['apellidos']; ?></td>
			<td><?php echo $fiscal['codigoRepresentativo']; ?></td>
			<td><?php echo $fiscal['audiencia_id']; ?></td>
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

<div class="related">
	<h3><?php echo __('jueces relacionados'); ?></h3>
	<?php if (!empty($proceso['Juez'])): ?>
		<div class="col-md-12">
	<table class="table table-striped">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Apellidos'); ?></th>
		<th><?php echo __('CodigoRepresentativo'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Audiencia Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($proceso['Juez'] as $juez): ?>
		<tr>
			<td><?php echo $juez['id']; ?></td>
			<td><?php echo $juez['nombre']; ?></td>
			<td><?php echo $juez['apellidos']; ?></td>
			<td><?php echo $juez['codigoRepresentativo']; ?></td>
			<td><?php echo $juez['descripcion']; ?></td>
			<td><?php echo $juez['audiencia_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver detalle'), array('controller' => 'juezs', 'action' => 'view', $juez['id']),array('class' => 'btn btn-xs btn-info')); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'juezs', 'action' => 'edit', $juez['id']),array('class' => 'btn btn-xs btn-warning')); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'juezs', 'action' => 'delete', $juez['id']), array('class' => 'btn btn-xs btn-danger'), array(), __('Are you sure you want to delete # %s?', $juez['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
	</div>
	</div>
	
<?php endif; ?>


	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuevo Juez'), array('controller' => 'juezs', 'action' => 'add'),array('class' => 'btn btn-info')); ?> </li>
		</ul>
	</div>



<div class="actions">
<div class="btn-group">
  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
	<?php echo __('Opciones'); ?><span class="caret"></span>
		</button>
	<ul class="dropdown-menu" role="menu">
		<li><?php echo $this->Html->link(__('Edit Proceso'), array('action' => 'edit', $proceso['Proceso']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Proceso'), array('action' => 'delete', $proceso['Proceso']['id']), array(), __('Are you sure you want to delete # %s?', $proceso['Proceso']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Procesos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proceso'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Acusados'), array('controller' => 'acusados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acusado'), array('controller' => 'acusados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fiscals'), array('controller' => 'fiscals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fiscal'), array('controller' => 'fiscals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Juezs'), array('controller' => 'juezs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Juez'), array('controller' => 'juezs', 'action' => 'add')); ?> </li>
	</ul>


</div>
</div>
</div>
</div>


