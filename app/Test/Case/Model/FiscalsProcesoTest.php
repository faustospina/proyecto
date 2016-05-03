<?php
App::uses('FiscalsProceso', 'Model');

/**
 * FiscalsProceso Test Case
 *
 */
class FiscalsProcesoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.fiscals_proceso',
		'app.proceso',
		'app.fiscal',
		'app.audiencia',
		'app.acusado',
		'app.user',
		'app.ciudad',
		'app.carcel',
		'app.juez'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FiscalsProceso = ClassRegistry::init('FiscalsProceso');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FiscalsProceso);

		parent::tearDown();
	}

}
