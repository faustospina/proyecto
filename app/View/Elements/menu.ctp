 
  <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand">Archivo Jurídico</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><?php echo $this->Html->link('INICIO', array('controller' => 'pages', 'action' => 'display', 'home'))  ?></li>
      <?php if($current_user['roll'] == 'user'): ?>
             <li class="active"><?php echo $this->Html->link('Calendario', array('controller' => 'events', 'action' => 'calendario'))  ?></li>
      <?php endif; ?>
      <?php if($current_user['roll'] == 'admin'): ?>
      <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Usuarios <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li><?php echo $this->Html->link('Agregar usuario', array('controller'=>'users','action'=>'add'))  ?> </li>
              <li><?php echo $this->Html->link('Lista de usuarios', array('controller'=>'users','action'=>'index'))  ?> </li>
              </ul>
      </li>
       <?php endif; ?>

       <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Agregar involucrados<span class="caret"></span></a>
              <ul class="dropdown-menu">
                  <li><?php echo $this->Html->link('Agregar ciudades', array('controller'=>'ciudads','action'=>'add'))  ?> </li>
                  <li><?php echo $this->Html->link('Agregar Audiencia', array('controller'=>'audiencias','action'=>'add'))  ?> </li>
                  <li><?php echo $this->Html->link('Agregar juez', array('controller'=>'juezs','action'=>'add'))  ?> </li>
                  <li><?php echo $this->Html->link('Agregar fiscal', array('controller'=>'fiscals','action'=>'add'))  ?> </li>
                  <li><?php echo $this->Html->link('Agregar acusados', array('controller'=>'acusados','action'=>'add'))  ?> </li>
                  <li><?php echo $this->Html->link('Agregar proceso penal', array('controller'=>'procesos','action'=>'add'))  ?> </li>
                  <li><?php echo $this->Html->link('Agregar carceles', array('controller'=>'carcels','action'=>'add'))  ?> </li>
              </ul>
      </li>
      <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">istas de involucrados<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><?php echo $this->Html->link('Lista de jueces', array('controller'=>'juezs','action'=>'index'))  ?> </li>
                <li><?php echo $this->Html->link('Lista de fiscales', array('controller'=>'fiscals','action'=>'index'))  ?> </li>
                <li><?php echo $this->Html->link('Lista de ciudades', array('controller'=>'ciudads','action'=>'index'))  ?> </li>
                <li><?php echo $this->Html->link('Lista de carceles', array('controller'=>'carcels','action'=>'index'))  ?> </li>
                <li><?php echo $this->Html->link('lista de Audiencias', array('controller'=>'audiencias','action'=>'index'))  ?> </li>
                <li><?php echo $this->Html->link('Lista de acusados', array('controller'=>'acusados','action'=>'index'))  ?> </li>
                <li><?php echo $this->Html->link('Lista de procesos penales', array('controller'=>'procesos','action'=>'index'))  ?> </li>
               <li><?php echo $this->Html->link('Lista de procesos asociados a un fiscal', array('controller'=>'fiscalsProcesos','action'=>'index'))  ?> </li>
                <li><?php echo $this->Html->link('Lista de procesos asociados a un juez', array('controller'=>'juezsProcesos','action'=>'index'))  ?> </li>
        
              </ul>
    
       </li>
       
      
            <ul class="nav navbar-nav navbar-right">
              <li>
                <?php echo $this->Html->link('Salir', array('controller' => 'users', 'action' => 'logout')); ?>
              </li>
              <?php echo $this->Form->create('Acusado', array('type' => 'GET', 'class' => 'navbar-form navbar-left', 'url' => array('controller' => 'acusados', 'action' => 'search'))); ?>
       <div class="form-group">
              <?php echo $this->Form->input('search', array('label' => false, 'div' => false, 'id' => 's', 'class' => 'form-control s', 'autocomplete' => 'off', 'placeholder' => 'Buscar acusado...')); ?>
          </div>
         <?php echo $this->Form->button('Buscar', array('div' => false, 'class' => 'btn btn-primary')); ?>
          <?php echo $this->Form->end(); ?>
          
          </ul>  
          
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
 <br />
   <br />
    <br />
   <br />