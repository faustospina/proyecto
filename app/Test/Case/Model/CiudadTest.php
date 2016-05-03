<?php
App::uses('Ciudad', 'Model');

/**
 * Ciudad Test Case
 *
 */
class CiudadTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ciudad',
		'app.acusado',
		'app.user',
		'app.audiencia',
		'app.carcel',
		'app.fiscal',
		'app.juez',
		'app.proceso'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Ciudad = ClassRegistry::init('Ciudad');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ciudad);

		parent::tearDown();
	}

}
