<?php
App::uses('Proceso', 'Model');

/**
 * Proceso Test Case
 *
 */
class ProcesoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.proceso',
		'app.acusado',
		'app.user',
		'app.ciudad',
		'app.carcel',
		'app.audiencia',
		'app.fiscal',
		'app.fiscals_proceso',
		'app.juez',
		'app.juezs_proceso'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Proceso = ClassRegistry::init('Proceso');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Proceso);

		parent::tearDown();
	}

}
