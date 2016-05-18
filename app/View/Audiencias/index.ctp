<div class="page-header">
	<h2><?php echo __('Audiencias'); ?></h2>

</div>

<div class="col-md-12">

	<table class="table table-striped">
	<thead>
	<tr>
		
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('nroSala'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('MinPublico'); ?></th>
			<th><?php echo $this->Paginator->sort('detenido'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th class="actions"><?php echo __('Opciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($audiencias as $audiencia): ?>
	<tr>
	
		<td><?php echo h($audiencia['Audiencia']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($audiencia['Audiencia']['nroSala']); ?>&nbsp;</td>
		<td><?php echo h($audiencia['Audiencia']['created']); ?>&nbsp;</td>
		<td><?php echo h($audiencia['Audiencia']['MinPublico']); ?>&nbsp;</td>
		<td><?php echo h($audiencia['Audiencia']['detenido']); ?>&nbsp;</td>
		<td><?php echo h($audiencia['Audiencia']['descripcion']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver información detallada'), array('action' => 'view', $audiencia['Audiencia']['id']),array('class' => 'btn btn-xs btn-info')); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $audiencia['Audiencia']['id']),array('class' => 'btn btn-xs btn-warning')); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $audiencia['Audiencia']['id']), array('class' => 'btn btn-xs btn-danger'), __('Are you sure you want to delete # %s?', $audiencia['Audiencia']['id'])); ?>
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

