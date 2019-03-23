<?php
App::uses('AppController', 'Controller');
/**
 * Arbpeoplepublics Controller
 *
 * @property Arbpeoplepublic $Arbpeoplepublic
 * @property PaginatorComponent $Paginator
 */
class ArbpeoplepublicsController extends AppController {

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
	public function index($paginador=null) {

		$arbpeoplepublics=$this->paginate('Arbpeoplepublic');
		$this->set(compact('arbpeoplepublics'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Arbpeoplepublic->exists($id)) {
			throw new NotFoundException(__('Invalid arbpeoplepublic'));
		}
		$options = array('conditions' => array('Arbpeoplepublic.' . $this->Arbpeoplepublic->primaryKey => $id));
		$this->set('arbpeoplepublic', $this->Arbpeoplepublic->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Arbpeoplepublic->create();
			if ($this->Arbpeoplepublic->save($this->request->data)) {
				$this->Flash->success(__('The arbpeoplepublic has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The arbpeoplepublic could not be saved. Please, try again.'));
			}
		}
		$arbubigeos = $this->Arbpeoplepublic->Arbubigeo->find('list');
		$this->set(compact('arbubigeos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Arbpeoplepublic->exists($id)) {
			throw new NotFoundException(__('Invalid arbpeoplepublic'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Arbpeoplepublic->save($this->request->data)) {
				$this->Flash->success(__('The arbpeoplepublic has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The arbpeoplepublic could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Arbpeoplepublic.' . $this->Arbpeoplepublic->primaryKey => $id));
			$this->request->data = $this->Arbpeoplepublic->find('first', $options);
		}
		$arbubigeos = $this->Arbpeoplepublic->Arbubigeo->find('list');
		$this->set(compact('arbubigeos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Arbpeoplepublic->id = $id;
		if (!$this->Arbpeoplepublic->exists()) {
			throw new NotFoundException(__('Invalid arbpeoplepublic'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Arbpeoplepublic->delete()) {
			$this->Flash->success(__('The arbpeoplepublic has been deleted.'));
		} else {
			$this->Flash->error(__('The arbpeoplepublic could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
