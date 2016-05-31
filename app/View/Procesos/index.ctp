

	
	<div class="page-header">
	<h2><?php echo __('Procesos'); ?></h2>
	</div>


	<div class="col-md-12">
	<table class="table table-striped">
	<thead>
	<tr>
		
			<th><?php echo $this->Paginator->sort('nombre del delito'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre Variacion del delito'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('numero de Radicado (21 digitos exactos)'); ?></th>
			<th><?php echo $this->Paginator->sort('numero del Proceso'); ?></th>
			<th><?php echo $this->Paginator->sort('estado'); ?></th>
			<th><?php echo $this->Paginator->sort('acusado_id'); ?></th>
			<th class="actions"><?php echo __('Opciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($procesos as $proceso): ?>
	<tr>
		
		<td><?php echo h($proceso['Proceso']['nombreDelito']); ?>&nbsp;</td>
		<td><?php echo h($proceso['Proceso']['nombreVariacionDelito']); ?>&nbsp;</td>
		<td><?php echo h($proceso['Proceso']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($proceso['Proceso']['numeroRadicado']); ?>&nbsp;</td>
		<td><?php echo h($proceso['Proceso']['numeroProceso']); ?>&nbsp;</td>
		<td><?php echo h($proceso['Proceso']['estado']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($proceso['Acusado']['nombre'], array('controller' => 'acusados', 'action' => 'view', $proceso['Acusado']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver Información detallada'), array('action' => 'view', $proceso['Proceso']['id']),array('class' => 'btn btn-xs btn-info')); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $proceso['Proceso']['id']),array('class' => 'btn btn-xs btn-warning')); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $proceso['Proceso']['id']), array('class' => 'btn btn-xs btn-danger'), __('Are you sure you want to delete # %s?', $proceso['Proceso']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	</div>
	
		<p>
		<?php
		echo $this->Paginator->counter(array(
		'format' => __('página {:page} de {:pages}, {:current} elémentos de {:count} en total, inicia en {:start}, termina en {:end}')
		));
		?>	</p>
		<ul class="pagination">
			<li> <?php echo $this->Paginator->prev('< ' . __('previous'), array('tag' => false), null, array('class' => 'prev disabled')); ?> </li>
			<?php echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentTag' => 'a', 'currentClass' => 'active')); ?>
			<li> <?php echo $this->Paginator->next(__('next') . ' >', array('tag' => false), null, array('class' => 'next disabled')); ?> </li>
		</ul>
	<?php echo $this->Js->writeBuffer(); ?>
	</div>

</div>

