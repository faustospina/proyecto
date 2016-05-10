
<div class="page-header">
<h2><?php echo __('Fiscal'); ?></h2>
</div>


<div class="col-md-12">

	<table class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Apellidos'); ?></th>
		<th><?php echo __('CodigoRepresentativo'); ?></th>
		<th><?php echo __('Audiencia'); ?></th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td><?php echo h($fiscal['Fiscal']['id']); ?>&nbsp;</td>
		<td><?php echo h($fiscal['Fiscal']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($fiscal['Fiscal']['apellidos']); ?>&nbsp;</td>
		<td><?php echo h($fiscal['Fiscal']['codigoRepresentativo']); ?>&nbsp;</td>
		<td><?php echo $this->Html->link($fiscal['Audiencia']['nombre'], array('controller' => 'audiencias', 'action' => 'view', $fiscal['Audiencia']['id'])); ?>&nbsp;</td>
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
		<li><?php echo $this->Html->link(__('Editar Fiscal'), array('action' => 'edit', $fiscal['Fiscal']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Fiscal'), array('action' => 'delete', $fiscal['Fiscal']['id']), array(), __('Are you sure you want to delete # %s?', $fiscal['Fiscal']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Fiscales'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Fiscal'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Audiencias'), array('controller' => 'audiencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Audiencia'), array('controller' => 'audiencias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Procesos'), array('controller' => 'procesos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Proceso'), array('controller' => 'procesos', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>

<div class="related">
	<h3><?php echo __('procesos relacionados'); ?></h3>
	<?php if (!empty($fiscal['Proceso'])): ?>
		<div class="col-md-12">
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
	<?php foreach ($fiscal['Proceso'] as $proceso): ?>
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

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuevo Proceso'), array('controller' => 'procesos', 'action' => 'add'),array('class' => 'btn btn-info')); ?> </li>
		</ul>
	</div>
</div>
