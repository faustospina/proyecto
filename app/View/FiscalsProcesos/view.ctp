<div class="page-header">
<h2><?php echo __('Fiscal del Proceso'); ?></h2>
</div>
	
	<div class="col-md-12">

	<table class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Proceso Id'); ?></th>
		<th><?php echo __('Fiscal Id'); ?></th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td><?php echo h($fiscalsProceso['FiscalsProceso']['id']); ?>&nbsp;</td>
		<td><?php echo h($fiscalsProceso['FiscalsProceso']['proceso_id']); ?>&nbsp;</td>
		<td><?php echo h($fiscalsProceso['FiscalsProceso']['fiscal_id']); ?>&nbsp;</td>
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
		<li><?php echo $this->Html->link(__('Edit Fiscals Proceso'), array('action' => 'edit', $fiscalsProceso['FiscalsProceso']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Fiscals Proceso'), array('action' => 'delete', $fiscalsProceso['FiscalsProceso']['id']), array(), __('Are you sure you want to delete # %s?', $fiscalsProceso['FiscalsProceso']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Fiscals Procesos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fiscals Proceso'), array('action' => 'add')); ?> </li>
	</ul>
</div>
</div>
</div>
