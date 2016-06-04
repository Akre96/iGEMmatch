<?php
App::uses('AppController', 'Controller');
/**
 * KeywordsUsers Controller
 *
 * @property KeywordsUser $KeywordsUser
 * @property PaginatorComponent $Paginator
 */
class KeywordsUsersController extends AppController {

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
		$this->KeywordsUser->recursive = 0;
		$this->set('keywordsUsers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->KeywordsUser->exists($id)) {
			throw new NotFoundException(__('Invalid keywords user'));
		}
		$options = array('conditions' => array('KeywordsUser.' . $this->KeywordsUser->primaryKey => $id));
		$this->set('keywordsUser', $this->KeywordsUser->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->KeywordsUser->create();
			if ($this->KeywordsUser->save($this->request->data)) {
				$this->Flash->success(__('The keywords user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The keywords user could not be saved. Please, try again.'));
			}
		}
		$keywords = $this->KeywordsUser->Keyword->find('list');
		$users = $this->KeywordsUser->User->find('list');
		$this->set(compact('keywords', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->KeywordsUser->exists($id)) {
			throw new NotFoundException(__('Invalid keywords user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->KeywordsUser->save($this->request->data)) {
				$this->Flash->success(__('The keywords user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The keywords user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('KeywordsUser.' . $this->KeywordsUser->primaryKey => $id));
			$this->request->data = $this->KeywordsUser->find('first', $options);
		}
		$keywords = $this->KeywordsUser->Keyword->find('list');
		$users = $this->KeywordsUser->User->find('list');
		$this->set(compact('keywords', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->KeywordsUser->id = $id;
		if (!$this->KeywordsUser->exists()) {
			throw new NotFoundException(__('Invalid keywords user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->KeywordsUser->delete()) {
			$this->Flash->success(__('The keywords user has been deleted.'));
		} else {
			$this->Flash->error(__('The keywords user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
