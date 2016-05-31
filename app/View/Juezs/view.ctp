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
		<th><?php echo __('Codigo Representativo'); ?></th>
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
		<th><?php echo __('Nombre del delito'); ?></th>
		<th><?php echo __('Nombre Variacion Delito'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Numero Radicado'); ?></th>
		<th><?php echo __('Numero Proceso'); ?></th>
		<th><?php echo __('Estado'); ?></th>
		<th><?php echo __('Acusado Id'); ?></th>
		<th class="actions"><?php echo __('Opciones'); ?></th>
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
				<?php echo $this->Html->link(__('Ver detalle'), array('controller' => 'procesos', 'action' => 'view', $proceso['id']),array('class' => 'btn btn-xs btn-info')); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'procesos', 'action' => 'edit', $proceso['id']),array('class' => 'btn btn-xs btn-warning')); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'procesos', 'action' => 'delete', $proceso['id']), array('class' => 'btn btn-xs btn-danger'), __('Are you sure you want to delete # %s?', $proceso['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
	</div>

<?php endif; ?>

<div class="col-md-2">
	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuevo Proceso'), array('controller' => 'procesos', 'action' => 'add'),array('class' => 'btn btn-info')); ?> </li>
		</ul>
	</div>


<div class="actions">
<div class="btn-group">
  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
	<?php echo __('Opciones'); ?><span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li><?php echo $this->Html->link(__('Editar juez'), array('action' => 'edit', $juez['Juez']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar juez'), array('action' => 'delete', $juez['Juez']['id']), array(), __('Are you sure you want to delete # %s?', $juez['Juez']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de jueces'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo juez'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de audiencias'), array('controller' => 'audiencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva audiencia'), array('controller' => 'audiencias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de procesos'), array('controller' => 'procesos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo proceso'), array('controller' => 'procesos', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>
</div>
</div>
