<?php
App::uses('AppController', 'Controller');
/**
 * Events Controller
 *
 * @property Event $Event
 * @property PaginatorComponent $Paginator
 */
class EventsController extends AppController {

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
		$this->Event->recursive = 0;
		$this->set('events', $this->Paginator->paginate());
	}

	public function calendario() {
		$this->Event->recursive = 0;

		$tiposEventoAntes = $this->Event->query("SELECT id, name, color FROM event_types;");
		$tiposEventos = array();
		$i=0;
		foreach ($tiposEventoAntes as $tipoEvento){

          
        	$tiposEventos[$i]['id'] = $tipoEvento['event_types']['id'];
        	$tiposEventos[$i]['name'] = $tipoEvento['event_types']['name'];
        	$tiposEventos[$i]['color'] = $tipoEvento['event_types']['color'];
        	$i++;
    	}


    	$eventoAntes = $this->Event->query("SELECT id, title, start FROM events;");
		$eventos = array();
		$i=0;
		foreach ($eventoAntes as $evento){

            
        	$eventos[$i]['id'] = $evento['events']['id'];
        	$eventos[$i]['title'] = $evento['events']['title'];
        	$eventos[$i]['start'] = $evento['events']['start'];
        	$i++;
    	}


		$this->set('events', $this->Paginator->paginate());
		$this->set('tiposEventos', $tiposEventos);
		$this->set('eventos', $eventos);
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Event->exists($id)) {
			throw new NotFoundException(__('evento invalido'));
		}
		$options = array('conditions' => array('Event.' . $this->Event->primaryKey => $id));
		$this->set('event', $this->Event->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($tipoEvento = null, $title = null, $detail = null, $start = null, $end = null) {

		$this->Event->recursive = 0;
        $this->layout = false;

		$this->request->data['Event']['event_types_id'] = $tipoEvento;
		$this->request->data['Event']['title'] = $title;
		$this->request->data['Event']['details'] = $detail;
		$this->request->data['Event']['start'] = $start;
		$this->request->data['Event']['end'] = $end;

			$this->Event->create();
			if ($this->Event->save($this->request->data)) {
				$this->Session->setFlash(__('el event ha sido guardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('el event no se guardo. inténtelo de nuevo.'));
			}
		
		$mensaje["status"] = 1;
        $mensaje["mensaje"] = "El registro no ha podido ser creado. Por favor inténtelo de nuevo.";
        echo son_encode($mensaje) ;

		$this -> render('empty');

	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Event->exists($id)) {
			throw new NotFoundException(__('el evento no existe'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Event->save($this->request->data)) {
				$this->Session->setFlash(__('evento guardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('el evento no se guardo. inténtelo de nuevo.'));
			}
		} else {
			$options = array('conditions' => array('Event.' . $this->Event->primaryKey => $id));
			$this->request->data = $this->Event->find('first', $options);
		}
		$eventTypes = $this->Event->EventType->find('list');
		$users = $this->Event->User->find('list');
		$this->set(compact('eventTypes', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Event->id = $id;
		if (!$this->Event->exists()) {
			throw new NotFoundException(__('el evento no existe'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Event->delete()) {
			$this->Session->setFlash(__(' el evento ha sido eliminado.'));
		} else {
			$this->Session->setFlash(__('el evento no fue eliminado. inténtelo de nuevo.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
