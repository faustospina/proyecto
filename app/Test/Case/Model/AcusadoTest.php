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

}
