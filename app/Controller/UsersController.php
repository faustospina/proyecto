<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UsersController extends AppController {

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
            'User.id' => 'asc'
        )
    );

    
/**
 * index beferoFilter
 *
 * @return void
 */
public function beforeFilter()
	{
		parent::beforeFilter();
	
 
	}
	
/**
 * index login
 *
 * @return void
 */	
public function login()
	{
		if($this->request->is('post'))
		{
			if($this->Auth->login())
			{
				return $this->redirect($this->Auth->redirectUrl());
			}
			$this->Session->setFlash('Usuario y/o contraseña son incorrectos!', 'default', array('class' => 'alert alert-danger'));
		}
	}
	
/**
 * index logout
 *
 * @return void
 */
public function logout()
	{
		return $this->redirect($this->Auth->logout());
	}
	
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;

		$this->paginate['User']['limit'] = 3;
		$this->paginate['User']['order'] = array('User.id' => 'asc');
		$this->set('users', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('usuario es invalido'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			$this->request->data['User']['roll'] = 'user';
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('se ha agregado el usuario satisfactoriamente', 'default', array('class' => 'alert alert-success'));
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
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('usuario no existe'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('el usuario ha sido guardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('el usuario no ha sido guardado. inténtelo de nuevo.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
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
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('el usuario no existe'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('el usuario ha sido eliminado.'));
		} else {
			$this->Session->setFlash(__('el usuario no ha sido eliminado. inténtelo de nuevo.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
