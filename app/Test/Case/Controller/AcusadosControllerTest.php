<?php
App::uses('AcusadosController', 'Controller');

/**
 * AcusadosController Test Case
 *
 */
class AcusadosControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.acusado',
		'app.user',
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
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
	
		$this->Acusado->recursive = 0;
		$this->paginate['Acusado']['limit'] = 2;
		$this->paginate['Acusado']['order'] = array('1' => 'asc');
		$this->set('acusados', $this->paginate());
		echo $this->unit->run($this, acusado, 'Insert Test');
		$this->assertTrue(true);
		
		
	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {
		
		if (!$this->Acusado->exists($id)) {
			throw new NotFoundException(__('este acusado es invalido'));
		}
		$options = array('conditions' => array('Acusado.' . $this->Acusado->primaryKey => $id));
		$this->set('acusado', $this->Acusado->find('first', $options));
		
		
		$this->markTestIncomplete('testView not implemented.');
	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {
		$this->markTestIncomplete('testAdd not implemented.');
	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {
		$this->markTestIncomplete('testEdit not implemented.');
	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {
		$this->markTestIncomplete('testDelete not implemented.');
	}

}
