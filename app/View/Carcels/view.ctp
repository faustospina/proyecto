

<div class="page-header">
<h2><?php echo __('Carcel'); ?></h2>
</div>






	<div class="col-md-12">

	<table class="table table-striped">
	<thead>
	<tr>
	
		<th><?php echo __('fecha de Creacion'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Numero de patios'); ?></th>
		<th><?php echo __('Numero de celda'); ?></th>
		<th><?php echo __('fecha de modificacion'); ?></th>
		<th><?php echo __('FechaVisita'); ?></th>
		<th><?php echo __('Ciudad'); ?></th>
		<th><?php echo __('Audiencia'); ?></th>
	</tr>
	</thead>
	<tbody>
	<tr>
	
		<td><?php echo h($carcel['Carcel']['created']); ?>&nbsp;</td>
		<td><?php echo h($carcel['Carcel']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($carcel['Carcel']['numeroPatios']); ?>&nbsp;</td>
		<td><?php echo h($carcel['Carcel']['numeroCelda']); ?>&nbsp;</td>
		<td><?php echo h($carcel['Carcel']['modified']); ?>&nbsp;</td>
		<td><?php echo h($carcel['Carcel']['fechaVisita']); ?>&nbsp;</td>
		<td><?php echo $this->Html->link($carcel['Ciudad']['nombre'], array('controller' => 'ciudads', 'action' => 'view', $carcel['Ciudad']['id'])); ?>&nbsp;</td>
		<td><?php echo $this->Html->link($carcel['Audiencia']['nombre'], array('controller' => 'audiencias', 'action' => 'view', $carcel['Audiencia']['id'])); ?>&nbsp;</td>
	</tr>
	</tbody>
	</table>

	<div class="Actions">
<div class="btn-group">
  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
	<?php echo __('Opciones'); ?><span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li><?php echo $this->Html->link(__('Editar carcel'), array('action' => 'edit', $carcel['Carcel']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Carcel'), array('action' => 'delete', $carcel['Carcel']['id']), array(), __('Are you sure you want to delete # %s?', $carcel['Carcel']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de carceles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva carcel'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de ciudades'), array('controller' => 'ciudads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva ciudad'), array('controller' => 'ciudads', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de audiencias'), array('controller' => 'audiencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva audiencia'), array('controller' => 'audiencias', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>


</div>




