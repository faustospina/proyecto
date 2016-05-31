<?php
App::uses('AppController', 'Controller');
/**
 * Ciudads Controller
 *
 * @property Ciudad $Ciudad
 * @property PaginatorComponent $Paginator
 */
class CiudadsController extends AppController {

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
            'Ciudad.id' => 'asc'
        )
    );


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Ciudad->recursive = 0;

		$this->paginate['Ciudad']['limit'] = 3;
		$this->paginate['Ciudad']['order'] = array('Ciudad.id' => 'asc');
		$this->set('ciudads', $this->paginate());
	}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Ciudad->exists($id)) {
			throw new NotFoundException(__('la ciudad no existe'));
		}
		$options = array('conditions' => array('Ciudad.' . $this->Ciudad->primaryKey => $id));
		$this->set('ciudad', $this->Ciudad->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Ciudad->create();
			if ($this->Ciudad->save($this->request->data)) {
				$this->Session->setFlash('se guardo con exito la ciudad', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('controller'=>'pages','action'=>'home'));
			} else {
				$this->Session->setFlash('no se pudo guardar la ciudad', 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->Ciudad->exists($id)) {
			throw new NotFoundException(__('ciudad invalidad'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Ciudad->save($this->request->data)) {
				$this->Session->setFlash('se pudo editar la ciudad con exito', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('no se pudo editar la ciudad con exito', 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Ciudad.' . $this->Ciudad->primaryKey => $id));
			$this->request->data = $this->Ciudad->find('first', $options);
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
		$this->Ciudad->id = $id;
		if (!$this->Ciudad->exists()) {
			throw new NotFoundException(__('ciudad no existe'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Ciudad->delete()) {
			$this->Session->setFlash('se pudo eliminar la ciudad con exito', 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash('no se pudo eliminar la ciudad con exito', 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
