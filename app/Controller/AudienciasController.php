<?php
App::uses('AppController', 'Controller');
/**
 * Audiencias Controller
 *
 * @property Audiencia $Audiencia
 * @property PaginatorComponent $Paginator
 */
class AudienciasController extends AppController {

/**
 * Components
  @var array
 */
	public $components = array('Session', 'RequestHandler');
	public $helpers = array('Html', 'Form', 'Time', 'Js');

	  public $paginate = array(
        'limit' => 3,
        'order' => array(
            'Audiencia.id' => 'asc'
        )
    );


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Audiencia->recursive = 0;

		$this->paginate['Audiencia']['limit'] = 3;
		$this->paginate['Audiencia']['order'] = array('Audiencia.id' => 'asc');
		$this->set('audiencias', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Audiencia->exists($id)) {
			throw new NotFoundException(__('audiencia invalidad'));
		}
		$options = array('conditions' => array('Audiencia.' . $this->Audiencia->primaryKey => $id));
		$this->set('audiencia', $this->Audiencia->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Audiencia->create();
			if ($this->Audiencia->save($this->request->data)) {
				$this->Session->setFlash(__(' audiencia guardada.'));
				return $this->redirect(array('controller'=>'pages','action'=>'home'));
			} else {
				$this->Session->setFlash('no se ha podido guardar', 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->Audiencia->exists($id)) {
			throw new NotFoundException(__('no es correcta esta audiencia'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Audiencia->save($this->request->data)) {
				$this->Session->setFlash('la audiencia ha sido editada', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('la audiencia no se ha podido editar.', 'default', array('class' =>'alert alert-danger' ));
			}
		} else {
			$options = array('conditions' => array('Audiencia.' . $this->Audiencia->primaryKey => $id));
			$this->request->data = $this->Audiencia->find('first', $options);
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
		$this->Audiencia->id = $id;
		if (!$this->Audiencia->exists()) {
			throw new NotFoundException(__('la audiencia no existe'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Audiencia->delete()) {
			$this->Session->setFlash(__('la audiencia fue eliminada.'));
		} else {
			$this->Session->setFlash(__('no se pudo eliminar.inténtelo de nuevo.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
