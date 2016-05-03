<div class="page-header">
<h2><?php echo __('Juez'); ?></h2>
</div>


<div class="col-md-12">

	<table class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Apellidos'); ?></th>
		<th><?php echo __('CodigoRepresentativo'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Audiencia'); ?></th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td><?php echo h($juez['Juez']['id']); ?></td>
		<td><?php echo h($juez['Juez']['nombre']); ?></td>
		<td><?php echo h($juez['Juez']['apellidos']); ?></td>
		<td><?php echo h($juez['Juez']['codigoRepresentativo']); ?></td>
		<td><?php echo h($juez['Juez']['descripcion']); ?></td>
		<td><?php echo $this->Html->link($juez['Audiencia']['nombre'], array('controller' => 'audiencias', 'action' => 'view', $juez['Audiencia']['id'])); ?></td>
	</tr>
	</tbody>
	</table>
	</div>


	


<div class="related">
	<h3><?php echo __('Procesos relacionados'); ?></h3>
	<?php if (!empty($juez['Proceso'])): ?>
	<table class="table table-striped">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('NombreDelito'); ?></th>
		<th><?php echo __('NombreVariacionDelito'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('NumeroRadicado'); ?></th>
		<th><?php echo __('NumeroProceso'); ?></th>
		<th><?php echo __('Estado'); ?></th>
		<th><?php echo __('Acusado Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($juez['Proceso'] as $proceso): ?>
		<tr>
			<td><?php echo $proceso['id']; ?></td>
			<td><?php echo $proceso['nombreDelito']; ?></td>
			<td><?php echo $proceso['nombreVariacionDelito']; ?></td>
			<td><?php echo $proceso['descripcion']; ?></td>
			<td><?php echo $proceso['numeroRadicado']; ?></td>
			<td><?php echo $proceso['numeroProceso']; ?></td>
			<td><?php echo $proceso['estado']; ?></td>
			<td><?php echo $proceso['acusado_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'procesos', 'action' => 'view', $proceso['id']),array('class' => 'btn btn-xs btn-info')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'procesos', 'action' => 'edit', $proceso['id']),array('class' => 'btn btn-xs btn-warning')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'procesos', 'action' => 'delete', $proceso['id']), array('class' => 'btn btn-xs btn-danger'), __('Are you sure you want to delete # %s?', $proceso['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
	</div>

<?php endif; ?>

<div class="col-md-2">
	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Proceso'), array('controller' => 'procesos', 'action' => 'add'),array('class' => 'btn btn-info')); ?> </li>
		</ul>
	</div>


<div class="actions">
<div class="btn-group">
  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
	<?php echo __('Actions'); ?><span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li><?php echo $this->Html->link(__('Edit Juez'), array('action' => 'edit', $juez['Juez']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Juez'), array('action' => 'delete', $juez['Juez']['id']), array(), __('Are you sure you want to delete # %s?', $juez['Juez']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Juezs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Juez'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Audiencias'), array('controller' => 'audiencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Audiencia'), array('controller' => 'audiencias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Procesos'), array('controller' => 'procesos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proceso'), array('controller' => 'procesos', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>
</div>
</div>
