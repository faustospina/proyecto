<?php if($ajax != 1): ?>

    <h1>Buscar acusado</h1>
    <br>
    <div class="row">
        <?php echo $this->Form->create('Acusado', array('type' => 'GET')); ?>
        
        <div class="col-sm-4">
            <?php echo $this->Form->input('search', array('label' => false, 'div' => false, 'class' => 'form-control', 'autocomplet' => 'off', 'value' => $search)); ?>
        </div>
        
  
        
        <div class="col-sm-3">
           <?php echo $this->Form->button('Buscar', array('div' => false, 'class' => 'btn btn-primary')); ?>
        </div>
        
        <?php echo $this->Form->end(); ?>
        
    </div>

    <br><br>
<?php endif; ?>

<?php if(!empty($search)): ?>

    <?php if(!empty($acusados)): ?>
    
    <div class="row">
        <?php foreach($acusados as $acusado): ?>
            <div class="col-sm-3">
                <figure class="acusado">
                    <?php echo $this->Html->image('../files/acusado/foto/' . $acusado['Acusado']['foto_dir'] . '/' . 'thumb_' . $acusado['Acusado']['foto'], array('url' => array('controller' => 'acusados', 'action' => 'view', $acusado['Acusado']['id']))); ?>
                </figure>
                <br>
                <?php echo $this->Html->link($acusado['Acusado']['nombre'], array('action' => 'view', $acusado['Acusado']['id'])); ?>
                <br>
                $ <?php echo $acusado['Acusado']['cedula'] ;?>
                <br><br>
            </div>
        <?php endforeach; ?>
    </div>
    <br><br><br>
    
    <?php else: ?>
    
    <h3>No se encontró el acusado que busca :-( </h3>
    
    <?php endif; ?>

<?php endif; ?>