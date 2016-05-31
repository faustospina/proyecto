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
		$this->paginate['JuezsProceso']['order'] = array('JuezsProceso.id' => 'asc');
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
			throw new NotFoundException(__('Invalido el proceso '));
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
				$this->Session->setFlash(__('el  proceso jueces ha sido guardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('el proceso jueces no guardado.'));
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
			throw new NotFoundException(__('no existe el proceso jueces'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->JuezsProceso->save($this->request->data)) {
				$this->Session->setFlash(__('los  jueces del proceso han sido guardados.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('los  jueces del proceso no han sido guardados.'));
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
			throw new NotFoundException(__('no existe jueces de este proceso'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->JuezsProceso->delete()) {
			$this->Session->setFlash(__('los  jueces del proceso han sido eliminados.'));
		} else {
			$this->Session->setFlash(__('los  jueces del proceso no han sido eliminados. '));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
