<?php
App::uses('AppController', 'Controller');
/**
 * ArbpeoplepulicArbratesSecpeople Controller
 *
 * @property ArbpeoplepulicArbratesSecperson $ArbpeoplepulicArbratesSecperson
 * @property PaginatorComponent $Paginator
 */
class ArbpeoplepulicArbratesSecpeopleController extends AppController {

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
		$this->ArbpeoplepulicArbratesSecperson->recursive = 0;
		$this->set('arbpeoplepulicArbratesSecpeople', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ArbpeoplepulicArbratesSecperson->exists($id)) {
			throw new NotFoundException(__('Invalid arbpeoplepulic arbrates secperson'));
		}
		$options = array('conditions' => array('ArbpeoplepulicArbratesSecperson.' . $this->ArbpeoplepulicArbratesSecperson->primaryKey => $id));
		$this->set('arbpeoplepulicArbratesSecperson', $this->ArbpeoplepulicArbratesSecperson->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ArbpeoplepulicArbratesSecperson->create();
			if ($this->ArbpeoplepulicArbratesSecperson->save($this->request->data)) {
				$this->Flash->success(__('The arbpeoplepulic arbrates secperson has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The arbpeoplepulic arbrates secperson could not be saved. Please, try again.'));
			}
		}
		$arbpeoplepulicArbrates = $this->ArbpeoplepulicArbratesSecperson->ArbpeoplepulicArbrate->find('list');
		$secpeople = $this->ArbpeoplepulicArbratesSecperson->Secperson->find('list');
		$this->set(compact('arbpeoplepulicArbrates', 'secpeople'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ArbpeoplepulicArbratesSecperson->exists($id)) {
			throw new NotFoundException(__('Invalid arbpeoplepulic arbrates secperson'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ArbpeoplepulicArbratesSecperson->save($this->request->data)) {
				$this->Flash->success(__('The arbpeoplepulic arbrates secperson has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The arbpeoplepulic arbrates secperson could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ArbpeoplepulicArbratesSecperson.' . $this->ArbpeoplepulicArbratesSecperson->primaryKey => $id));
			$this->request->data = $this->ArbpeoplepulicArbratesSecperson->find('first', $options);
		}
		$arbpeoplepulicArbrates = $this->ArbpeoplepulicArbratesSecperson->ArbpeoplepulicArbrate->find('list');
		$secpeople = $this->ArbpeoplepulicArbratesSecperson->Secperson->find('list');
		$this->set(compact('arbpeoplepulicArbrates', 'secpeople'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ArbpeoplepulicArbratesSecperson->id = $id;
		if (!$this->ArbpeoplepulicArbratesSecperson->exists()) {
			throw new NotFoundException(__('Invalid arbpeoplepulic arbrates secperson'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ArbpeoplepulicArbratesSecperson->delete()) {
			$this->Flash->success(__('The arbpeoplepulic arbrates secperson has been deleted.'));
		} else {
			$this->Flash->error(__('The arbpeoplepulic arbrates secperson could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
