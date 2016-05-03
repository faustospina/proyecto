<?php
App::uses('Juez', 'Model');

/**
 * Juez Test Case
 *
 */
class JuezTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.juez',
		'app.audiencia',
		'app.acusado',
		'app.user',
		'app.ciudad',
		'app.carcel',
		'app.proceso',
		'app.fiscal',
		'app.fiscals_proceso',
		'app.juezs_proceso'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Juez = ClassRegistry::init('Juez');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Juez);

		parent::tearDown();
	}

}
