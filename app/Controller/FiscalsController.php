<?php
App::uses('AppController', 'Controller');
/**
 * Fiscals Controller
 *
 * @property Fiscal $Fiscal
 * @property PaginatorComponent $Paginator
 */
class FiscalsController extends AppController {

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
            'Fiscal.id' => 'asc'
        )
    );


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Fiscal->recursive = 0;

		$this->paginate['Fiscal']['limit'] = 3;
		//$this->paginate['Mesero']['conditions'] = array('Mesero.dni' => "34343");
		$this->paginate['Fiscal']['order'] = array('Fiscal.id' => 'asc');
 		//$this->Paginator->settings = $this->paginate;
		$this->set('fiscals', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Fiscal->exists($id)) {
			throw new NotFoundException(__('Invalid fiscal'));
		}
		$options = array('conditions' => array('Fiscal.' . $this->Fiscal->primaryKey => $id));
		$this->set('fiscal', $this->Fiscal->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Fiscal->create();
			if ($this->Fiscal->save($this->request->data)) {
				$this->Session->setFlash(__('The fiscal has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fiscal could not be saved. Please, try again.'));
			}
		}
		$audiencias = $this->Fiscal->Audiencia->find('list');
		$procesos = $this->Fiscal->Proceso->find('list');
		$this->set(compact('audiencias', 'procesos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Fiscal->exists($id)) {
			throw new NotFoundException(__('Invalid fiscal'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Fiscal->save($this->request->data)) {
				$this->Session->setFlash(__('The fiscal has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fiscal could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Fiscal.' . $this->Fiscal->primaryKey => $id));
			$this->request->data = $this->Fiscal->find('first', $options);
		}
		$audiencias = $this->Fiscal->Audiencia->find('list');
		$procesos = $this->Fiscal->Proceso->find('list');
		$this->set(compact('audiencias', 'procesos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Fiscal->id = $id;
		if (!$this->Fiscal->exists()) {
			throw new NotFoundException(__('Invalid fiscal'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Fiscal->delete()) {
			$this->Session->setFlash(__('The fiscal has been deleted.'));
		} else {
			$this->Session->setFlash(__('The fiscal could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
