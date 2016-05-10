  
   
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php echo $this->Html->link('Archivo Jurídico', array('controller' => 'users', 'action' => 'login'), array('class' => 'navbar-brand')) ?>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <?php echo $this->Form->create('User', array('class' => 'navbar-form navbar-right')); ?>
            <div class="form-group">
              <?php echo $this->Form->input('username', array('label' => false, 'class' => 'form-control', 'placeholder' => 'Usuario')); ?>
            </div>
            <div class="form-group">
              <?php echo $this->Form->input('password', array('label' => false, 'class' => 'form-control', 'placeholder' => 'Contraseña')); ?>
            </div>
            <?php echo $this->Form->button('Acceder', array('class' => 'btn btn-success')); ?>
            <?php echo $this->Form->end(); ?>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Bienvenid@s...</h1>
        <p>Le proponemos vivir de una manera organizada y totalmente sincronica
        el proceso que se da un consultorio juridico para que tenga en cuenta todo
        lo relacionado con sus acusados y los atributos que lo relaciona</p>
     
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Menús optimos para el despliegue de la aplicacion</h2>
          <p>Disponemos de menús optimos para la devida planificacion del proceso </p>
    
        </div>
        <div class="col-md-4">
          <h2>actualización de informacion</h2>
          <p>disponemos de funciones tales como editar los involucrados en el proceso para la acoplacion del mismo </p>
       
       </div>
        <div class="col-md-4">
          <h2>busqueda</h2>
          <p>proporcionamos la implementacion de buscadores para que puedas encontrar a tu ausado de una manera facil y optima</p>
       
        </div>
      </div>

      <hr>

    </div> <!-- /container -->
