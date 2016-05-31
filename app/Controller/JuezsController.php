<?php
App::uses('AppController', 'Controller');
/**
 * Juezs Controller
 *
 * @property Juez $Juez
 * @property PaginatorComponent $Paginator
 */
class JuezsController extends AppController {

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
            'Juez.id' => 'asc'
        )
    );



	


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Juez->recursive = 0;

		$this->paginate['Juez']['limit'] = 3;
		$this->paginate['Juez']['order'] = array('Juez.id' => 'asc');
		$this->set('juezs', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Juez->exists($id)) {
			throw new NotFoundException(__('este juez no existe'));
		}
		$options = array('conditions' => array('Juez.' . $this->Juez->primaryKey => $id));
		$this->set('juez', $this->Juez->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Juez->create();
			if ($this->Juez->save($this->request->data)) {
				$this->Session->setFlash('se ha agregado el fiscal satisfactoriamente', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('controller'=>'pages','action'=>'home'));
			} else {
				$this->Session->setFlash('no se ha podido guardar', 'default', array('class' => 'alert alert-danger'));
			}
		}
		$audiencias = $this->Juez->Audiencia->find('list');
		$procesos = $this->Juez->Proceso->find('list');
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
		if (!$this->Juez->exists($id)) {
			throw new NotFoundException(__('el juez no existe'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Juez->save($this->request->data)) {
				$this->Session->setFlash(__('el juez ha sido guardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('el juez no se guardo.inténtelo de nuevo.'));
			}
		} else {
			$options = array('conditions' => array('Juez.' . $this->Juez->primaryKey => $id));
			$this->request->data = $this->Juez->find('first', $options);
		}
		$audiencias = $this->Juez->Audiencia->find('list');
		$procesos = $this->Juez->Proceso->find('list');
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
		$this->Juez->id = $id;
		if (!$this->Juez->exists()) {
			throw new NotFoundException(__('juez invalido '));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Juez->delete()) {
			$this->Session->setFlash(__('el juez ha sido eliminado.'));
		} else {
			$this->Session->setFlash(__('el juez no se guardo. inténtelo de nuevo.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
