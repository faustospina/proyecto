<br />
<br />
<br />
<br />	
<br />
<div class="page-header">
<h2><?php echo __('Usuario'); ?></h2>
</div>

<div class="col-md-12">

	<table class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Apellidos'); ?></th>
		<th><?php echo __('Celular'); ?></th>
		<th><?php echo __('Correo'); ?></th>
		<th><?php echo __('Usuario'); ?></th>
	
		<th><?php echo __('Creado'); ?></th>
		<th><?php echo __('Modificado'); ?></th>
		<th><?php echo __('TituloProfesional'); ?></th>
		<th><?php echo __('Rol'); ?></th>
	</tr>
	</thead>
	<tbody>
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
		</tr>
	</tbody>
	</table>
	</div>

<div class="related">
	<h3><?php echo __('Acusados Relacionados'); ?></h3>
	<?php if (!empty($user['Acusado'])): ?>
	<div class="col-md-12">
	<table class="table table-striped">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Creado'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Apellidos'); ?></th>
		<th><?php echo __('Direccion'); ?></th>
		<th><?php echo __('Ocupacion'); ?></th>
		<th><?php echo __('Culpabilidad'); ?></th>
		<th><?php echo __('CapacidadPago'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Sentencia'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Ciudad Id'); ?></th>
		<th><?php echo __('Audiencia Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Acusado'] as $acusado): ?>
		<tr>
			<td><?php echo $acusado['id']; ?></td>
			<td><?php echo $acusado['created']; ?></td>
			<td><?php echo $acusado['nombre']; ?></td>
			<td><?php echo $acusado['apellidos']; ?></td>
			<td><?php echo $acusado['direccion']; ?></td>
			<td><?php echo $acusado['ocupacion']; ?></td>
			<td><?php echo $acusado['culpabilidad']; ?></td>
			<td><?php echo $acusado['capacidadPago']; ?></td>
			<td><?php echo $acusado['modified']; ?></td>
			<td><?php echo $acusado['sentencia']; ?></td>
			<td><?php echo $acusado['user_id']; ?></td>
			<td><?php echo $acusado['ciudad_id']; ?></td>
			<td><?php echo $acusado['audiencia_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'acusados', 'action' => 'view', $acusado['id']),array('class' => 'btn btn-xs btn-info')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'acusados', 'action' => 'edit', $acusado['id']),array('class' => 'btn btn-xs btn-warning')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'acusados', 'action' => 'delete', $acusado['id']), array('class' => 'btn btn-xs btn-danger'), __('Are you sure you want to delete # %s?', $acusado['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>


<div class="col-md-2">
	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Acusado'), array('controller' => 'acusados', 'action' => 'add'),array('class' => 'btn btn-info')); ?> </li>
		</ul>
	</div>
</div>


<div class="actions">
<div class="btn-group">
  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
	<?php echo __('Actions'); ?><span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Acusados'), array('controller' => 'acusados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acusado'), array('controller' => 'acusados', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>
</div>
</div>