<?php
App::uses('AppController', 'Controller');
/**
 * FiscalsProcesos Controller
 *
 * @property FiscalsProceso $FiscalsProceso
 * @property PaginatorComponent $Paginator
 */
class FiscalsProcesosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Session', 'RequestHandler');
	public $helpers = array('Html', 'Form', 'Time', 'Js');

	  public $paginate = array(
        'limit' => 3,
        'order' => array(
            'FiscalsProceso.id' => 'asc'
        )
    );


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->FiscalsProceso->recursive = 0;

		$this->paginate['FiscalsProceso']['limit'] = 3;
		//$this->paginate['Mesero']['conditions'] = array('Mesero.dni' => "34343");
		$this->paginate['FiscalsProceso']['order'] = array('FiscalsProceso.id' => 'asc');
 		//$this->Paginator->settings = $this->paginate;
		$this->set('fiscalsProcesos', $this->paginate());
	}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->FiscalsProceso->exists($id)) {
			throw new NotFoundException(__('Invalid fiscals proceso'));
		}
		$options = array('conditions' => array('FiscalsProceso.' . $this->FiscalsProceso->primaryKey => $id));
		$this->set('fiscalsProceso', $this->FiscalsProceso->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FiscalsProceso->create();
			if ($this->FiscalsProceso->save($this->request->data)) {
				$this->Session->setFlash(__('The fiscals proceso has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fiscals proceso could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->FiscalsProceso->exists($id)) {
			throw new NotFoundException(__('Invalid fiscals proceso'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->FiscalsProceso->save($this->request->data)) {
				$this->Session->setFlash(__('The fiscals proceso has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fiscals proceso could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('FiscalsProceso.' . $this->FiscalsProceso->primaryKey => $id));
			$this->request->data = $this->FiscalsProceso->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->FiscalsProceso->id = $id;
		if (!$this->FiscalsProceso->exists()) {
			throw new NotFoundException(__('Invalid fiscals proceso'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->FiscalsProceso->delete()) {
			$this->Session->setFlash(__('The fiscals proceso has been deleted.'));
		} else {
			$this->Session->setFlash(__('The fiscals proceso could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
