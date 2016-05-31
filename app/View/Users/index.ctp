
<br />

	
	<div class="page-header">
	<h2><?php echo __('Usuarios'); ?></h2>
	</div>

	<div class="col-md-12">
	<table class="table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('apellidos'); ?></th>
			<th><?php echo $this->Paginator->sort('celular'); ?></th>
			<th><?php echo $this->Paginator->sort('correo'); ?></th>
			<th><?php echo $this->Paginator->sort('usuario'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha de Creacion'); ?></th>
			<th><?php echo $this->Paginator->sort('Fecha de Modificado'); ?></th>
			<th><?php echo $this->Paginator->sort('Titulo Profesional'); ?></th>
			<th><?php echo $this->Paginator->sort('Rol'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['apellidos']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['celular']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['correo']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>

		<td><?php echo h($user['User']['created']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['modified']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['tituloProfesional']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['roll']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver información detallada'), array('action' => 'view', $user['User']['id']),array('class' => 'btn btn-xs btn-info')); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $user['User']['id']),array('class' => 'btn btn-xs btn-warning')); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $user['User']['id']), array('class' => 'btn btn-xs btn-danger'), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
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

