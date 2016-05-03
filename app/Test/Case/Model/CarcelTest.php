<?php
App::uses('Carcel', 'Model');

/**
 * Carcel Test Case
 *
 */
class CarcelTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.carcel',
		'app.ciudad',
		'app.audiencia',
		'app.acusado',
		'app.user',
		'app.proceso',
		'app.fiscal',
		'app.juez'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Carcel = ClassRegistry::init('Carcel');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Carcel);

		parent::tearDown();
	}

}
