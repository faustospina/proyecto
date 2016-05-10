<?php
App::uses('AppController', 'Controller');
/**
 * Procesos Controller
 *
 * @property Proceso $Proceso
 * @property PaginatorComponent $Paginator
 */
class ProcesosController extends AppController {

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
            'Proceso.id' => 'asc'
        )
    );


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Proceso->recursive = 0;

		$this->paginate['Proceso']['limit'] = 3;
		$this->paginate['Proceso']['order'] = array('Proceso.id' => 'asc');
		$this->set('procesos', $this->paginate());
	}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Proceso->exists($id)) {
			throw new NotFoundException(__('Invalid proceso'));
		}
		$options = array('conditions' => array('Proceso.' . $this->Proceso->primaryKey => $id));
		$this->set('proceso', $this->Proceso->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Proceso->create();
			if ($this->Proceso->save($this->request->data)) {
				$this->Session->setFlash(__('The proceso has been saved.'));
				return $this->redirect(array('controller'=>'audiencias','action'=>'add'));
			} else {
				$this->Session->setFlash(__('The proceso could not be saved. Please, try again.'));
			}
		}
		$acusados = $this->Proceso->Acusado->find('list');
		$fiscals = $this->Proceso->Fiscal->find('list');
		$juezs = $this->Proceso->Juez->find('list');
		$this->set(compact('acusados', 'fiscals', 'juezs'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Proceso->exists($id)) {
			throw new NotFoundException(__('Invalid proceso'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Proceso->save($this->request->data)) {
				$this->Session->setFlash(__('The proceso has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proceso could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Proceso.' . $this->Proceso->primaryKey => $id));
			$this->request->data = $this->Proceso->find('first', $options);
		}
		$acusados = $this->Proceso->Acusado->find('list');
		$fiscals = $this->Proceso->Fiscal->find('list');
		$juezs = $this->Proceso->Juez->find('list');
		$this->set(compact('acusados', 'fiscals', 'juezs'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Proceso->id = $id;
		if (!$this->Proceso->exists()) {
			throw new NotFoundException(__('Invalid proceso'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Proceso->delete()) {
			$this->Session->setFlash(__('The proceso has been deleted.'));
		} else {
			$this->Session->setFlash(__('The proceso could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
