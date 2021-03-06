

	<div class="page-header">
	<h2><?php echo __('Carceles'); ?></h2>
	</div>

	<div class="col-md-12">

	<table class="table table-striped">
	<thead>
	<tr>
			
			<th><?php echo $this->Paginator->sort('fecha de cracion'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('numero de patios'); ?></th>
			<th><?php echo $this->Paginator->sort('numero de celda'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha de modificación'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha de visita'); ?></th>
			<th><?php echo $this->Paginator->sort('ciudad_id'); ?></th>
			<th><?php echo $this->Paginator->sort('audiencia_id'); ?></th>
			<th class="actions"><?php echo __('Opciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($carcels as $carcel): ?>
	<tr>
		
		<td><?php echo h($carcel['Carcel']['created']); ?>&nbsp;</td>
		<td><?php echo h($carcel['Carcel']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($carcel['Carcel']['numeroPatios']); ?>&nbsp;</td>
		<td><?php echo h($carcel['Carcel']['numeroCelda']); ?>&nbsp;</td>
		<td><?php echo h($carcel['Carcel']['modified']); ?>&nbsp;</td>
		<td><?php echo h($carcel['Carcel']['fechaVisita']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($carcel['Ciudad']['nombre'], array('controller' => 'ciudads', 'action' => 'view', $carcel['Ciudad']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($carcel['Audiencia']['nombre'], array('controller' => 'audiencias', 'action' => 'view', $carcel['Audiencia']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver información detallada'), array('action' => 'view', $carcel['Carcel']['id']),array('class' => 'btn btn-xs btn-info')); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $carcel['Carcel']['id']),array('class' => 'btn btn-xs btn-warning')); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $carcel['Carcel']['id']), array('class' => 'btn btn-xs btn-danger'), __('Are you sure you want to delete # %s?', $carcel['Carcel']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	</div>

	
		<p>
		<?php
		echo $this->Paginator->counter(array(
		'format'=> __('página {:page} de {:pages}, {:current} elémentos de {:count} en total, inicia en {:start}, termina en {:end}')
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

