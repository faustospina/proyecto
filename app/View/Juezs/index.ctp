<?php
   $this->Paginator->options(array(
      'update' => '#contenedor-juezs',
      'before' => $this->Js->get("#procesando")->effect('fadeIn', array('buffer' => false)),
      'complete' => $this->Js->get("#procesando")->effect('fadeOut', array('buffer' => false))
   ));
?>

<div class="page-header">
	<h2><?php echo __('Jueces'); ?></h2>
</div>

 

<div class="col-md-12">
  
 
	<table class="table table-striped">
	
	<thead>
	<tr>
	
		<th><?php echo $this->Paginator->sort('id'); ?></th>
		<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('apellidos'); ?></th>
			<th><?php echo $this->Paginator->sort('codigoRepresentativo'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('audiencia_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>		

	</tr>

	</thead>
	
	
	<tbody>
	<?php foreach ($juezs as $juez): ?>
	<tr>
	
	<h3 class="panel-title">
		<td><?php echo h($juez['Juez']['id']); ?>&nbsp;</td>
		<td><?php echo h($juez['Juez']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($juez['Juez']['apellidos']); ?>&nbsp;</td>
		<td><?php echo h($juez['Juez']['codigoRepresentativo']); ?>&nbsp;</td>
		<td><?php echo h($juez['Juez']['descripcion']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($juez['Audiencia']['nombre'], array('controller' => 'audiencias', 'action' => 'view', $juez['Audiencia']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver información detallada'), array('action' => 'view', $juez['Juez']['id']),array('class' => 'btn btn-xs btn-info')); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $juez['Juez']['id']),array('class' => 'btn btn-xs btn-warning')); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $juez['Juez']['id']), array('class' => 'btn btn-xs btn-danger'), __('Are you sure you want to delete # %s?', $juez['Juez']['id'])); ?>
		</td>
	</h3>
	
	</tr>
<?php endforeach; ?>
	</tbody>

	</table>
	</div>


</div>
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



