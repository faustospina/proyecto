<br />
<br />

<div class="page-header">
	<h2><?php echo __('Acusados'); ?></h2>
</div>


<div class="col-md-12">



	<table class="table table-striped">
	
	
		
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('foto del acusado'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha de arresto'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('apellidos'); ?></th>
			<th><?php echo $this->Paginator->sort('cedula'); ?></th>
	
			<th><?php echo $this->Paginator->sort('culpabilidad'); ?></th>
			<th><?php echo $this->Paginator->sort('capacidad de Pago'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha de modificacion'); ?></th>
		
		
			<th class="actions"><?php echo __('Opciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($acusados as $acusado): ?>
	<tr>
		<td><?php echo $this->Html->image('../files/acusado/foto/' . $acusado['Acusado']['foto_dir'] . '/' . 'thumb_' .$acusado['Acusado']['foto'], array('url' => array('controller' => 'acusados', 'action' => 'view', $acusado['Acusado']['id']))); ?>&nbsp;</td>
		<td><?php echo h($acusado['Acusado']['created']); ?>&nbsp;</td>
		<td><?php echo h($acusado['Acusado']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($acusado['Acusado']['apellidos']); ?>&nbsp;</td>
		<td><?php echo h($acusado['Acusado']['cedula']); ?>&nbsp;</td>
		<td><?php echo h($acusado['Acusado']['culpabilidad']); ?>&nbsp;</td>
		<td><?php echo h($acusado['Acusado']['capacidadPago']); ?>&nbsp;</td>
		<td><?php echo h($acusado['Acusado']['modified']); ?>&nbsp;</td>

			
	
		<td class="actions">
			<?php echo $this->Html->link(__('Ver información detallada'), array('action' => 'view', $acusado['Acusado']['id']),array('class' => 'btn btn-xs btn-info')); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $acusado['Acusado']['id']),array('class' => 'btn btn-xs btn-warning')); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $acusado['Acusado']['id']), array('class' => 'btn btn-xs btn-danger'), __('Are you sure you want to delete # %s?', $acusado['Acusado']['id'])); ?>
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

