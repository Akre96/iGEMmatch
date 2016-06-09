<?php
App::uses('AppController', 'Controller');
/**
 * Categories Controller
 *
 * @property Category $Category
 * @property PaginatorComponent $Paginator
 */
class CategoriesController extends AppController {

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
	//	$this->Category->recursive = 0;
		$categories = $this->Category->find('all');
		$this->set('categories', $categories);
	//	$this->set('allUsers', $this->User->find('all'));
	}
	
	public function home()
	{
		$cats = $this->Category->find('all');
		$this->set('categories',$cats);
		//$this->layout="home";
	}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Category->exists($id)) {
			throw new NotFoundException(__('Invalid category'));
		}
		$options = array('conditions' => array('Category.' . $this->Category->primaryKey => $id));
		$this->set('category', $this->Category->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */


/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */

}
