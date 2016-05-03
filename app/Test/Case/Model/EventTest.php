<?php
App::uses('Event', 'Model');

/**
 * Event Test Case
 *
 */
class EventTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.event',
		'app.event_types',
		'app.user',
		'app.acusado',
		'app.ciudad',
		'app.carcel',
		'app.audiencia',
		'app.fiscal',
		'app.proceso',
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
		$this->Event = ClassRegistry::init('Event');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Event);

		parent::tearDown();
	}

}
