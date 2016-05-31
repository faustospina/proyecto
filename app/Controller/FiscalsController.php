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
		$this->paginate['Fiscal']['order'] = array('Fiscal.id' => 'asc');
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
			throw new NotFoundException(__('no existe este fiscal'));
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
				$this->Session->setFlash('se ha agregado el fiscal satisfactoriamente', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('controller'=>'pages','action'=>'home'));
			} else {
				$this->Session->setFlash('no se ha podido guardar', 'default', array('class' => 'alert alert-danger'));
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
			throw new NotFoundException(__(' fiscal Invalido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Fiscal->save($this->request->data)) {
				$this->Session->setFlash(__('el fiscal ha sido editado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('fiscal no se guardo.inténtelo de nuevo.'));
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
