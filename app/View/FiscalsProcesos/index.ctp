


	<div class="page-header">
	<h2><?php echo __('procesos fiscales'); ?></h2>
	</div>

	<div class="col-md-12">

	<table class="table table-striped">
	<thead>
	<tr>
		
			<th><?php echo $this->Paginator->sort('Nombre del delito asociado al proceso'); ?></th>
			<th><?php echo $this->Paginator->sort('Fiscal a cargo'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($fiscalsProcesos as $fiscalsProceso): ?>
	<tr>
		
		<td><?php echo h($fiscalsProceso['Proceso']['nombreDelito']); ?>&nbsp;</td>
		<td><?php echo h($fiscalsProceso['Fiscal']['nombre']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver información detallada'), array('action' => 'view', $fiscalsProceso['FiscalsProceso']['id']),array('class' => 'btn btn-xs btn-info')); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $fiscalsProceso['FiscalsProceso']['id']),array('class' => 'btn btn-xs btn-warning')); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $fiscalsProceso['FiscalsProceso']['id']), array('class' => 'btn btn-xs btn-danger'), __('Are you sure you want to delete # %s?', $fiscalsProceso['FiscalsProceso']['id'])); ?>
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

