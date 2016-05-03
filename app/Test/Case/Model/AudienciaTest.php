<?php
App::uses('Audiencia', 'Model');

/**
 * Audiencia Test Case
 *
 */
class AudienciaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.audiencia',
		'app.acusado',
		'app.user',
		'app.ciudad',
		'app.proceso',
		'app.carcel',
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
		$this->Audiencia = ClassRegistry::init('Audiencia');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Audiencia);

		parent::tearDown();
	}

}
