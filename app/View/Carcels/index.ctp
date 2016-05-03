

	<div class="page-header">
	<h2><?php echo __('Carcels'); ?></h2>
	</div>

	<div class="col-md-12">

	<table class="table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('numeroPatios'); ?></th>
			<th><?php echo $this->Paginator->sort('numeroCelda'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('fechaVisita'); ?></th>
			<th><?php echo $this->Paginator->sort('ciudad_id'); ?></th>
			<th><?php echo $this->Paginator->sort('audiencia_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($carcels as $carcel): ?>
	<tr>
		<td><?php echo h($carcel['Carcel']['id']); ?>&nbsp;</td>
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
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $carcel['Carcel']['id']),array('class' => 'btn btn-xs btn-info')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $carcel['Carcel']['id']),array('class' => 'btn btn-xs btn-warning')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $carcel['Carcel']['id']), array('class' => 'btn btn-xs btn-danger'), __('Are you sure you want to delete # %s?', $carcel['Carcel']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	</div>

	
		<p>
		<?php
		echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
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

