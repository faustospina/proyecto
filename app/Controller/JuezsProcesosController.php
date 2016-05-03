<?php
App::uses('AppController', 'Controller');
/**
 * JuezsProcesos Controller
 *
 * @property JuezsProceso $JuezsProceso
 * @property PaginatorComponent $Paginator
 */
class JuezsProcesosController extends AppController {

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
            'JuezsProceso.id' => 'asc'
        )
    );


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->JuezsProceso->recursive = 0;

		$this->paginate['JuezsProceso']['limit'] = 3;
		//$this->paginate['Mesero']['conditions'] = array('Mesero.dni' => "34343");
		$this->paginate['JuezsProceso']['order'] = array('JuezsProceso.id' => 'asc');
 		//$this->Paginator->settings = $this->paginate;
		$this->set('juezsProcesos', $this->paginate());
	}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->JuezsProceso->exists($id)) {
			throw new NotFoundException(__('Invalid juezs proceso'));
		}
		$options = array('conditions' => array('JuezsProceso.' . $this->JuezsProceso->primaryKey => $id));
		$this->set('juezsProceso', $this->JuezsProceso->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->JuezsProceso->create();
			if ($this->JuezsProceso->save($this->request->data)) {
				$this->Session->setFlash(__('The juezs proceso has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The juezs proceso could not be saved. Please, try again.'));
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
		if (!$this->JuezsProceso->exists($id)) {
			throw new NotFoundException(__('Invalid juezs proceso'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->JuezsProceso->save($this->request->data)) {
				$this->Session->setFlash(__('The juezs proceso has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The juezs proceso could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('JuezsProceso.' . $this->JuezsProceso->primaryKey => $id));
			$this->request->data = $this->JuezsProceso->find('first', $options);
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
		$this->JuezsProceso->id = $id;
		if (!$this->JuezsProceso->exists()) {
			throw new NotFoundException(__('Invalid juezs proceso'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->JuezsProceso->delete()) {
			$this->Session->setFlash(__('The juezs proceso has been deleted.'));
		} else {
			$this->Session->setFlash(__('The juezs proceso could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
