<?php
App::uses('Fiscal', 'Model');

/**
 * Fiscal Test Case
 *
 */
class FiscalTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.fiscal',
		'app.audiencia',
		'app.acusado',
		'app.user',
		'app.ciudad',
		'app.carcel',
		'app.proceso',
		'app.juez',
		'app.fiscals_proceso'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Fiscal = ClassRegistry::init('Fiscal');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Fiscal);

		parent::tearDown();
	}

}
