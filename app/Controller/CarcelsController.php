<?php
App::uses('AppController', 'Controller');
/**
 * Carcels Controller
 *
 * @property Carcel $Carcel
 * @property PaginatorComponent $Paginator
 */
class CarcelsController extends AppController {

/**
 * Components
 */
	public $components = array('Session', 'RequestHandler');
	public $helpers = array('Html', 'Form', 'Time', 'Js');

	  public $paginate = array(
        'limit' => 3,
        'order' => array(
            'Carcel.id' => 'asc'
        )
    );


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Carcel->recursive = 0;

		$this->paginate['Carcel']['limit'] = 3;
		$this->paginate['Carcel']['order'] = array('Carcel.id' => 'asc');
		$this->set('carcels', $this->paginate());
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Carcel->exists($id)) {
			throw new NotFoundException(__('la carcel es invalidad'));
		}
		$options = array('conditions' => array('Carcel.' . $this->Carcel->primaryKey => $id));
		$this->set('carcel', $this->Carcel->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Carcel->create();
			if ($this->Carcel->save($this->request->data)) {
				$this->Session->setFlash(__('la carcel ha sido guadada.'));
				return $this->redirect(array('controller'=>'pages','action'=>'home'));
			} else {
				$this->Session->setFlash(__('no se pudo guardar la carcel. inténtelo de nuevo.'));
			}
		}
		$ciudads = $this->Carcel->Ciudad->find('list');
		$audiencias = $this->Carcel->Audiencia->find('list');
		$this->set(compact('ciudads', 'audiencias'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Carcel->exists($id)) {
			throw new NotFoundException(__('esta carcel no existe'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Carcel->save($this->request->data)) {
				$this->Session->setFlash(__('carcel se ha guardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('no se guardo la carcel. inténtelo de nuevo.'));
			}
		} else {
			$options = array('conditions' => array('Carcel.' . $this->Carcel->primaryKey => $id));
			$this->request->data = $this->Carcel->find('first', $options);
		}
		$ciudads = $this->Carcel->Ciudad->find('list');
		$audiencias = $this->Carcel->Audiencia->find('list');
		$this->set(compact('ciudads', 'audiencias'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Carcel->id = $id;
		if (!$this->Carcel->exists()) {
			throw new NotFoundException(__('no es posible eliminar la carcel ya que no existe'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Carcel->delete()) {
			$this->Session->setFlash(__('la carcel ha sido eliminada.'));
		} else {
			$this->Session->setFlash(__('no se pudo eliminar la carcel. inténtelo de nuevo.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
