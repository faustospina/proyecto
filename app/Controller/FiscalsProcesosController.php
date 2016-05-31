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
		$this->paginate['FiscalsProceso']['order'] = array('FiscalsProceso.id' => 'asc');
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
			throw new NotFoundException(__('Invalido procesos de  fiscales '));
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
				$this->Session->setFlash('el fiscal se a guardado con exito!', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('no se ha podido guardar', array('class' => 'alert alert-danger'));
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
			throw new NotFoundException(__('Invalido el proceso del fiscal '));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->FiscalsProceso->save($this->request->data)) {
				$this->Session->setFlash(__('los  proceso fiscales ha sido guardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('los  proceso fiscales no se guardo.inténtelo de nuevo.'));
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
			throw new NotFoundException(__('no existe el proceso de los fiscales '));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->FiscalsProceso->delete()) {
			$this->Session->setFlash(__('los  proceso fiscales ha sido eliminado.'));
		} else {
			$this->Session->setFlash(__('los  proceso fiscales no se elimino.inténtelo de nuevo.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
