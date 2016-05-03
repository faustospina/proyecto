<?php
App::uses('AppController', 'Controller');
/**
 * Acusados Controller
 *
 * @property Acusado $Acusado
 * @property PaginatorComponent $Paginator
 */
class AcusadosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Session', 'RequestHandler');
	public $helpers = array('Html', 'Form', 'Time', 'Js');

	  public $paginate = array(
        'limit' => 2,
        'order' => array(
            'Acusado.id' => 'asc'
        )
    );


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Acusado->recursive = 0;

		$this->paginate['Acusado']['limit'] = 2;
		//$this->paginate['Mesero']['conditions'] = array('Mesero.dni' => "34343");
		$this->paginate['Acusado']['order'] = array('Acusado.id' => 'asc');
 		//$this->Paginator->settings = $this->paginate;
		$this->set('acusados', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Acusado->exists($id)) {
			throw new NotFoundException(__('Invalid acusado'));
		}
		$options = array('conditions' => array('Acusado.' . $this->Acusado->primaryKey => $id));
		$this->set('acusado', $this->Acusado->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Acusado->create();
			if ($this->Acusado->save($this->request->data)) {
				$this->Session->setFlash('el acusado se ha guardado con exito', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('controller'=>'procesos','action'=>'add'));
			} else {
				$this->Session->setFlash('no se pudo completar el resgistro', 'default', array('class' => 'alert alert-danger'));
			}
		}
		$users = $this->Acusado->User->find('list');
		$ciudads = $this->Acusado->Ciudad->find('list');
		$audiencias = $this->Acusado->Audiencia->find('list');
		$this->set(compact('users', 'ciudads', 'audiencias'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Acusado->exists($id)) {
			throw new NotFoundException(__('Invalid acusado'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Acusado->save($this->request->data)) {
				$this->Session->setFlash('el acusado ha sido editado con exito', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('no se ha podido editar el acusado', 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Acusado.' . $this->Acusado->primaryKey => $id));
			$this->request->data = $this->Acusado->find('first', $options);
		}
		$users = $this->Acusado->User->find('list');
		$ciudads = $this->Acusado->Ciudad->find('list');
		$audiencias = $this->Acusado->Audiencia->find('list');
		$this->set(compact('users', 'ciudads', 'audiencias'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Acusado->id = $id;
		if (!$this->Acusado->exists()) {
			throw new NotFoundException(__('Invalid acusado'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Acusado->delete()) {
			$this->Session->setFlash('se pudo eliminar', 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash('no se pudo eliminar', 'default', array('class' => 'alert alert-success'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	
	
	
	
		public function searchjson()
	{
		$term = null;
		if(!empty($this->request->query['term']))
		{
			$term = $this->request->query['term'];
			$terms = explode(' ', trim($term));
			$terms = array_diff($terms, array(''));
			foreach($terms as $term)
			{
				$conditions[] = array('Acusado.nombre LIKE' => '%' . $term . '%');
			}
			
			$acusados = $this->Acusado->find('all', array('recursive' => -1, 'fields' => array('Acusado.id', 'Acusado.nombre', 'Acusado.foto', 'Acusado.foto_dir'), 'conditions' => $conditions, 'limit' => 20));
		}
		echo json_encode($acusados);
		$this->autoRender = false;
	}
	
	public function search()
	{
		$search = null;
		if(!empty($this->request->query['search']))
		{
			$search = $this->request->query['search'];
			$search = preg_replace('/[^a-zA-ZñÑáéíóúÁÉÍÓÚ0-9 ]/', '', $search);
			$terms = explode(' ', trim($search));
			$terms = array_diff($terms, array(''));
			
			foreach($terms as $term)
			{
				$terms1[] = preg_replace('/[^a-zA-ZñÑáéíóúÁÉÍÓÚ0-9 ]/', '', $term);
				$conditions[] = array('Acusado.nombre LIKE' => '%' . $term . '%');
			}
			$acusados = $this->Acusado->find('all', array('recursive' => -1, 'conditions' => $conditions, 'limit' => 200));
			if(count($acusados) == 1)
			{
				return $this->redirect(array('controller' => 'acusados', 'action' => 'view', $acusados[0]['Acusado']['id']));
			}
			$terms1 = array_diff($terms1, array(''));
			$this->set(compact('acusados', 'terms1'));
		}
		$this->set(compact('search'));
		
		if($this->request->is('ajax'))
		{
			$this->layout = false;
			$this->set('ajax', 1);
		}
		else
		{
			$this->set('ajax', 0);
		}
	}
}
