<?php
App::uses('AppController', 'Controller');
/**
 * EventTypes Controller
 *
 * @property EventType $EventType
 * @property PaginatorComponent $Paginator
 */
class EventTypesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EventType->recursive = 0;
		$this->set('eventTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EventType->exists($id)) {
			throw new NotFoundException(__('Invalido este tipo de evento'));
		}
		$options = array('conditions' => array('EventType.' . $this->EventType->primaryKey => $id));
		$this->set('eventType', $this->EventType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EventType->create();
			if ($this->EventType->save($this->request->data)) {
				$this->Session->setFlash(__('eveto guardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('no guardado.inténtelo de nuevo.'));
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
		if (!$this->EventType->exists($id)) {
			throw new NotFoundException(__('este tipo de evento no existe'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->EventType->save($this->request->data)) {
				$this->Session->setFlash(__('este evento editado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('no se ha edito.inténtelo de nuevo.'));
			}
		} else {
			$options = array('conditions' => array('EventType.' . $this->EventType->primaryKey => $id));
			$this->request->data = $this->EventType->find('first', $options);
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
		$this->EventType->id = $id;
		if (!$this->EventType->exists()) {
			throw new NotFoundException(__(' Invalido evento'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->EventType->delete()) {
			$this->Session->setFlash(__('ha sido eliminado.'));
		} else {
			$this->Session->setFlash(__('no se elimino. inténtelo de nuevo.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
