<?php
App::uses('JuezsProceso', 'Model');

/**
 * JuezsProceso Test Case
 *
 */
class JuezsProcesoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.juezs_proceso',
		'app.proceso',
		'app.juez',
		'app.audiencia',
		'app.acusado',
		'app.user',
		'app.ciudad',
		'app.carcel',
		'app.fiscal',
		'app.fiscals_proceso'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JuezsProceso = ClassRegistry::init('JuezsProceso');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JuezsProceso);

		parent::tearDown();
	}

}
