<div class="container">
	<div class="row">
		<div class="col-md-6">
<?php echo $this->Form->create('FiscalsProceso', array('role' => 'form')); ?>
	<fieldset>
		<legend><?php echo __('Edit Fiscal del Proceso'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('proceso_id');
		echo $this->Form->input('fiscal_id');
	?>
	</fieldset>
	<p>
<?php echo $this->Form->end(array('label' => 'Editar audiencia', 'class' =>'btn btn-success')); ?>
</p>
</div>
<div class="actions">
<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
	<?php echo __('Actions'); ?><span class="caret"></span>
	 </button>
	<ul class="dropdown-menu" role="menu">

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('FiscalsProceso.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('FiscalsProceso.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Fiscals Procesos'), array('action' => 'index')); ?></li>
	</ul>
</div>
</div>
</div>
</div>
