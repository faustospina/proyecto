<div class="page-header">
<h2><?php echo __('Juez del Proceso'); ?></h2>
</div>
	
	<div class="col-md-12">

	<table class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Proceso Id'); ?></th>
		<th><?php echo __('Juez Id'); ?></th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td><?php echo h($juezsProceso['JuezsProceso']['id']); ?>&nbsp;</td>
		<td><?php echo h($juezsProceso['JuezsProceso']['proceso_id']); ?></td>
		<td><?php echo h($juezsProceso['JuezsProceso']['juez_id']); ?></td>
	</tr>
	</tbody>
	</table>
	</div>







<div class="actions">
<div class="btn-group">
  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
	<?php echo __('Actions'); ?><span class="caret"></span>
		</button>
	<ul class="dropdown-menu" role="menu">
		<li><?php echo $this->Html->link(__('Edit Juezs Proceso'), array('action' => 'edit', $juezsProceso['JuezsProceso']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Juezs Proceso'), array('action' => 'delete', $juezsProceso['JuezsProceso']['id']), array(), __('Are you sure you want to delete # %s?', $juezsProceso['JuezsProceso']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Juezs Procesos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Juezs Proceso'), array('action' => 'add')); ?> </li>
	</ul>
</div>
</div>
</div>
