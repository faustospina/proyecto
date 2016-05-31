<?php
App::uses('Acusado', 'Model');

/**
 * Acusado Test Case
 *
 */
class AcusadoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.acusado',
		'app.user',
		'app.ciudad',
		'app.audiencia',
		'app.proceso'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Acusado = ClassRegistry::init('Acusado');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Acusado);

		parent::tearDown();
	}


	var $acusado = null;  
    var $fixtures = array('app.acusado');  
  
    function startTest() {  
        $this-=>Acusado =& ClassRegistry::init('acusado');  
    }  
        function testuserInstance() {  
        $this-=>assertTrue(is_a($this-=>Acusado, 'acusado'));  
    }  
        function testfindUserId(){  
            // buscamos en el modelo user en la función findUserId la id 1.  
        $friendid=$this-=>Acusado-=>findUserId(1);  
                // comparamos si el acusado el name de la busqueda, con usuario1, que debería ser true.  
        $this-=>assertEqual($friendid['acusado']['nombre'],'usuario1');  
    } 

}
